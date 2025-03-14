<?php
// 企業情報
$co = [
	'slug' => 'nextreservation',
	'company_name' => 'NEXT RESERVATION株式会社',
	'homepage' => 'https://nextreservation.jp/',
	'logo_filename' => 'nr_logo.png',
];

// 企業の傾向
$tendencies = [
	[
		'name' => 'マーケティング性向',
		'param1' => '安全志向',
		'param2' => '冒険志向',
		'value' => 4,
	],
	[
		'name' => '事業方針',
		'param1' => '地域志向',
		'param2' => 'グローバル志向',
		'value' => 1,
	],
	[
		'name' => '評価基準',
		'param1' => '年功序列',
		'param2' => '職能主義',
		'value' => 5,
	],
	[
		'name' => '昇進スピード',
		'param1' => 'じっくり昇進',
		'param2' => 'ぐんぐん昇進',
		'value' => 5,
	],
	[
		'name' => '会社の服装',
		'param1' => '制服',
		'param2' => '服装自由',
		'value' => 5,
	],
	[
		'name' => '仕事の覚え方',
		'param1' => 'Off-JT',
		'param2' => 'OJT',
		'value' => 5,
	],
	[
		'name' => '出身者比率',
		'param1' => '県内出身が多い',
		'param2' => '県外出身が多い',
		'value' => 3,
	],
	[
		'name' => '男女比率',
		'param1' => '男性が多い',
		'param2' => '女性が多い',
		'value' => 2,
	],
];

// 年齢分布
$age_structure = [
	'10代' => 3,
	'20代' => 11,
	'30代' => 0,
	'40代' => 0,
	'50代' => 1,
	'60代以上' => 1,
];

// 目次
$toc = [
	'top' => [
		'name' => '企業TOP',
		'icon' => 'company.png',
		'url' => '',
	],
	'job' => [
		'name' => '募集職種',
		'icon' => 'carrier.png',
		'url' => '',
		'submenu' => [
			'job_marketing' => [
				'name' => '企画営業職',
				'fv_url' => 'job_marketing/firstview.jpg'
			],
			'job_developer' => [
				'name' => '開発職',
				'fv_url' => 'job_developer/firstview.jpg'
			],
			'job_designer' => [
				'name' => 'ウェブデザイナー',
				'fv_url' => 'job_designer/firstview.jpg'
			],
		],
	],
];
