<?php
$co = [
    'slug' => 'kitazawa-doken',
    'image' => 'office.jpg',
    'company_name' => '北澤土建株式会社',
    'catch_copy' => '自然と向き合い、地元を支える建設会社',
    'industry' => ['D'],
    'post_code' => '389-0502',
    'address' => '長野県上田市武石沖471-1',
    'homepage' => 'https://www.kitazawadoken.co.jp/ ',
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
    'job_dobokusekou' => [
        'name' => '土木施工管理',
        'url' => 'job_dobokusekou',
        'catch_copy' => '地域のインフラを支える',
        'work' => ['092'],
        'image' => 'second.jpg',
        'latitude' => 36.3694332,//緯度
        'longitude' => 138.2142701,//経度    
        'MBTI' =>  'estj',
    ],
    'job_kentikusekou' => [
        'name' => '建築施工管理',
        'url' => 'job_kentikusekou',
        'catch_copy' => '街の未来をつくる',
        'work' => ['091'],
        'image' => '/job_kentikusekou/fv.jpg',
        'latitude' => 36.3694332,//緯度
        'longitude' => 138.2142701,//経度    
        'MBTI' => 'estj',
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