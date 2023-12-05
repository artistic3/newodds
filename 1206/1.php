<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 3, 12, 7, 5, 1, 6, 9, 2, 10, 8, 11',
		'Pla Odds'  =>  '4, 12, 3, 9, 5, 7, 8, 10, 1, 2, 6, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '12',
		/** Based on pla odds */
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '8, 3, 6, 7, 9, 4, 1, 10, 12, 11, 2, 5',
		'Pla Odds'  =>  '3, 9, 4, 12, 8, 6, 1, 7, 10, 5, 11, 2',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 11)' => '9',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '7, 2, 10, 8, 11, 6, 5, 1, 4, 9, 12, 3',
		'Pla Odds'  =>  '10, 8, 7, 11, 2, 5, 6, 12, 1, 9, 4, 3',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '4, 6, 12, 11, 5, 9, 10, 1, 2, 3, 8, 7',
		'Pla Odds'  =>  '4, 11, 12, 6, 10, 9, 2, 1, 5, 3, 8, 7',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '4, 7, 11, 3, 5, 2, 12, 8, 6, 1, 10, 9',
		'Pla Odds'  =>  '4, 7, 3, 11, 5, 12, 8, 6, 1, 2, 10, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '5',
		/** Based on pla odds */
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '12, 4, 9, 3, 11, 8, 7, 5, 1, 6, 2, 10',
		'Pla Odds'  =>  '12, 3, 4, 9, 11, 8, 7, 5, 6, 1, 10, 2',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 7)' => '8',
		/** Black selection */
		'history w' => '8',
		/** Based on pla odds */
		'pla odds candidate(k = 7)' => '8',
		'history p' => '8',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 2, 3, 5, 11, 10, 7, 9, 8, 6, 1, 12',
		'Pla Odds'  =>  '3, 4, 2, 10, 5, 11, 9, 6, 7, 1, 12, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '4',
		'win odds candidate(k = 7)' => '10',
		/** Black selection */
		'history w' => '4, 10',
		'SURE PLACE' => '4',
		/** Based on pla odds */
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '9, 10, 11, 2, 5, 3, 6, 8, 12, 1, 7, 4',
		'Pla Odds'  =>  '9, 10, 1, 3, 11, 12, 2, 5, 6, 8, 4, 7',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '5',
		/** Based on pla odds */
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 7, 4, 3, 5, 11, 10, 2, 9, 1, 12, 8',
		'Pla Odds'  =>  '6, 11, 5, 7, 3, 4, 9, 10, 2, 1, 8, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 9)' => '3',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '6',
		'history p' => '6',
		'SURE PLACE' => '6',
	],
];
