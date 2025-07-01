<?php
$co = [
    'slug' => 'naganorezin',
    'image' => 'office.jpg',
    'company_name' => '税理士法人MACC',
    'catch_copy' => '企業の「困った」を「ありがとう」に変える仕事！',
    'industry' => ['L'],
    'post_code' => '380-0814',
    'address' => '長野県長野市大字鶴賀2141-3',
    'homepage' => 'https://shinko-gr.com/',
    'logo_filename' => 'logo.png',
    'latitude' => 336.6537013,//緯度
    'longitude' => 138.1910489,//経度
    'human' => [
        'image' => 'shomura.png',
        'name' => '正村',
    ]
];

// 募集職種
$occupation = [
    'job_supporter' => [
        'name' => '企業サポーター',
        'url' => 'job_supporter',
        'catch_copy' => '企業の「困った」を「ありがとう」に変える仕事！',
        'work' => ['182'],
        'fv_url' => 'job_supporter/firstview.jpg',
        'latitude' => 336.6537013,//緯度
        'longitude' => 138.1910489,//経度
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