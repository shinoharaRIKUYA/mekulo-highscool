<?php
//==========
// 新卒求人のインデックス
$highschool = [
	[
		'slug' => './c/naito-kogyousho',
		'name' => '(有)内藤工業所',
		'areas' => [
			'佐久市',
		],
		'industries' => [
			'一般産業用機械・装置製造',
		],
		'desc' => <<<'EOS'
私たちは、工場で使われている巨大な機械の土台を作っている会社です。デカい鉄骨に穴を開け、溶接で組み立て、最終的には自分の身長を超えるような巨大な土台（フレーム）を完成させます。そんな、超デカいものを作る仕事をやってみませんか。
EOS,
		'image' => './c/naito-kogyousho/firstview.jpg',
		'jobs' => [
			'manufacturing',
		],
	],
];

// 職種別一覧
$m_job = [
	'manufacturing' => '製造職',
	'information' => 'IT技術職',
	'technical' => '技術職',
	'design' => '設計職',
	'graphic_design' => 'デザイナー',
	'sales' => '営業職',
	'planning' => '企画職',
	'general' => '総務/事務職',
	'customer' => '接客職'
];
