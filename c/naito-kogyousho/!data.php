<?php
$co = [
    'slug' => 'naito-kogyousho',
    'image' => 'office.jpg',
    'company_name' => '有限会社 内藤工業所',
    'catch_copy' => '〇〇トン乗っても大丈夫、機械の土台をつくる！',
    'industry' => ['E','A'],
    'post-code' => '385-0051',
    'address' => '長野県佐久市中込3368-3',
    'homepage' => 'https://sakucity-industrialpark.com/naitou/',
    'logo_filename' => 'logo.svg',
    'keyword' => '内藤工業所,高卒特集',//meta情報のキーワード
    'description' => '内藤工業所では新卒を募集しています。',//meta情報のディスクリプション
    'latitude' => 36.3694332,//緯度
    'longitude' => 138.2142701,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_kinzoku' => [
        'name' => '金属加工',
        'url' => 'job_kinzoku',
        'catch-copy' => 'いろいろな機械を操り、巨大な材料を加工せよ！',
        'work' => ['493','494'],
        'fv_url' => 'job_kinzoku/firstview.jpg',
        'keyword' => '内藤工業所,高卒特集',//職種のmeta情報のキーワード
        'description' => '内藤工業所では新卒を募集しています。',//職種のmeta情報のディスクリプション
        'latitude' => 36.3694332,//緯度
        'longitude' => 138.2142701,//経度    
        'MBTI' => ['i','-','-','P',]
    ],
    'job_yousetsu' => [
        'name' => '溶接作業',
        'url' => 'job_yousetsu',
        'catch-copy' => '巨大なフレームの決め手は溶接！',
        'work' => [
            '493',
            '494',
        ],
        'fv_url' => 'job_yousetsu/firstview.jpg',
        'keyword' => '内藤工業所,高卒特集',//職種のmeta情報のキーワード
        'description' => '内藤工業所では新卒を募集しています。',//職種のmeta情報のディスクリプション
        'latitude' => 36.3694332,//緯度
        'longitude' => 138.2142701,//経度    
        'MBTI' => 'i','-','-','P',
    ],
];

// 応募前見学
$visit = [
    [
        'about' => '応募前見学', // 応募前見学、オープンファクトリーなど      
        'date' => [ //開催日時（表示形式）
            [
                'name' => '2025年7月29日（火）14時00分～', 
                'date' => '2025-07-29',
                'deadline' => '2025-07-26',//募集締切日
            ],
            [
                'name' => '2025年8月5日（火）14時00分～', 
                'date' => '2025-08-05',
                'deadline' => '2025-08-02',//募集締切日
            ]
        ],
        'catch_copy' => '実際にお客様と合う！？<br>企画営業を体験してみよう！',
        'visit_img' =>'firstview.jpg',
        'content' => '工場内をご案内しながら、作業内容について詳しくご説明致します。',
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