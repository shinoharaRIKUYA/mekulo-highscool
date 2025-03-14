<?php
$base = '../../';
$highschool_base = '../';
$company_base = './';

$cur_page = 'top';
include_once $company_base . '!data.php';

//====================
// ページのメタデータ
$title = $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';

$keywords = '';

$description = 'NEXT RESERVATION株式会社の新卒採用情報です。当社はデジタルマーケティング、ITサポート、自社プロダクトの運営などを行っており、新しい知識を学ぶことを重視する柔軟な思考を持つ人材を求めています。また、積極的な人事評価と昇進の機会を提供しています。';

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
<div class="fv_area">
	<img alt="" class="fv_image" src="firstview.jpg">
	<hgroup>
		<h1 class="catch">
			半導体部品で世界のモノづくりを支える
		</h1>
		<p class="fv-tag">IT技術職</p>
	</hgroup>
</div>
<section class="toc">
	<hgroup>
			<h2>目次</h2>
			<div class="click">
				<span></span>
				<span></span>
			</div>
	</hgroup>
	<ol>
		<li class="abu"><a href="#about_company">会社紹介記事</a></li>
		<li class="pro"><a href="#business">私たちのビジネス</a></li>
		<li class="num-d"><a href="#numeric_data">数字で見る当社</a></li>
		<li class="f-pre"><a href="#from_president">社長メッセージ</a></li>
		<li class="com-in"><a href="#company_info">会社概要</a></li>
	</ol>
</section>
<div class="about-com content" id="company_gallery">
	<h2>切削加工で日本一の職人会社を目指す</h2>
	<p>
		　当社は、長野県の東信・中信地域を中心に、地元の企業や商店の経営者の皆さんから“経営の悩み”をうかがい、ITを使ってそれを解決したり、解決を支援したりするサービスを提供しています。　
	</p>
	<p>
		　具体的には、ウェブサイトの構築・運用、動画を制作、ネット広告の運用などといった「デジタルマーケティング」の分野を中心とした事業を行っており、企業の広告宣伝活動や人材獲得などの「悩み」を解決するための仕事をしています。
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="first.jpg" alt="" class="fs show">
			<img src="second.jpg" alt="" class="sc">
			<img src="third.jpg" alt="" class="th">
			<img src="forth.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="first.jpg" alt="" class="fs">
			<img src="second.jpg" alt="" class="sc">
			<img src="third.jpg" alt="" class="th">
			<img src="forth.jpg" alt="" class="fo">
		</div>
	</div>
	<h3>募集職種</h3>
	<div class="job_btn">
		<li>
			<a href="<?= $company_base ?>job_marketing/">
				<p class="sales">企画営業職</p>
			</a>
			<div class="arrow">
				<img src="../polygon.png" alt="">
			</div>
		</li>
		<li>
			<a href="<?= $company_base ?>job_developer/">
				<p class="deve">開発職</p>
			</a>
			<div class="arrow">
				<img src="../polygon.png" alt="">
			</div>
		</li>
		<li>
			<a href="<?= $company_base ?>job_designer/">
				<p class="web">ウェブ<br>デザイナー</p>
			</a>
			<div class="arrow">
				<img src="../polygon.png" alt="">
			</div>
		</li>
	</div>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<p>
		　当社は、長野県の東信・中信地域を中心に、地元の企業や商店の経営者の皆さんから“経営の悩み”をうかがい、ITを使ってそれを解決したり、解決を支援したりするサービスを提供しています。<br>
		　具体的には、ウェブサイトの構築・運用、動画を制作、ネット広告の運用などといった「デジタルマーケティング」の分野を中心とした事業を行っており、企業の広告宣伝活動や人材獲得などの「悩み」を解決するための仕事をしています。<br>
		　それ以外にも、チラシやポスター等の広告媒体の制作、動画の制作、ネット広告の運用、パソコンやネットワーク機器の販売や保守、業務システムの開発まで幅広く手掛けています。<br>
		　また、自社プロダクトとして、グルメサイト「<a href="https://mekulo.jp/" class="tc">めくろうグルメ</a>」や、求人サイト「<a href="https://works.mekulo.jp/" class="tc">めくろうワークス</a>」の企画運営も行っています。<br>
		　2017年に創業したITベンチャー企業です。2021年春に株式会社になったばかりのまだ若い会社です。
	</p>
	<h3>経営の悩みに向き合う</h3>
	<p>
		　売上を上げたい。若手を採用したい。経営を改善したい・・・。経営者の皆さんから伺う悩みはさまざまです。その中から課題を見つけ出し、ITを使って解決できることを探し、提案し、それを実行していくということが私たちの仕事のスタイルです。<br>
		　経営の悩みを解決するためには、経営者の皆さんとじっくり話をすることが大切です。また、現場を見せていただいたり、社員の皆さんに話を伺ったりすることも大切にしています。<br>
		　そのため、IT企業でありながら、インターネットを利用してグローバルの顧客を相手に仕事をすることよりも、すぐに訪問できる地域のお客様を中心にサービスを提供しています。
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="https://placehold.jp/400x300.png" alt="">
				<hgroup>
					<h3>作っている名称</h3>
					<p>
						売上を上げたい。若手を採用したい。経営を改善したい・・・。経営者の皆さんから伺う悩みはさまざまです。その中から課題を見つけ出し、ITを使って解決できることを探し、提案し、それを実行していくということが私たちの仕事のスタイルです。経営の悩みを解決するためには、経営者の皆さんとじっくり話をすることが大切です。
					</p>
				</hgroup>
			</div>
			<p>作っている名称</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="https://placehold.jp/400x300.png" alt="">
				<hgroup>
					<h3>作っている名称</h3>
					<p>
						売上を上げたい。若手を採用したい。経営を改善したい・・・。経営者の皆さんから伺う悩みはさまざまです。その中から課題を見つけ出し、ITを使って解決できることを探し、提案し、それを実行していくということが私たちの仕事のスタイルです。経営の悩みを解決するためには、経営者の皆さんとじっくり話をすることが大切です。
					</p>
				</hgroup>
			</div>
			<p>作っている名称</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="https://placehold.jp/400x300.png" alt="">
				<hgroup>
					<h3>作っている名称</h3>
					<p>
						売上を上げたい。若手を採用したい。経営を改善したい・・・。経営者の皆さんから伺う悩みはさまざまです。その中から課題を見つけ出し、ITを使って解決できることを探し、提案し、それを実行していくということが私たちの仕事のスタイルです。経営の悩みを解決するためには、経営者の皆さんとじっくり話をすることが大切です。
					</p>
				</hgroup>
			</div>
			<p>作っている名称</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="https://placehold.jp/400x300.png" alt="">
				<hgroup>
					<h3>作っている名称</h3>
					<p>
						売上を上げたい。若手を採用したい。経営を改善したい・・・。経営者の皆さんから伺う悩みはさまざまです。その中から課題を見つけ出し、ITを使って解決できることを探し、提案し、それを実行していくということが私たちの仕事のスタイルです。経営の悩みを解決するためには、経営者の皆さんとじっくり話をすることが大切です。
					</p>
				</hgroup>
			</div>
			<p>作っている名称</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="https://placehold.jp/400x300.png" alt="">
				<hgroup>
					<h3>作っている名称</h3>
					<p>
						売上を上げたい。若手を採用したい。経営を改善したい・・・。経営者の皆さんから伺う悩みはさまざまです。その中から課題を見つけ出し、ITを使って解決できることを探し、提案し、それを実行していくということが私たちの仕事のスタイルです。経営の悩みを解決するためには、経営者の皆さんとじっくり話をすることが大切です。
					</p>
				</hgroup>
			</div>
			<p>作っている名称</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="https://placehold.jp/400x300.png" alt="">
				<hgroup>
					<h3>作っている名称</h3>
					<p>
						売上を上げたい。若手を採用したい。経営を改善したい・・・。経営者の皆さんから伺う悩みはさまざまです。その中から課題を見つけ出し、ITを使って解決できることを探し、提案し、それを実行していくということが私たちの仕事のスタイルです。経営の悩みを解決するためには、経営者の皆さんとじっくり話をすることが大切です。
					</p>
				</hgroup>
			</div>
			<p>作っている名称</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2024年1月1日現在）</p>
	<div class="large">
			<p>売上高</p>
			<p class="num"><span>3,800</span>万円</p>
			<p class="year">※2023年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
				<p>平均年齢</p>
				<p class="num"><span>25.7</span>歳</p>
		</li>
		<li class="small">
				<p>平均勤続年数</p>
				<p class="num"><span>00</span>年</p>
		</li>
		<li class="small">
				<p>平均残業時間</p>
				<p class="num"><span>00</span>時間</p>
		</li>
		<li class="small">
				<p>年間休日</p>
				<p class="num"><span>123</span>日</p>
				<p class="at">※2024年計画</p>
		</li>
		<li class="small">
				<p>設立年</p>
				<p class="num"><span>2021</span>年</p>
		</li>
		<li class="small">
				<p>平均有給取得日数</p>
				<p class="num"><span>00</span>日</p>
		</li>
		<li class="circle">
				<p>育児休暇率</p>
				<div class="one">
					<p class="num"><span>00.0</span>%</p>
				</div>
		</li>
		<li class="circle">
				<p>新卒・中途の比率</p>
				<div class="two">
					<p class="num"><span>0:0</span></p>
				</div>
		</li>
	</ul>
	<ul class="fl_con">
		<li id="MW">
			<p>男女比</p>
			<div class="pieChartArea">
				<svg class="circle" width="300" height="300">
						<circle class="type type2 typeA2" cx="150" cy="150" r="100"></circle>
						<circle class="type type1 typeA1" cx="150" cy="150" r="100"></circle>
				</svg>
				<div>
						<p>男性<span>11</span></p>
						<p>女性<span>6</span></p>
				</div>
			</div>
		</li>
		<li id="OLD">
			<p>年齢構成</p>
			<div class="pieChartArea">
				<svg class="circle" width="300" height="300">
						<circle class="type type5 typeB5" cx="150" cy="150" r="100"></circle>
						<circle class="type type4 typeB4" cx="150" cy="150" r="100"></circle>
						<circle class="type type3 typeB3" cx="150" cy="150" r="100"></circle>
						<circle class="type type2 typeB2" cx="150" cy="150" r="100"></circle>
						<circle class="type type1 typeB1" cx="150" cy="150" r="100"></circle>
				</svg>
				<div>
						<p>20代<span>12</span></p>
						<p>30代<span>2</span></p>
						<p>40代<span>1</span></p>
						<p>50代<span>1</span></p>
						<p>60代<span>1</span></p>
				</div>
			</div>
		</li>
		<li id="COMMUTE">
			<p>通勤手段の割合</p>
			<div class="pieChartArea">
				<svg class="circle" width="300" height="300">
						<circle class="type type3 typeC3" cx="150" cy="150" r="100"></circle>
						<circle class="type type2 typeC2" cx="150" cy="150" r="100"></circle>
						<circle class="type type1 typeC1" cx="150" cy="150" r="100"></circle>
				</svg>
				<div>
						<p>車<span>12</span></p>
						<p>徒歩<span>2</span></p>
						<p>自転車<span>1</span></p>
				</div>
			</div>
		</li>
		<li id="FROM">
			<p>出身地割合</p>
			<div class="pieChartArea">
				<svg class="circle" width="300" height="300">
						<circle class="type type8 typeD8" cx="150" cy="150" r="100"></circle>
						<circle class="type type7 typeD7" cx="150" cy="150" r="100"></circle>
						<circle class="type type6 typeD6" cx="150" cy="150" r="100"></circle>
						<circle class="type type5 typeD5" cx="150" cy="150" r="100"></circle>
						<circle class="type type4 typeD4" cx="150" cy="150" r="100"></circle>
						<circle class="type type3 typeD3" cx="150" cy="150" r="100"></circle>
						<circle class="type type2 typeD2" cx="150" cy="150" r="100"></circle>
						<circle class="type type1 typeD1" cx="150" cy="150" r="100"></circle>
				</svg>
				<div>
						<p>長野<span>9</span></p>
						<p>神奈川<span>2</span></p>
						<p>千葉<span>1</span></p>
						<p>群馬<span>1</span></p>
						<p>北海道<span>1</span></p>
						<p>山形<span>1</span></p>
						<p>兵庫<span>1</span></p>
						<p>大阪<span>1</span></p>
				</div>
			</div>
		</li>
	</ul>
</section>
<section class="content" id="company_info">
	<h2>会社概要</h2>
	<img src="office.jpg" alt="" class="scene">
	<dl class="speclist">
		<div>
			<dt>会社名</dt>
			<dd>
				<ruby>NEXT RESERVATION株式会社<rp>（<rt>ネクストリザベーションかぶしきがいしゃ<rp>）</ruby><br>
			</dd>
		</div>
		<div>
			<dt>業種</dt>
			<dd>インターネット付随サービス業</dd>
		</div>
		<div>
			<dt>事業内容</dt>
			<dd>
				<ul class="li_style">
					<li>企業向けデジタルマーケティング支援</li>
					<li>企業向け人財採用支援</li>
					<li>企業向けIT経営支援</li>
					<li>長野県の求人サイト「めくろうワークス」の運営</li>
					<li>ホームページの企画・制作・リニューアル</li>
					<li>動画の企画・撮影・編集</li>
					<li>お手軽ホームページ制作 かるウェブ制作</li>
					<li>グルメサイト「めくろうグルメ」の運営</li>
					<li>セミナーの開催</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>代表取締役　野口 拓馬</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>16名（男性 11名／女性 5名、役員、パート・アルバイト含む）（2024年1月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>
				〒386-1211<br>
				長野県上田市下之郷348-1<br>
				<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36873.909482977375!2d138.2121472!3d36.37903359999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f1.1!3m3!1m2!1s0x601da38d593a1867%3A0x85b5a732e5904ef6!2zTkVYVCBSRVNFUlZBVElPTuagquW8j-S8muekvg!5e1!3m2!1sja!2sjp!4v1734966861996!5m2!1sja!2sjp" width="auto" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</dd>
			</div>
			<div>
				<dt>本社電話番号</dt>
				<dd>0268-71-7315</dd>
			</div>
			<div>
				<dt>ホームページ</dt>
				<dd><a href="http://nextreservation.jp/">http://nextreservation.jp/</a></dd>
			</div>
		</dl>
	</section>
	<section class="content" id="from_president">
		<h2>社長メッセージ</h2>
		<div class="pre_con">
			<figure class="portrait">
				<img src="president_p.jpg" alt="">
				<figcaption><span class="word">代表取締役</span> <span class="word">野口 拓馬</span></figcaption>
			</figure>
			<p>
				　当社は、地元企業の成長発展に貢献する会社にしたいと考えています。<br>
				　企業によって、悩んでいる課題は様々です。売上が伸び悩んでいる。利益が残らない。良い人財を採用することができない。そんな企業が抱える課題を「自分事」として捉え、方策を考え、実行し、解題解決に貢献する。それが私たちの仕事だと考えています。
			</p><br>
			<p>
				　本来、ビジネスとは、誰かができないことを、代わりに実現することではないでしょうか。つまり、仕事とは、誰かのために行う、楽しいことだと考えています。
			</p><br>
			<p>
				　「他人のできないこと」「他人がやらないこと」を実践し続け、人から感謝され、自己成長を実感できる。そんな生き甲斐を見出すことができる会社にしたいと思って、日々の仕事を頑張っています。
			</p><br>
			<p>
				　大きな企業の歯車になるのではなく、自分自身で何かを成し遂げてみたいと思っている皆さん。自分を変えてみたいと考える方々。一度、気軽に当社を見学しに来てみてください。
			</p>
		</div>
	</section>
<a href="apply/#entry" class="flag_btn_entry">
	<img src="../flag.png" class="flag">
	<span>応募前見学情報を見る</span>
	<img src="../arrow.svg">
</a>
<section class="content" id="job_list">
	<h2>募集職種</h2>
	<ul class="image_navi">
		<li>
			<a href="<?= $company_base ?>job_marketing/">
				<figure>
					<img src="<?= $company_base ?>job_marketing/firstview.jpg" alt="">
					<figcaption>企画営業職</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_developer/">
				<figure>
					<img src="<?= $company_base ?>job_developer/firstview.jpg" alt="">
					<figcaption>開発職</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_designer/">
				<figure>
					<img src="<?= $company_base ?>job_designer/firstview.jpg" alt="">
					<figcaption>ウェブデザイナー</figcaption>
				</figure>
			</a>
		</li>
	</ul>
</section>
	</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="../tab.js"></script>
<script src="../page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<?php include $base . '../footer.php' ?>
</body>
