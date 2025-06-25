<?php
$base = '../../../';
$highschool_base = '../../';
$company_base = '../';

$cur_page = 'apply';

include_once $company_base . '!data.php';

//====================
// ページのメタデータ
$title = $co['company_name'] . 'をもっと知る';
$title_with_site = $title . ' | めくろうワークス';

$keywords = '';

$description = '';

$canonical_url = 'https://works.mekulo.jp/hs/' . $co['slug'] . '/' . $cur_page . '/';

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
		"name": "高卒求人特集",
		"item": "https://works.mekulo.jp/hs/"
	},{
		"@type": "ListItem",
		"position": 3,
		"name": "<?= $co['company_name'] ?>",
		"item": "https://works.mekulo.jp/hs/<?= $co['slug'] ?>/"
	},{
		"@type": "ListItem",
		"position": 4,
		"name": "<?= $title ?>",
		"item": "https://works.mekulo.jp/hs/<?= $co['slug'] ?>/apply/"
	}]
}
</script>
<style>
dl.seminar > dt {
	margin: 8px 0;
	padding: 0 4px;
	background: #3C5DA8;
	color: white;
}
dl.seminar > dd {
	margin: 0;
	padding: 0;
}
ul.seminar_list {
	margin: 0;
	padding: 0;
}
ul.seminar_list > li {
	display: inline-block;
	margin: 4px 2px;
	border: 2px solid #FFA500;
	border-radius: 5px;
	padding: 0 2px;
	text-align: center;
}
</style>
</head>
<body class="newgrads entry_info">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
<main>
<h1 class="contact"><?= $title ?></h1>
<section class="toc">
	<h2>目次</h2>
	<ol>
		<li><a href="#inspect">会社見学について</a></li>
		<li><a href="#onepoint">採用担当者より一言</a></li>
		<li><a href="#entry">エントリー</a></li>
	</ol>
</section>
<section class="g" id="inspect">
	<h2>会社見学・インターンシップについて</h2>
	<p>
		当社に興味がある方、入社を検討されている方は、まず会社見学またはインターンシップを申し込んでください。
	</p>
	<p>
		申し込み方法については、<a href="#entry">ページ下部</a>をご覧ください。
	</p>
	<dl class="seminar">
	<dt>会社見学</dt>
		<dd>
			会社見学は随時実施しています。
		</dd>
		<dt>インターンシップ</dt>
		<dd>
			2～3か月の学生インターンシップを随時受け入れています。インターンシップは学業などの都合に合わせて実施することができます。<br>
			インターンシップ終了後、アルバイトとして継続して業務に当たっていただくことも可能です。
		</dd>
	</table>
</section>
<section class="g" id="onepoint">
	<h2>採用担当者より一言</h2>
	<ul class="people">
		<li>
			<figure class="person">
				<img alt="" src="../president_p.jpg" class="portrait">
				<figcaption>
					採用担当者<br>
					野口 拓馬
				</figcaption>
			</figure>
		</li>
	</ul>
	<p>
		当社に興味を持ってくださってありがとうございます。
	</p>
	<p>
		ITや企画の仕事はとても面白い仕事だと思いますが、会社の外から見えるイメージと、実際の仕事との間にギャップが大きいとも言われています。<br>
		ですから、当社の仕事を知っていただくためにインターンシッププログラムを用意しました。興味のある方は、ぜひ会社見学をしていただき、またインターンシップを経験していただいて、当社の仕事をよく知ってから入社していただきたいと思います。
	</p>
	<p>
		皆さんの積極的な参加をお待ちしています。
	</p>
</section>
<section class="g" id="entry">
	<h2>エントリー</h2>
	<p>
		会社見学やインターンシップへの参加は、下記の通り電話で申し込んでください。
	</p>
	<ul>
		<li>
			電話番号: <a href="tel:0268-71-7315">0268-71-7315</a><br>（担当：野口）
			（受付時間: 9:00～18:00、土・日休み）
		</li>
		<li>
			メール: <a href="https://nextreservation.jp/contact/">こちら</a>からお問い合わせください。
		</li>
	</ul>
	<p>
		なお、見学時点では不要ですが、新卒採用に応募する際には以下の書類が必要となりますので、ご用意ください。
	</p>
	<ul>
		<li>履歴書</li>
	</ul>
</section>
<div class="btn_navi">
	<a href="<?= $company_base ?>" class="btn">企業TOP</a>
	<br>
	<a href="<?= $highschool_base ?>" class="btn_return">
		<img alt="めくろうワークス" src="<?= $base ?>header_logo.png" class="logo">
		新卒求人特集へ戻る
	</a>
</div>
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<?php include $base . '../footer.php' ?>
</body>
