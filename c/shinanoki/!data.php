<?php
$co = [
    'slug' => 'shinanoki',
    'image' => 'company.jpg',
    'company_name' => '株式会社 科の木',
    'catch-copy' => '有名カップ麺の『かやく』、実は上田で作っています！',
    'industry' => ['E'],
    'post-code' => '386-1101',
    'adress' => '長野県上田市下之条42',
    'homepage' => 'https://p-shinanoki.co.jp/',
    'logo_filename' => 'logo.png',
    'latitude' => 36.39712976,//緯度
    'longitude' => 138.21962598,//経度
    'human' => [
        'image' => 'sato.png',
        'name' => '佐藤',
    ]
];

// 募集職種
$occupation = [
    'job_food-manufacturing' => [
        'name' => '具材投入・かやく検査スタッフ',
        'url' => 'job_food-manufacturing',
        'catch-copy' => '機械のスピードに合わせて、人の手で完璧に仕上げる',
        'work' => '食品製造',
        'fv_url' => 'job_food-manufacturing/firstview.jpg',
        'latitude' => 36.39712976,//緯度
        'longitude' => 138.21962598,//経度
        'MBTI' => '',
    ],
    'job_machine-operator' => [
        'name' => '機械操作スタッフ',
        'url' => 'job_machine-operator',
        'catch-copy' => '細かい調整が、不良品を減らすカギ',
        'work' => '機械操作',
        'fv_url' => 'job_machine-operator/firstview.jpg',
        'latitude' => 36.39712976,//緯度
        'longitude' => 138.21962598,//経度
        'MBTI' => '',

    ],
    'job_quality-control' => [
        'name' => '品質管理スタッフ',
        'url' => 'job_quality-control',
        'catch-copy' => 'たった数グラムのかやく、一つのミスも見逃さない！',
        'work' => '品質管理',
        'fv_url' => 'job_quality-control/firstview.jpg',
        'latitude' => 36.39712976,//緯度
        'longitude' => 138.21962598,//経度
        'MBTI' => '',
    ],
];

// 応募前見学
$visit = [
     [
        'about' => '応募前見学',//応募前見学、オープンファクトリーなど      
        'date' => '2025年7月30日（水） 10時30分～12時00分<br>2025年8月6日（水）10時30分～12時00分<br>その他、ご連絡いただければいつでも見学可能です。お気軽にお問い合わせください。',//開催日時（表示形式）
        'date_num' => '2025-07-30',//開催日
        'deadline' => '2025-07-23',//募集締め切り日
        'content' => '工場内をご案内しながら、作業内容について詳しくご説明します。<br>',
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