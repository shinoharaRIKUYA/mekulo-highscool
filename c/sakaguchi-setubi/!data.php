<?php
$co = [
    'slug' => 'sakaguchi-setubi',
    'image' => 'company.jpg',
    'company_name' => '有限会社 坂口設備',
    'catch_copy' => '配管工事のプロ集団！',
    'industry' => ['D'],
    'post_code' => '387-0017',
    'address' => '長野県千曲市大字中233-3',
    'homepage' => 'https://ssb-haikanya.co.jp',
    'logo_filename' => 'logo.webp',
    'latitude' => 36.51758116,//緯度
    'longitude' => 138.1207672,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_setubikoji' => [
        'name' => '現場職人',
        'url' => 'job_setubikoji',
        'catch_copy' => '修理方法を見極める！配管職人の世界',
        'work' => ['666'],
        'fv_url' => 'job_setubikoji/firstview.jpg',
        'latitude' => 36.51758116,//緯度
        'longitude' => 138.1207672,//経度 
        'MBTI' => 'is-P'
    ],
];

// 応募前見学
$visit = [//あとで入れる
    [
        'about' => '応募前見学',
        'date' => [
            [
                'name' => '2025年7月29日（火）13時00分～、15時30分～', 
                'date' => '2025-07-29',
                'deadline' => '2025-07-26',//募集締切日
            ],
            [
                'name' => '2025年8月5日（火）13時00分～、15時30分～', 
                'date' => '2025-08-05',
                'deadline' => '2025-08-02',//募集締切日
            ],
        ],
        'catch_copy' => '配管加工を見学してみよう！',
        'visit_img' =>'firstview.jpg',
        'content' => '加工場をご案内しながら、作業内容について詳しくご説明いたします。',
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