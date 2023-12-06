<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Win Odds'  =>  '4, 3, 7, 12, 5, 2, 8, 6, 1, 10, 9, 11',
		'Pla Odds'  =>  '4, 3, 7, 12, 5, 10, 8, 2, 1, 9, 6, 11',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 10)' => '7',
		/** Based on pla odds */
	],
	'2' => [
		/**
		Race 2
		*/
		'Win Odds'  =>  '3, 6, 8, 7, 1, 9, 10, 12, 4, 5, 2, 11',
		'Pla Odds'  =>  '3, 6, 8, 9, 1, 12, 7, 10, 4, 5, 11, 2',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '8',
		'SURE PLACE' => '8',
		/** Based on pla odds */
		'pla odds candidate(k = 11)' => '6',
		'pla odds candidate(k = 7)' => '12',
		'history p' => '6',
		'SURE PLACE' => '6',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win Odds'  =>  '2, 10, 7, 8, 11, 6, 5, 4, 1, 9, 12, 3',
		'Pla Odds'  =>  '10, 8, 7, 2, 11, 6, 9, 1, 5, 12, 4, 3',
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
		'Win Odds'  =>  '4, 12, 6, 5, 9, 10, 2, 11, 1, 3, 7, 8',
		'Pla Odds'  =>  '4, 6, 12, 2, 9, 5, 11, 10, 1, 3, 8, 7',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Based on pla odds */
	],
	'5' => [
		/**
		Race 5
		*/
		'Win Odds'  =>  '4, 7, 11, 8, 3, 5, 12, 2, 10, 6, 9, 1',
		'Pla Odds'  =>  '4, 8, 7, 11, 2, 5, 10, 3, 12, 6, 1, 9',
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
		'Win Odds'  =>  '12, 8, 9, 3, 4, 11, 7, 5, 1, 6, 2, 10',
		'Pla Odds'  =>  '5, 12, 11, 3, 9, 4, 8, 7, 1, 6, 10, 2',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 7)' => '11',
		/** Black selection */
		'history w' => '8, 11',
		'SURE PLACE' => '8',
		/** Based on pla odds */
		'history p' => '11, 4, 8',
		'SURE PLACE' => '8',
	],
	'7' => [
		/**
		Race 7
		*/
		'Win Odds'  =>  '4, 2, 3, 10, 5, 11, 1, 6, 8, 9, 7, 12',
		'Pla Odds'  =>  '4, 2, 3, 10, 5, 9, 11, 8, 1, 6, 7, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '4',
		/** Black selection */
		'history w' => '4, 10',
		'SURE PLACE' => '4',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '4',
		'pla odds candidate(k = 8)' => '5',
		'history p' => '4',
		'SURE PLACE' => '4',
	],
	'8' => [
		/**
		Race 8
		*/
		'Win Odds'  =>  '9, 11, 3, 10, 5, 2, 12, 1, 8, 6, 7, 4',
		'Pla Odds'  =>  '9, 3, 10, 11, 1, 5, 2, 8, 12, 6, 7, 4',
		'Total Runners '  =>  12,
		/** Based on win odds */
		/** Black selection */
		'history w' => '11',
		'SURE PLACE' => '11',
		/** Based on pla odds */
		'pla odds candidate(k = 8)' => '1',
	],
	'9' => [
		/**
		Race 9
		*/
		'Win Odds'  =>  '6, 7, 2, 4, 5, 1, 9, 8, 10, 3, 11, 12',
		'Pla Odds'  =>  '6, 7, 2, 4, 11, 5, 1, 10, 3, 8, 9, 12',
		'Total Runners '  =>  12,
		/** Based on win odds */
		'win odds candidate(k = 12)' => '6',
		'win odds candidate(k = 11)' => '7',
		'win odds candidate(k = 8)' => '5',
		/** Black selection */
		'history w' => '6',
		'SURE PLACE' => '6',
		/** Based on pla odds */
		'pla odds candidate(k = 12)' => '6',
		'history p' => '6, 11',
		'SURE PLACE' => '6',
	],
];
