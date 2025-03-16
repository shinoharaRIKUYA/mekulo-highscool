<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';
$cur_page = 'top';
include_once $company_base . '!data.php';
include_once $highschool_base . 'circle.php';

//====================
// ページのメタデータ
$title = $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$keywords = $co['meta_keyword'];
$description = $co['meta_desc']; 

$canonical_url = 'https://works.mekulo.jp/highschool/' . $co['slug'] . '/';

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
		"name": "高卒特集",
		"item": "https://works.mekulo.jp/highschool/"
	},{
		"@type": "ListItem",
		"position": 3,
		"name": "<?= $co['company_name'] ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/"
	}]
}
</script>

</head>
<body class="highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
<main>
<div class="fv_wr">
	<img alt="" class="fv_image" src="../third.jpg">
	<div class="apply">
		<h1 class="catch"><?= $co['company_name'] ?></h1>
		<p class="tag">応募前見学ページ</p>
	</div>
</div>
<section id="list" class="content">
	<h2>内藤工業所の応募前見学</h2>
	<ul class="list-wr">
		<li>
			<a href="">
				<img src="../firstview.jpg" alt="">
				<dl class="date">
					<dt>直近開催日</dt>
					<dd>03/31(月)<br>00時00分～</dd>
				</dl>
				<p class="catch">実際にお客様と合う！？<br>企画営業を体験してみよう！</p>
		</a>
		</li>
		<li>
			<a href="">
				<img src="../firstview.jpg" alt="">
				<dl class="date">
					<dt>直近開催日</dt>
					<dd>03/31(月)<br>00時00分～</dd>
				</dl>
				<p class="catch">実際に溶接！？<br>大型製缶を体験してみよう！</p>
		</a>
		</li>
	</ul>
</section>
<section id="content" class="content">
	<p class="catchcopy"><span>実際にお客様と会う！？</span><br>
		<span>企画営業を体験してみよう！</span></p>
	<div class="img-box">
		<img src="../firstview.jpg" alt="">
		<img src="../firstview.jpg" alt="">
	</div>
	<p class="cont">この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れ</p>
	<div class="opendate">
		<p>開催日時</p>
		<ul>
			<li>2025年4月1日（火） 10時00分～</li>
			<li>2025年4月1日（火） 10時00分～</li>
			<li>2025年4月1日（火） 10時00分～</li>
			<li>2025年4月1日（火） 10時00分～</li>
			<li>2025年4月1日（火） 10時00分～</li>
		</ul>
	</div>
	<div class="flow">
		<p>見学の流れ</p>
		<ul>
			<li>会社説明<span>30分程度</span></li>
			<li>先輩社員と会社見学<span>20分程度</span></li>
			<li>先輩社員との座談会<span>20分程度</span></li>
			<li>質疑応答<span>10分程度</span></li>
		</ul>
	</div>
	<div class="point">
		<p>この見学の見どころ！</p>
		<div class="point-box">
			<img src="../firstview.jpg" alt="">
			<dl>
				<dt>見どころビッグタイトル</dt>
				<dd>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミ</dd>
			</dl>
		</div>
		<div class="point-box">
		<img src="../firstview.jpg" alt="">
			<dl>
				<dt>見どころビッグタイトル</dt>
				<dd>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミ</dd>
			</dl>
		</div>
	</div>
	<a href="../apply/#entry" class="entry-btn">
		<img src="../../../flag.png" class="flag">
		<span>応募前見学情報を見る</span>
		<img src="../../../arrow.svg">
	</a>
</section>
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="../tab.js"></script>
<script src="../page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<?php include $base . '../footer.php' ?>
</body>
