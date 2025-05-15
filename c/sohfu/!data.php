<?php
$co = [
    'slug' => 'sohfu',
    'image' => 'company.jpg',
    'company_name' => '株式会社創風',
    'catch_copy' => '一枚の金属板から、快適な空間を作る',
    'industry' => ['D'],
    'post_code' => '386-2201',
    'address' => '長野県上田市真田町長2411-12',
    'homepage' => 'https://sohfu.co.jp/',
    'logo_filename' => 'logo.svg',
    'latitude' => 36.3694332,//緯度
    'longitude' => 138.2142701,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_genba' => [
        'name' => '現場作業員',
        'url' => 'job_genba',
        'catch_copy' => '県内にわずか200人！？ダクト職人になりませんか',
        'work' => ['D'],
        'image' => '/job_genba/fv.jpg',
        'latitude' => 36.3694332,//緯度
        'longitude' => 138.2142701,//経度    
        'MBTI' =>  'infp',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年7月29日（火） 10時30分～、13時30分～', 
                'date' => '2025-07-29',
                'deadline' => '2025-07-26',//募集締切日
            ],
            [
                'name' => '2025年7月31日（木） 10時30分～、13時30分～', 
                'date' => '2025-07-31',
                'deadline' => '2025-07-28',//募集締切日
            ],
            [
                'name' => '2025年8月7日（木） 10時30分～、13時30分～', 
                'date' => '2025-08-07',
                'deadline' => '2025-08-04',//募集締切日
            ],
            [
                'name' => '2025年8月21日（木） 10時30分～、13時30分～', 
                'date' => '2025-08-21',
                'deadline' => '2025-08-18',//募集締切日
            ],
        ],
        'catch_copy' => 'ダクト作りを覗いてみよう！',
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