<?php
$base = '../../../';
$highschool_base = '../../';
$company_base = '../';

$cur_page = 'job_marketing';
$job_title = '企画営業職';

include_once $company_base . '!data.php';

//========================================
// ページのメタデータ
$title = $job_title . ' - ' . $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';

$keywords = '';

$description = '';

$canonical_url = 'https://works.mekulo.jp/highschool/' . $co['slug'] . '/' . $cur_page . '/';

$og_image = 'https://works.mekulo.jp/ogp-image.png';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php include $base . '../tracking.php'; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?= $highschool_base ?>highschool.css?v=2">
<link rel="icon" href="<?= $base ?>mekulo-works-mark.png">
<link rel="canonical" href="<?= $canonical_url ?>">
<title><?= $title_with_site ?></title>
<?php if ($description) { ?>
<meta name="description" content="<?= $description ?>">
<?php } ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?= $keywords ?>">
<?php } ?>
<meta property="og:type" content="article">
<meta property="og:title" content="<?= $title_with_site ?>">
<?php if ($description) { ?>
<meta property="og:description" content="<?= $description ?>">
<?php } ?>
<meta property="og:url" content="<?= $canonical_url ?>">
<meta property="og:image" content="<?= $og_image ?>">
<meta property="fb:app_id" content="534360210586966">
<script type="application/ld+json">
{
	"@context": "https://schema.org",
	"@type": "BreadcrumbList",
	"itemListElement": [{
		"@type": "ListItem",
		"position": 1,
		"name": "めくろうワークス",
		"item": "https://works.mekulo.jp/"
	},{
		"@type": "ListItem",
		"position": 2,
		"name": "新卒求人特集",
		"item": "https://works.mekulo.jp/highschool/"
	},{
		"@type": "ListItem",
		"position": 3,
		"name": "<?= $co['company_name'] ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/"
	},{
		"@type": "ListItem",
		"position": 4,
		"name": "<?= $job_title ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/<?= $cur_page ?>/"
	}]
}
</script>
</head>
<body class="highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
		<div class="fv_area">
			<img alt="" class="fv_image" src="firstview.jpg">
			<hgroup>
				<h1 class="catch">
					経営課題を解決する企画を考え<span>提案する</span>
				</h1>
				<p class="fv-tag"><?= $job_title ?></p>
			</hgroup>
			<a href="<?= $company_base ?>job_developer/" class="btn">次の職種を見る</a>
			<img src="<?= $highschool_base ?>with-video.png" alt="1日密着動画あり求人" class="label">
		</div>
		<section class="page-nav">
			<a href="#job_detail">
				<div class="btn">
					<img src="<?= $highschool_base ?>icon-1.png">
					<p>仕事内容</p>
				</div>
				<div class="btn-af">
					<span></span>
				</div>
			</a>
			<a href="#employee_introduction">
				<div class="btn">
					<img src="<?= $highschool_base ?>icon-2.png">
					<p>社員紹介</p>
				</div>
				<div class="btn-af">
					<span></span>
				</div>
			</a>
			<a href="#recruitment_requirements">
				<div class="btn">
					<img src="<?= $highschool_base ?>icon-3.png">
					<p>募集要項</p>
				</div>
				<div class="btn-af">
					<span></span>
				</div>
			</a>
		</section>
		<section class="youtube g">
			<h2>１日密着動画を見る</h2>
			<div class="frame">
				<iframe src="" frameborder="0"></iframe>
			</div>
		</section>
		<section class="g" id="job_detail">
			<h2>仕事内容</h2>
			<p>
				　売上を拡大したい。人手不足を解消したい。経営コストを削減したい。パソコンの動きが悪いのを改善したい。お客様は様々な経営課題を持っています。<strong>企画営業職</strong>は、お客様となる企業を訪問し、こうした経営課題を伺って、それを解決するための企画を考えてお客様へ提案する仕事です。
			</p>
			<p>
				　まずは、こうした経営課題をお客様から詳しくうかがいます。その経営課題を社内の企画会議で話し合い、様々な解決策を探っていきます。それを提案書にまとめ、施策をお客様に提案します。提案する内容はITを使用したものが中心で、ホームページの構築や改良、動画やパンフレットなどの宣伝媒体の制作、ネット広告、通販サイトの構築、情報システムの構築、「めくろうワークス」を中心とした人材獲得のための施策など、多岐にわたります。
			</p>
			<img src="1.jpg" alt="" class="scene">
			<p>
				　企画をお客様へ提案した後、実際にその内容を実行するのは制作部門の社員ですが、引き続きお客様との間の窓口として、その企画の指揮を執っていきます。また、当社で制作したウェブサイトについて、制作後もどのような状況で利用されているかを分析してお客様に報告したりする業務も含まれています。
			</p>
			<p>
				　お客様から経営課題を引き出すための、高いコミュニケーション能力や注意力が求められます。また、幅広い知識を身につけることが求められる仕事です。
			</p>
		</section>
		<section class="g">
			<h2>写真で雰囲気を知る</h2>
			<div class="NRGallery" data-width="640" data-height="480">
				<div class="image_area">
					<ul class="slides">
<?php
foreach ($scenery as $i) {
	if ($i['disp_order'] != NULL) {
		?><li><img src="<?= $image . $i['filename'] ?>" alt=""><?php
		if ($i['subtitle'] != NULL) {
			?><div class="caption"><?= h($i['subtitle']) ?></div><?php
		}
		?></li><?php
	}
}
?>
					</ul>
					<div class="button left_btn"><img src="<?= $base ?>left.png" alt=""></div>
					<div class="button right_btn"><img src="<?= $base ?>right.png" alt=""></div>
				</div>
			</div>
		</section>
		<section class="g" id="employee_introduction">
			<h2>社員紹介</h2>
			<div class="member-list Lightbox">
				<div class="thumbnails">
					<div class="thumbnail furuya">
						<img src="<?= $highschool_base ?>magnifying-glass.png" class="glass">
					</div>
					<p>2018年7月（中途入社）</p>
					<p>古谷かの</p>
				</div>
				<div class="thumbnails">
					<div class="thumbnail itou">
						<img src="<?= $highschool_base ?>magnifying-glass.png" class="glass">
					</div>
					<p>2019年7月（中途入社）</p>
					<p>伊藤優希</p>
				</div>
				<div class="thumbnails">
					<div class="thumbnail miyasaka">
						<img src="<?= $highschool_base ?>magnifying-glass.png" class="glass">
					</div>
					<p>2021年5月</p>
					<p>宮坂薪輝</p>
				</div>
			</div>
		</section>
		<section class="g requirements" id="recruitment_requirements">
			<h2>募集要項</h2>
			<div class="tabs">
				<button class="tab1">募集要項</button>
				<button class="ta2">キャリア形成</button>
			</div>
			<div class="requirement">
				<div class="content recruitment">
					<h3>募集要項</h3>
					<dl>
						<div>
							<dt>募集職種</dt>
							<dd>企画営業職</dd>
						</div>
						<div>
							<dt>雇用形態</dt>
							<dd>正社員</dd>
						</div>
						<div>
							<dt>学歴上の応募資格</dt>
							<dd>高卒以上、全学部全学科</dd>
						</div>
						<div>
							<dt>応募資格</dt>
							<dd>普通自動車運転免許（AT可）</dd>
						</div>
						<div>
							<dt>募集人員</dt>
							<dd>2名</dd>
						</div>
						<div>
							<dt>選考方法</dt>
							<dd>書類選考、面接</dd>
						</div>
					</dl>
					<h3>採用後の待遇</h3>
					<dl>
						<div>
							<dt>基本給</dt>
							<dd>
								高卒以上<br
								>171,000円～（1か月160時間勤務の場合、残業代別）
							</dd>
						</div>
						<div>
							<dt>諸手当</dt>
							<dd>
								通勤手当（月額10,000円まで）
							</dd>
						</div>
						<div>
							<dt>昇給</dt>
							<dd>
								役員面談（年4回）による。<br
								>2023年度実績:平均20,000円程度</dd>
						</div>
						<div>
							<dt>賞与</dt>
							<dd>年1回（実績なし）</dd>
						</div>
						<div>
							<dt>試用期間</dt>
							<dd>3カ月（待遇の変更なし）</dd>
						</div>
						<div>
							<dt>定年制度</dt>
							<dd>なし</dd>
						</div>
					</dl>
				</div>
				<div class="content career">
					<h3>キャリア形成支援制度</h3>
					<dl>
						<div>
							<dt>研修制度</dt>
							<dd>OJTのみ</dd>
						</div>
					</dl>
					<h3>自己啓発支援制度</h3>
					<dl>
						<div>
							<dt>社内定期勉強会</dt>
							<dd>
								当社メンバーが主体となり、定期的な社内勉強会を実施しています。長期に渡るものや、単発のものまで様々ですが、メンバー自らが勉強会の企画から考え、実行しています。<br
								>最近では、ウェブデザイン勉強会や、アクセス解析勉強会、マーケティング勉強会などを行いました。
							</dd>
						</div>
						<div>
							<dt>資格取得支援</dt>
							<dd>
								ウェブアナリスト、ウェブデザイン技能検定、ITパスポート、基本情報、ウェブ解析士などの資格取得にかかる費用を全て、会社承認の上で、100%補助を行っています。<br
								>また、資格取得に向けた社内勉強会も、随時開催しています。
							</dd>
						</div>
						<div>
							<dt>当社主催の有料セミナーへの無料参加</dt>
							<dd>
								当社では、「上田IT講座」というITセミナー事業を運営しています。行う講座内容は、HTML、CSSの内容から、データベース、プログラミング、Androidアプリ開発など、多岐に渡る講座を提供しています。<br
								>本来は、有料で参加できる講座ですが、当社メンバーは特別に無料で参加することができます。この機会に、新たな知識を付け、仕事に役立てている仲間も多くいます。
							</dd>
						</div>
						<div>
							<dt>教材及び外部セミナー補助制度</dt>
							<dd>
								ウェブ技術やデザインに関する教材本の購入にかかる費用を100%補助しています。また、外部セミナーへの受講費用は、勉強したことを社内で発表し、全メンバーに共有することを条件に50%補助しています。
							</dd>
						</div>
					</dl>
					<h3>メンター制度</h3>
					<dl>
						<div>
							<dt>役員面談</dt>
							<dd>
								3ヵ月に一度の役員面談があります。役員面談では、3ヵ月間仕事を通じて、自らが成長した所を振り返ったり、今の仕事で悩んでいることがあれば遠慮なく言って頂く場として活用しています。<br
								>そして、このような場で教えて頂いた課題は、「個人の課題」ではなく、「会社の課題」として私たち経営層も捉え、もっと良い会社を創るために組織として課題解決に臨んでいきます。<br
								>また、正社員の場合、一年に一度ですがこの場で昇給の話もしていきます。
							</dd>
						</div>
					</dl>
				</div>
				<a href="<?= $company_base ?>apply/#entry" class="btn_entry">
					<img src="<?= $highschool_base ?>flag.png" class="flag">
					<span>応募前見学情報を見る</span>
					<img src="<?= $highschool_base ?>arrow.svg">
				</a>
			</div>
		</section>
		<section class="g nextpage">
			<h2>その他の職種を見てみる</h2>
			<ul class="image_navi">
<?php foreach ($toc['job']['submenu'] as $key => $prop) { 
				if(!($prop['name'] === $job_title)) { ?>
				<li>
					<a href="<?= $company_base . $key . '/' ?> ">
					<figure>
						<img src="<?= $company_base . $prop['fv_url'] ?>" alt="">
						<figcaption><?= $prop['name'] ?></figcaption>
					</figure>
					</a>
				</li>
<?php
				}
			}	
?>			
			</ul>
		</section>
	</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<?php include $base . '../footer.php' ?>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
</body>
