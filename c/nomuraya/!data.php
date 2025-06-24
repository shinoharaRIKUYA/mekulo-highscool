<?php
$co = [
    'slug' => 'nomuraya',
    'image' => 'office.jpg',
    'company_name' => '株式会社野村屋',
    'catch_copy' => '上田を変えるのは、君かもしれない。',
    'industry' => ['D'],
    'post_code' => '386-0005',
    'address' => '長野県上田市古里777-3',
    'homepage' => 'https://nomurayagroup.com/',
    'logo_filename' => 'logo.png',
    'latitude' => 36.3694332,//緯度
    'longitude' => 138.2142701,//経度
    'human' => [
        'image' => 'noguchi.png',
        'name' => '野口 拓馬',
    ]
];

// 募集職種
$occupation = [
    'job_genba' => [
        'name' => '測量・設計／営業',
        'url' => 'job_ningen',
        'catch_copy' => '電気を「ためて、使う」、新しいインフラを創造するチーム',
        'work' => ['281'],
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
                'name' => '2025年8月4日（月）10時00分～', 
                'date' => '2025-08-04',
                'deadline' => '2025-08-1',//募集締切日
            ],
            [
                'name' => '2025年8月5日（火）10時00分～', 
                'date' => '2025-08-05',
                'deadline' => '2025-08-02',//募集締切日
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