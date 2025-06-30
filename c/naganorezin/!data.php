<?php
$co = [
    'slug' => 'naganorezin',
    'image' => 'office.jpg',
    'company_name' => '株式会社長野レジン',
    'catch_copy' => '身近なところに長野レジン',
    'industry' => ['E','A'],
    'post_code' => '386-1541',
    'address' => '長野県上田市上室賀 1518',
    'homepage' => 'http://www.nagano-resin.co.jp/',
    'logo_filename' => 'logo.png',
    'latitude' => 36.4083197,//緯度
    'longitude' => 138.1521952,//経度
    'human' => [
        'image' => 'shomura.png',
        'name' => '正村',
    ]
];

// 募集職種
$occupation = [
    'job_machineoperater' => [
        'name' => 'マシンオペレーター',
        'url' => 'job_machineoperater',
        'catch_copy' => '様々な条件から最適解を導きだせ！',
        'work' => ['493','494'],
        'fv_url' => 'job_machineoperater/firstview.jpg',
        'latitude' => 36.4083197,//緯度
        'longitude' => 138.1521952,//経度
        'MBTI' => 'Istp'
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年7月29日（火）14時00分～',
                'date' => '2025-07-29',
                'deadline' => '2025-07-26',//募集締切日
            ],
            [
                'name' => '2025年8月5日（火）14時00分～',
                'date' => '2025-08-05',
                'deadline' => '2025-08-02',//募集締切日
            ],
        ],
        'catch_copy' => '実際にお客様と合う！？<br>企画営業を体験してみよう！',
        'visit_img' =>'firstview.jpg',
        'content' => '工場内をご案内しながら、作業内容について詳しくご説明致します。',
    ],
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
        'submenu' => $occupation,
		],
	];