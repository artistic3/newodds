<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 3, 7, 12, 5, 1, 6, 8, 2, 10, 9, 11',
		'Pla Odds'  =>  '4, 3, 12, 7, 8, 5, 10, 9, 2, 6, 1, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '7',
		'win odds candidate(k = 8)' => '5',
		/** Based on pla odds */
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '3, 8, 6, 7, 1, 9, 4, 10, 12, 2, 11, 5',
		'Pla Odds'  =>  '3, 9, 6, 8, 12, 4, 1, 7, 10, 11, 5, 2',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 11)' => '8',
		/** Black selection */
		'history w' => '8',
		'SURE PLACE' => '8',
		/** Based on pla odds */
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '2, 7, 10, 11, 8, 6, 9, 1, 5, 4, 12, 3',
		'Pla Odds'  =>  '8, 11, 2, 10, 7, 9, 6, 1, 5, 12, 4, 3',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
		'history p' => '2, 10',
		'SURE PLACE' => '2, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '4, 6, 12, 5, 9, 10, 11, 2, 1, 3, 8, 7',
		'Pla Odds'  =>  '4, 11, 9, 6, 12, 10, 2, 5, 1, 3, 8, 7',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '4, 11, 7, 3, 5, 12, 2, 8, 10, 6, 1, 9',
		'Pla Odds'  =>  '4, 7, 11, 5, 3, 10, 12, 8, 2, 6, 1, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '5',
		/** Black selection */
		'history w' => '11',
		'SURE PLACE' => '11',
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '3',
		'history p' => '11',
		'SURE PLACE' => '11',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '12, 4, 9, 3, 11, 7, 8, 1, 5, 6, 2, 10',
		'Pla Odds'  =>  '4, 12, 11, 9, 3, 7, 8, 5, 1, 10, 6, 2',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '8',
		/** Based on pla odds */
		'pla odds candidate(k = 10)' => '11',
		'history p' => '11, 8',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 3, 2, 5, 10, 11, 9, 8, 6, 7, 1, 12',
		'Pla Odds'  =>  '4, 3, 10, 9, 2, 5, 6, 11, 1, 7, 12, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '4',
		'win odds candidate(k = 8)' => '10',
		/** Black selection */
		'history w' => '4, 10',
		'SURE PLACE' => '4',
		/** Based on pla odds */
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '9, 10, 2, 5, 12, 11, 3, 8, 1, 6, 7, 4',
		'Pla Odds'  =>  '10, 9, 11, 5, 3, 1, 8, 12, 2, 6, 7, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '12',
		/** Based on pla odds */
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 7, 4, 5, 3, 11, 2, 1, 10, 9, 12, 8',
		'Pla Odds'  =>  '6, 5, 11, 7, 4, 3, 1, 2, 9, 10, 8, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '6',
		'pla odds candidate(k = 10)' => '11',
		'pla odds candidate(k = 9)' => '7',
		'history p' => '6, 11',
		'SURE PLACE' => '6',
	],
];
