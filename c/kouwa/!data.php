<?php
$co = [
    'slug' => 'kouwa',
    'image' => 'company.jpg',
    'company_name' => '交和物産株式会社',
    'catch_copy' => '信州の味を、全国へ',
    'industry' => ['E'],
    'post_code' => '389-0603',
    'address' => '長野県埴科郡坂城町大字南条5181-3 （テクノさかき工業団地）',
    'homepage' => 'https://ajinokakehashi.com/',
    'logo_filename' => 'logo.png',
    'latitude' => 36.4423883,//緯度
    'longitude' => 138.1842576,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_seizou' => [
        'name' => '食品製造職',
        'url' => 'job_seizou',
        'catch_copy' => 'おいしい、安心、うれしいを作る',
        'work' => ['533'],
        'image' => 'introduce4.jpg',
        'latitude' => 36.4423883,//緯度
        'longitude' => 138.1842576,//経度
        'MBTI' =>  'iSFj',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年7月29日（火） 10時00分～',
                'date' => '2025-07-29',
                'deadline' => '2025-07-26',//募集締切日
            ],
            [
                'name' => '2025年7月31日（木） 10時00分～',
                'date' => '2025-07-31',
                'deadline' => '2025-07-28',//募集締切日
            ],
            [
                'name' => '2025年8月6日（木） 10時00分～',
                'date' => '2025-08-06',
                'deadline' => '2025-08-03',//募集締切日
            ],
            [
                'name' => '2025年8月8日（木） 10時00分～',
                'date' => '2025-08-08',
                'deadline' => '2025-08-05',//募集締切日
            ],
        ],
        'catch_copy' => 'チームワークを体感しよう！',
        'visit_img' =>'firstview.jpg',
        'content' => '応募前見学として参加する方は参加申し込みをしてください。',
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