<?php
// 企業情報
$co = [
    'slug' => 'naito-kogyousho',
    'company_name' => '有限会社 内藤工業所',
    'catch-copy' => '〇〇トン乗っても大丈夫、機械の土台をつくる！',
    'industry' => '一般産業用機械・装置製造',
    'post-code' => '〒385-0051',
    'adress' => '長野県佐久市中込3368-3',
    'homepage' => 'https://sakucity-industrialpark.com/naitou/',
    'logo_filename' => 'logo.svg',
    'meta_keyword' => '内藤工業所,高卒特集',//meta情報のキーワード
    'meta_desc' => '内藤工業所では新卒を募集しています。',//meta情報のディスクリプション
];

// 募集職種
$occupation = [
    'job_kinzoku' => [
        'name' => '金属加工',
        'url' => 'job_kinzoku',
        'catch-copy' => 'いろいろな機械を操り、巨大な材料を加工せよ！',
        'work' => '金属加工',
        'fv_url' => 'job_kinzoku/firstview.jpg',
        'meta_keyword' => '内藤工業所,高卒特集',//職種のmeta情報のキーワード
        'meta_desc' => '内藤工業所では新卒を募集しています。',//職種のmeta情報のディスクリプション

    ],
    'job_yousetsu' => [
        'name' => '溶接作業',
        'url' => 'job_yousetsu',
        'catch-copy' => '巨大なフレームの決め手は溶接！',
        'work' => '溶接作業',
        'fv_url' => 'job_yousetsu/firstview.jpg',
        'meta_keyword' => '内藤工業所,高卒特集',//職種のmeta情報のキーワード
        'meta_desc' => '内藤工業所では新卒を募集しています。',//職種のmeta情報のディスクリプション
    ],
];

// 応募前見学
$visit = [
     [
        'about' => '応募前見学',//応募前見学、オープンファクトリーなど      
        'date' => '2025年3月21日（金） 9時00分～',//開催日時（表示形式）
        'date_num' => '2025-03-21',//開催日
        'deadline' => '2025-03-10',//募集締め切り日
        'content' => '工場内をご案内しながら、作業内容について詳しくご説明致します。',
    ],
    [
        'about' => 'オープンファクトリー',
        'date' => '2025年3月22日（土） 13時00分～',
        'date_num' => '2025-03-22',//数字入力？？
        'deadline' => '2025-03-15',//募集締め切り日
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