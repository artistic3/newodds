<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 3, 7, 12, 5, 2, 1, 8, 6, 10, 9, 11',
		'Pla Odds'  =>  '3, 4, 12, 7, 5, 8, 10, 2, 1, 9, 6, 11',
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
		'Win Odds'  =>  '3, 8, 6, 7, 12, 1, 9, 10, 4, 5, 2, 11',
		'Pla Odds'  =>  '3, 6, 9, 8, 12, 7, 1, 4, 10, 5, 11, 2',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '8',
		'SURE PLACE' => '8',
		/** Based on pla odds */
		'pla odds candidate(k = 11)' => '6',
		'history p' => '6',
		'SURE PLACE' => '6',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '2, 7, 10, 11, 8, 6, 1, 9, 5, 4, 12, 3',
		'Pla Odds'  =>  '7, 8, 2, 10, 11, 6, 9, 1, 5, 4, 12, 3',
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
		'Win Odds'  =>  '4, 12, 6, 5, 9, 10, 11, 2, 1, 3, 7, 8',
		'Pla Odds'  =>  '4, 6, 12, 9, 11, 2, 5, 10, 3, 1, 7, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '4, 7, 11, 3, 5, 12, 2, 10, 8, 6, 1, 9',
		'Pla Odds'  =>  '4, 7, 2, 11, 5, 10, 3, 12, 8, 6, 1, 9',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '11',
		'SURE PLACE' => '11',
		/** Based on pla odds */
		'history p' => '11',
		'SURE PLACE' => '11',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win Odds'  =>  '12, 4, 3, 9, 11, 7, 5, 8, 1, 6, 2, 10',
		'Pla Odds'  =>  '5, 11, 4, 3, 12, 7, 9, 8, 1, 10, 6, 2',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 8)' => '11',
		/** Black selection */
		'history w' => '11, 8',
		/** Based on pla odds */
		'pla odds candidate(k = 10)' => '4',
		'pla odds candidate(k = 8)' => '12',
		'history p' => '11, 4, 8',
		'SURE PLACE' => '4',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 3, 2, 5, 10, 11, 9, 8, 7, 6, 1, 12',
		'Pla Odds'  =>  '4, 2, 9, 3, 10, 5, 11, 1, 8, 7, 6, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '4',
		'win odds candidate(k = 8)' => '10',
		/** Black selection */
		'history w' => '4, 10',
		'SURE PLACE' => '4',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '4',
		'history p' => '4',
		'SURE PLACE' => '4',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '9, 10, 5, 11, 2, 12, 1, 3, 8, 6, 7, 4',
		'Pla Odds'  =>  '9, 10, 1, 11, 3, 5, 8, 12, 2, 6, 7, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '11',
		/** Based on pla odds */
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 7, 4, 2, 5, 11, 1, 3, 10, 9, 12, 8',
		'Pla Odds'  =>  '6, 7, 2, 11, 5, 4, 10, 1, 3, 9, 12, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '6',
		'SURE PLACE' => '6',
		/** Based on pla odds */
		'history p' => '6, 11',
		'SURE PLACE' => '6',
	],
];
