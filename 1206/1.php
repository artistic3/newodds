<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 7, 1, 5, 3, 10, 8, 6, 12, 2, 9, 11',
		'Pla Odds'  =>  '4, 3, 5, 1, 7, 10, 12, 8, 6, 2, 9, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '7',
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '3, 10, 8, 7, 1, 9, 6, 5, 12, 2, 4, 11',
		'Pla Odds'  =>  '3, 10, 7, 8, 9, 5, 6, 1, 12, 11, 4, 2',
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
		'Win Odds'  =>  '8, 10, 2, 7, 11, 6, 9, 1, 5, 4, 12, 3',
		'Pla Odds'  =>  '8, 2, 7, 10, 11, 9, 6, 12, 1, 5, 4, 3',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '8',
		'SURE PLACE' => '8',
		/** Based on pla odds */
		'history p' => '2, 10',
		'SURE PLACE' => '2, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '4, 12, 6, 5, 9, 10, 2, 11, 1, 3, 7, 8',
		'Pla Odds'  =>  '4, 5, 12, 6, 9, 10, 2, 11, 1, 3, 7, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '4, 11, 7, 5, 3, 2, 10, 12, 8, 6, 1, 9',
		'Pla Odds'  =>  '4, 11, 7, 5, 2, 3, 10, 1, 12, 8, 6, 9',
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
		'Win Odds'  =>  '4, 9, 5, 8, 3, 12, 7, 11, 6, 1, 2, 10',
		'Pla Odds'  =>  '4, 5, 3, 9, 7, 12, 11, 8, 6, 2, 1, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 7)' => '12',
		/** Black selection */
		'history w' => '8, 11',
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '7',
		'history p' => '4, 11, 8',
		'SURE PLACE' => '4',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 2, 3, 8, 5, 10, 11, 1, 9, 6, 7, 12',
		'Pla Odds'  =>  '4, 3, 10, 2, 8, 11, 1, 5, 9, 6, 7, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '4',
		'win odds candidate(k = 9)' => '8',
		/** Black selection */
		'history w' => '4, 8, 10',
		'SURE PLACE' => '4',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '4',
		'pla odds candidate(k = 9)' => '2',
		'history p' => '4, 10, 8, 11, 2',
		'SURE PLACE' => '4, 2',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '9, 11, 5, 10, 3, 1, 2, 12, 8, 7, 6, 4',
		'Pla Odds'  =>  '9, 11, 3, 10, 5, 12, 1, 2, 8, 7, 6, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '11',
		'SURE PLACE' => '11',
		/** Based on pla odds */
		'history p' => '11',
		'SURE PLACE' => '11',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 7, 5, 4, 1, 10, 2, 11, 3, 8, 9, 12',
		'Pla Odds'  =>  '6, 7, 1, 5, 4, 11, 10, 2, 3, 8, 9, 12',
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
