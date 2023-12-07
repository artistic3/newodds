<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "history";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allWinOdds = include($currentDir . DIRECTORY_SEPARATOR . "getodds.php");
$plaOddsFile = $currentDir . DIRECTORY_SEPARATOR . "placeodds.php";
if(file_exists($plaOddsFile)){
    $allPlaOdds = include($plaOddsFile);
}
$winPositionDifferences = [];
$plaPositionDifferences = [];
$raceFavorites = [];
foreach($allWinOdds as $raceNumber => $runners){
    $winPositionDifferences[$raceNumber] = [];
    $plaPositionDifferences[$raceNumber] = [];
    $raceFavorites[$raceNumber] = [];
    foreach($runners as $runner => $omg){
        $winPositionDifferences[$raceNumber][$runner] = 0;
        $plaPositionDifferences[$raceNumber][$runner] = 0;
    }
}
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";
//Get win odds (getodds.php) and place odds(placeodds.php) fromthe previous git commit
$output = array();
$history = array();
chdir($currentDir);
exec("git log",$output);
foreach($output as $line){
    if(strpos($line, 'commit')===0){
        $history[]   = substr($line, strlen('commit'));
    }
}
//limit search to last 500 commits
$history = array_slice($history, 0, 500);
exec("git config --global advice.detachedHead false");
for($count = count($history); $count > 1; $count --){
    $oldVersion = $history[$count - 1];
    $newVersion = $history[$count - 2];
    exec("git checkout $oldVersion; cp $currentDir/1.php tmp1.php",$command_output,$result_code);
    if($result_code!== 0) continue;
    $oldContents = include("tmp1.php");
    exec("rm tmp1.php");
    exec("git checkout main");
    exec("git checkout $newVersion; cp $currentDir/1.php tmp2.php",$command_output,$result_code);
    if($result_code!== 0) continue;
    $newContents = include("tmp2.php");
    exec("rm tmp2.php");
    exec("git checkout main");
    exec("cp $currentDir/1.php tmp3.php",$command_output,$result_code);
    if($result_code!== 0) continue;
    $currentContents = include("tmp3.php");
    exec("rm tmp2.php");
    foreach($allWinOdds as $raceNumber => $runners){
        if(!isset($oldContents[$raceNumber]['Win Odds']) 
        || !isset($newContents[$raceNumber]['Win Odds'])) continue;
        $oldWinOdds = explode(", ", $oldContents[$raceNumber]['Win Odds']);
        $newWinOdds = explode(", ", $newContents[$raceNumber]['Win Odds']);
        $currentWinOdds = explode(", ", $currentContents[$raceNumber]['Win Odds']);
        $oldPlaOdds = explode(", ", $oldContents[$raceNumber]['Pla Odds']);
        $newPlaOdds = explode(", ", $newContents[$raceNumber]['Pla Odds']);
        $currentPlaOdds = explode(", ", $currentContents[$raceNumber]['Pla Odds']);
        $raceFavorites[$raceNumber] = array_unique(array_values(array_merge(
            array_slice($currentWinOdds, 0, 3),
            array_slice($currentPlaOdds, 0, 3),
        )));
        
        foreach($runners as $runner => $whatever){
            $oldRunnerPosition = array_search($runner, $oldWinOdds);
            $oldPlacePosition = array_search($runner, $oldPlaOdds);
            $newRunnerPosition = array_search($runner, $newWinOdds);
            $newPlacePosition = array_search($runner, $newPlaOdds);
            $winOddsPositionDiff = $newRunnerPosition - $oldRunnerPosition;
            $plaOddsPositionDiff = $newPlacePosition - $oldPlacePosition;
            $winPositionDifferences[$raceNumber][$runner] += $winOddsPositionDiff;
            $plaPositionDifferences[$raceNumber][$runner] += $plaOddsPositionDiff;
        }
    }
}
$outtext = "<?php\n\n";
$outtext .= "return [\n";
$totalRaces= count($allWinOdds);
for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allWinOdds[$raceNumber])) continue;

    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";

    $runnersPositions = $winPositionDifferences[$raceNumber];
    $negativeRunners = [];
    asort($runnersPositions);
    $racetext .= "\t\t'win odds mvnt'  =>  '";
    foreach($runnersPositions as $key => $value){
        $racetext .= "$key($value), ";
        if($value < 0) $negativeRunners[] = $key;
    }
    $racetext .= "',\n";
    $winSuggestions = array_intersect($raceFavorites[$raceNumber], $negativeRunners);
    $racetext .= "\t\t'Win suggestions'  =>  '" . implode(", ", $winSuggestions).  "',\n";

    $placePositions = $plaPositionDifferences[$raceNumber];
    $negativePlacers = [];
    asort($placePositions);
    $racetext .= "\t\t'pla odds mvnt'  =>  '";
    foreach($placePositions as $key => $value){
        $racetext .= "$key($value), ";
        if($value < 0) $negativePlacers[] = $key;
    }
    $racetext .= "',\n";
    $plaSuggestions = array_intersect($raceFavorites[$raceNumber], $negativePlacers);
    $racetext .= "\t\t'Pla suggestions'  =>  '" . implode(", ", $plaSuggestions).  "',\n";
    
    $racetext .= "\t],\n";
    $outtext .= $racetext;
}

$outtext .= "];\n";

file_put_contents($outFile, $outtext);
