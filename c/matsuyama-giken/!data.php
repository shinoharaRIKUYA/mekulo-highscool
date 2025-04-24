<?php
$co = [
    'slug' => 'matsuyama-giken',
    'image' => 'office.jpg',
    'company_name' => '松山技研株式会社',
    'catch_copy' => '熱意と熱量で、金属のチカラを引き出せ！',
    'industry' => ['E'],
    'post_code' => '386-0407',
    'address' => '長野県上田市長瀬1050',
    'homepage' => 'https://www.matsuyama-giken.co.jp/',
    'logo_filename' => 'logo.svg',
    'latitude' => 36.3694332,//緯度
    'longitude' => 138.2142701,//経度
    'human' => [
        'image' => 'shomura.png',
        'name' => '正村 欣生',
    ]
];

// 募集職種
$occupation = [
    'job_netsu' => [
        'name' => '熱処理事業',
        'url' => 'job_netsu',
        'catch-copy' => '熱で金属の硬さが変わるって知ってた？',
        'work' => ['493'],
        'fv_url' => 'introduce2.jpg',
        'latitude' => 36.3694332,//緯度
        'longitude' => 138.2142701,//経度    
        'MBTI' =>  '',
    ],
    'job_hyoumen' => [
        'name' => '表面処理事業',
        'url' => 'job_hyoumen',
        'catch-copy' => 'よく遊び、よく働く',
        'work' => ['493'],
        'fv_url' => 'second.jpg',
        'latitude' => 36.3694332,//緯度
        'longitude' => 138.2142701,//経度    
        'MBTI' => '',
    ],
    'job_shinku' => [
        'name' => '真空炉事業',
        'url' => 'job_shinku',
        'catch-copy' => '熱と冷却で構造を組み替える',
        'work' => ['493'],
        'fv_url' => 'second.jpg',
        'latitude' => 36.3694332,//緯度
        'longitude' => 138.2142701,//経度    
        'MBTI' =>  '',
    ],
    'job_coating' => [
        'name' => 'コーティング事業',
        'url' => 'job_coating',
        'catch-copy' => '硬く、滑らかな金属コーティングを部品に',
        'work' => ['493'],
        'fv_url' => '../job_coating/work4.jpg',
        'latitude' => 36.3694332,//緯度
        'longitude' => 138.2142701,//経度    
        'MBTI' =>  '',
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
            [
                'name' => '2025年7月30日（水）10時00分～', 
                'date' => '2025-07-30',
                'deadline' => '2025-07-27',//募集締切日
            ],
            [
                'name' => '2025年8月4日（月）10時00分～', 
                'date' => '2025-08-04',
                'deadline' => '2025-08-01',//募集締切日
            ],
            [
                'name' => '2025年8月6日（水）10時00分～', 
                'date' => '2025-08-06',
                'deadline' => '2025-08-03',//募集締切日
            ],
            [
                'name' => '2025年8月8日（金）10時00分～', 
                'date' => '2025-08-08',
                'deadline' => '2025-08-05',//募集締切日
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