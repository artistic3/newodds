<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 3, 7, 12, 5, 1, 8, 9, 10, 2, 6, 11',
		'Pla Odds'  =>  '4, 3, 12, 7, 5, 9, 10, 8, 1, 2, 6, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '5',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '3, 8, 7, 6, 9, 4, 1, 12, 10, 11, 2, 5',
		'Pla Odds'  =>  '9, 3, 6, 8, 4, 12, 1, 7, 10, 11, 5, 2',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '2, 7, 10, 8, 11, 6, 5, 1, 4, 9, 12, 3',
		'Pla Odds'  =>  '8, 11, 10, 2, 7, 6, 1, 5, 9, 12, 4, 3',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 9)' => '2',
		'history p' => '2',
		'SURE PLACE' => '2',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '4, 6, 12, 11, 10, 9, 5, 1, 2, 3, 7, 8',
		'Pla Odds'  =>  '4, 11, 12, 6, 10, 2, 9, 1, 5, 3, 8, 7',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '4, 7, 11, 3, 5, 12, 2, 8, 6, 1, 9, 10',
		'Pla Odds'  =>  '4, 7, 11, 3, 5, 12, 8, 1, 10, 6, 2, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '5',
		/** Based on pla odds */
		'history p' => '11',
		'SURE PLACE' => '11',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '12, 9, 4, 3, 11, 8, 7, 1, 5, 6, 2, 10',
		'Pla Odds'  =>  '12, 3, 9, 11, 4, 8, 7, 5, 1, 6, 10, 2',
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
		'Win Odds'  =>  '4, 2, 3, 5, 10, 11, 9, 7, 8, 6, 1, 12',
		'Pla Odds'  =>  '3, 4, 2, 10, 5, 9, 11, 1, 6, 7, 12, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '4',
		/** Black selection */
		'history w' => '4, 10',
		'SURE PLACE' => '4',
		/** Based on pla odds */
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '9, 10, 11, 2, 3, 5, 8, 12, 6, 1, 7, 4',
		'Pla Odds'  =>  '9, 10, 3, 11, 1, 2, 12, 5, 6, 8, 7, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 7, 4, 5, 3, 11, 10, 1, 2, 9, 12, 8',
		'Pla Odds'  =>  '6, 11, 5, 4, 7, 3, 9, 10, 2, 1, 8, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '6',
		'history p' => '6',
		'SURE PLACE' => '6',
	],
];
