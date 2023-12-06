<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 3, 7, 12, 5, 8, 6, 2, 1, 10, 9, 11',
		'Pla Odds'  =>  '4, 3, 7, 12, 5, 8, 10, 6, 2, 1, 9, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '7',
		/** Based on pla odds */
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '3, 7, 8, 6, 1, 10, 9, 12, 4, 2, 5, 11',
		'Pla Odds'  =>  '3, 8, 10, 1, 6, 7, 9, 12, 2, 5, 4, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '8',
		'SURE PLACE' => '8',
		/** Based on pla odds */
		'history p' => '8, 6',
		'SURE PLACE' => '8',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '10, 2, 7, 11, 8, 6, 9, 1, 4, 5, 12, 3',
		'Pla Odds'  =>  '10, 8, 2, 7, 11, 9, 1, 6, 12, 4, 5, 3',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
		'history p' => '10, 2',
		'SURE PLACE' => '10, 2',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '4, 12, 6, 5, 9, 2, 10, 11, 1, 3, 7, 8',
		'Pla Odds'  =>  '4, 5, 12, 6, 9, 11, 2, 10, 1, 3, 8, 7',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '4, 11, 7, 5, 3, 2, 8, 12, 10, 6, 1, 9',
		'Pla Odds'  =>  '4, 11, 7, 5, 1, 2, 3, 10, 8, 12, 6, 9',
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
		'Win Odds'  =>  '4, 5, 3, 9, 12, 8, 7, 11, 6, 1, 2, 10',
		'Pla Odds'  =>  '3, 5, 4, 9, 12, 7, 11, 8, 2, 6, 1, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 7)' => '8',
		/** Black selection */
		'history w' => '8, 11',
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '12',
		'history p' => '4, 11, 8',
		'SURE PLACE' => '4',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 2, 3, 5, 10, 8, 11, 6, 9, 7, 1, 12',
		'Pla Odds'  =>  '4, 5, 3, 2, 8, 10, 11, 6, 9, 7, 1, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '4',
		'win odds candidate(k = 9)' => '5',
		/** Black selection */
		'history w' => '4, 10',
		'SURE PLACE' => '4',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '4',
		'pla odds candidate(k = 9)' => '2',
		'history p' => '4, 2, 11',
		'SURE PLACE' => '4, 2',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '9, 11, 10, 5, 3, 1, 2, 12, 8, 7, 6, 4',
		'Pla Odds'  =>  '9, 3, 10, 5, 11, 12, 1, 8, 2, 6, 7, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '11',
		'SURE PLACE' => '11',
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '11',
		'history p' => '11',
		'SURE PLACE' => '11',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 7, 5, 4, 1, 10, 2, 11, 3, 8, 9, 12',
		'Pla Odds'  =>  '6, 7, 11, 1, 5, 4, 2, 10, 3, 8, 9, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '6',
		/** Black selection */
		'history w' => '6',
		'SURE PLACE' => '6',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '6',
		'history p' => '6, 11',
		'SURE PLACE' => '6',
	],
];
