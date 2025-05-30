<?php
$co = [
    'slug' => 'aceworkers',
    'image' => 'office.jpg',
    'company_name' => '株式会社エース・ワーカーズ',
    'catch_copy' => '「自分の手で仕上げる」って、気持ちいい',
    'industry' => ['D'],
    'post_code' => '387-0006',
    'address' => '長野県千曲市大字粟佐1555',
    'homepage' => 'https://www.aceworkers.co.jp/ ',
    'logo_filename' => 'logo.png',
    'latitude' => 36.3694332,//緯度
    'longitude' => 138.2142701,//経度
    'human' => [
        'image' => 'ichikawa.png',
        'name' => '市川 祐己',
    ]
];

// 募集職種
$occupation = [
    'job_genba' => [
        'name' => '現場職人',
        'url' => 'job_genba',
        'catch_copy' => '塗装と防水、二刀流の職人集団 ',
        'work' => ['669'],
        'image' => 'firstview.jpg',
        'latitude' => 36.3694332,//緯度
        'longitude' => 138.2142701,//経度    
        'MBTI' =>  'isfp',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年7月28日（月）10時00分～', 
                'date' => '2025-07-28',
                'deadline' => '2025-07-25',//募集締切日
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