<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 3, 7, 12, 5, 8, 6, 2, 1, 10, 9, 11',
		'Pla Odds'  =>  '4, 3, 12, 5, 7, 8, 10, 2, 6, 1, 9, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '7',
		/** Based on pla odds */
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '3, 8, 6, 1, 7, 10, 9, 12, 4, 5, 2, 11',
		'Pla Odds'  =>  '3, 8, 6, 1, 10, 7, 9, 12, 4, 5, 11, 2',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '8',
		'SURE PLACE' => '8',
		/** Based on pla odds */
		'pla odds candidate(k = 11)' => '8',
		'history p' => '8, 6',
		'SURE PLACE' => '8, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '2, 10, 7, 11, 8, 6, 1, 5, 4, 9, 12, 3',
		'Pla Odds'  =>  '10, 8, 2, 7, 11, 9, 6, 1, 12, 5, 4, 3',
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
		'Win Odds'  =>  '4, 12, 6, 5, 9, 10, 11, 2, 1, 3, 7, 8',
		'Pla Odds'  =>  '4, 12, 6, 5, 9, 11, 2, 10, 1, 3, 8, 7',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '4, 11, 7, 8, 3, 5, 12, 2, 10, 1, 6, 9',
		'Pla Odds'  =>  '4, 11, 7, 8, 5, 2, 3, 10, 12, 6, 1, 9',
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
		'Win Odds'  =>  '3, 5, 8, 4, 9, 12, 7, 11, 2, 1, 6, 10',
		'Pla Odds'  =>  '5, 3, 9, 11, 12, 4, 8, 7, 2, 6, 1, 10',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 7)' => '12',
		/** Black selection */
		'history w' => '8, 11',
		'SURE PLACE' => '8',
		/** Based on pla odds */
		'history p' => '11, 8, 4',
		'SURE PLACE' => '8',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 2, 3, 10, 5, 11, 8, 1, 6, 9, 7, 12',
		'Pla Odds'  =>  '4, 3, 2, 10, 5, 11, 8, 9, 7, 6, 1, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '4',
		/** Black selection */
		'history w' => '4, 10',
		'SURE PLACE' => '4',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '4',
		'history p' => '4, 11',
		'SURE PLACE' => '4',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '9, 11, 10, 3, 5, 2, 1, 12, 8, 6, 7, 4',
		'Pla Odds'  =>  '9, 3, 10, 11, 5, 1, 8, 12, 2, 6, 7, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '11',
		'SURE PLACE' => '11',
		/** Based on pla odds */
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 7, 4, 5, 2, 1, 11, 3, 10, 8, 9, 12',
		'Pla Odds'  =>  '6, 7, 11, 2, 4, 1, 5, 3, 10, 8, 9, 12',
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
