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
    'logo_filename' => 'logo.png',
    'latitude' => 36.3397664,//緯度
    'longitude' => 138.2873170,//経度
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
        'work' => ['529'],
        'fv_url' => 'introduce2.jpg',
        'latitude' => 36.3636172,//緯度
        'longitude' => 138.2915830,//経度
        'MBTI' =>  '',
    ],
    'job_hyoumen' => [
        'name' => '表面処理事業',
        'url' => 'job_hyoumen',
        'catch-copy' => 'よく遊び、よく働く',
        'work' => ['529'],
        'fv_url' => 'job_hyoumen/fv.jpg',
        'latitude' => 36.3399857,//緯度
        'longitude' => 138.2872583,//経度
        'MBTI' => '',
    ],
    'job_shinku' => [
        'name' => '真空炉事業',
        'url' => 'job_shinku',
        'catch-copy' => '熱と冷却で構造を組み替える',
        'work' => ['529'],
        'fv_url' => 'second.jpg',
        'latitude' => 36.3389298,//緯度
        'longitude' => 138.2859450,//経度
        'MBTI' =>  '',
    ],
    'job_coating' => [
        'name' => 'コーティング事業',
        'url' => 'job_coating',
        'catch-copy' => '硬く、滑らかな金属コーティングを部品に',
        'work' => ['529'],
        'fv_url' => 'job_coating/work4.jpg',
        'latitude' => 36.3388164,//緯度
        'longitude' => 138.2866194,//経度
        'MBTI' =>  '',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '',
                'date' => '',
                'deadline' => '',//募集締切日
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
