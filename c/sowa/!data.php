<?php
$co = [
    'slug' => 'sowa',
    'image' => 'company.jpg',
    'company_name' => '株式会社相和',
    'catch_copy' => '見えないところで、“便利”を支える化学会社',
    'industry' => ['E'],
    'post_code' => '389-0505',
    'address' => '長野県東御市和7801番地',
    'homepage' => 'https://sowac.co.jp/',
    'logo_filename' => 'logo.gif',
    'latitude' => 36.3694332,//緯度
    'longitude' => 138.2142701,//経度
    'human' => [
        'image' => 'shomura.png',
        'name' => '正村 欣生',
    ]
];

// 募集職種
$occupation = [
    'job_machine' => [
        'name' => 'マシンオペレーター',
        'url' => 'job_machine',
        'catch_copy' => 'つくってるのは材料。でも、支えてるのは社会。',
        'work' => [''],
        'image' => '.jpg',
        'latitude' => 36.3694332,//緯度
        'longitude' => 138.2142701,//経度    
        'MBTI' =>  '----',
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
        ],
        'catch_copy' => '',
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