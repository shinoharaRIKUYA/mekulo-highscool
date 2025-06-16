<?php
$co = [
    'slug' => 'yanagisawa-tekkoujo',
    'image' => 'company.jpg',
    'company_name' => '株式会社 柳澤鐵工所',
    'catch_copy' => '建物を支える“鉄骨”、作っています！',
    'industry' => ['E','A'],
    'post_code' => '385-0051',
    'address' => '長野県佐久市中込3400-7',
    'homepage' => 'https://yanatetu.com/',
    'logo_filename' => 'yanatetsu-logo.svg',
    'latitude' => 36.253712,//緯度
    'longitude' => 138.4726,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_seizou' => [
        'name' => '鉄骨製造職',
        'url' => 'job_seizou',
        'catch-copy' => '図面を形に！建物の“骨組み”を作る仕事',
        'work' => ['493','494'],
        'fv_url' => 'job_seizou/firstview.jpg',
        'latitude' => 36.253712,//緯度
        'longitude' => 138.4726,//経度    
        'MBTI' => 'istp',    
    ],
    'job_sekkei' => [
        'name' => '鉄骨設計職',
        'url' => 'job_sekkei',
        'catch-copy' => '図面を描くだけじゃない！とことん考えて、物事を組み立てる',
        'work' => ['493','494'],
        'fv_url' => 'job_sekkei/firstview.jpg',
        'latitude' => 36.253712,//緯度
        'longitude' => 138.4726,//経度    
        'MBTI' => 'intj',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '    年 月 日（ ）時  分～', 
                'date' => '2025-07-29',
                'deadline' => '2025-07-26',//募集締切日
            ],
            [
                'name' => '   年 月 日（ ）  時  分～', 
                'date' => '2025-08-05',
                'deadline' => '2025-08-02',//募集締切日
            ],
        ],
        'catch_copy' => '',
        'visit_img' =>'firstview.jpg',
        'content' => '',
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