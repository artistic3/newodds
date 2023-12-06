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
		'Win Odds'  =>  '8, 7, 10, 2, 11, 4, 9, 6, 5, 1, 12, 3',
		'Pla Odds'  =>  '7, 8, 2, 10, 11, 9, 4, 6, 1, 12, 5, 3',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '8',
		'SURE PLACE' => '8',
		/** Based on pla odds */
		'history p' => '2, 10',
		'SURE PLACE' => '10',
	],
	'4' => [
		/**
		Race 4
		*/
		'Win Odds'  =>  '4, 12, 2, 9, 6, 5, 11, 1, 10, 3, 7, 8',
		'Pla Odds'  =>  '4, 2, 11, 5, 6, 9, 12, 1, 10, 3, 7, 8',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '4, 11, 7, 5, 3, 2, 10, 12, 8, 6, 1, 9',
		'Pla Odds'  =>  '4, 11, 7, 5, 3, 2, 10, 12, 1, 8, 6, 9',
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
		'Win Odds'  =>  '4, 9, 5, 3, 8, 12, 7, 11, 6, 1, 2, 10',
		'Pla Odds'  =>  '4, 5, 3, 9, 12, 7, 11, 8, 6, 1, 2, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 7)' => '12',
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
		'Win Odds'  =>  '4, 2, 3, 5, 8, 10, 11, 1, 6, 7, 9, 12',
		'Pla Odds'  =>  '10, 4, 11, 3, 8, 2, 1, 5, 9, 7, 6, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '4',
		/** Black selection */
		'history w' => '4, 8, 10',
		'SURE PLACE' => '4',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '10',
		'pla odds candidate(k = 9)' => '3',
		'history p' => '10, 4, 11, 8, 2',
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
		'Pla Odds'  =>  '6, 7, 5, 1, 4, 10, 11, 2, 3, 8, 9, 12',
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
