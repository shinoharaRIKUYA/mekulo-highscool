<?php
$base = '../../../';
$highschool_base = '../../';
$company_base = './';
$cur_page = 'top';
include_once $company_base . '!data.php';
include_once $highschool_base . 'circle.php';
include_once $highschool_base . '!master-data.php';

//====================
// ページのメタデータ
$title = $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';
$keywords = '';//メタキーワードの追加
$description = '';//メタディスクリプションの追加

$canonical_url = 'https://works.mekulo.jp/highschool/' . $co['slug'] . '/';

$og_image = 'https://works.mekulo.jp/ogp-image.png';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php //include $base . '../tracking.php'; ?>
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
		<h1 class="catch"><?= $co['catch_copy'] ?></h1>
		<p class="fv-tag"><?= INDUSTRIES[$co['industry'][0]] ?></p>
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
	<h2>
		より硬く、サビにくく、しなやかに。金属の変化を楽しめ！
	</h2>
	<p>
		金属は、高温で熱したり、表面にコーティングすることで、硬くなったり、柔らかくなったり、錆びにくくなったりと、自在に金属の性質を変えられることをご存じですか？<br>
		実は、自動車やロボット、建設機械に使われている多くの部品には、こうした処理を施された金属部品が使われています。<br>
		この”金属の性質を変える技術“で、日本のものづくりを支えているのが、私たち松山技研です。<br>
	</p>
	<div id="gallery">
		<div class="gallery_window">
			<img src="first.jpg" alt="" class="fs show">
			<img src="second.jpg" alt="" class="sc">
			<img src="third.jpg" alt="" class="th">
			<img src="fourth.jpg" alt="" class="fo">
		</div>
		<div class="gallery_index">
			<img src="first.jpg" alt="" class="fs">
			<img src="second.jpg" alt="" class="sc">
			<img src="third.jpg" alt="" class="th">
			<img src="fourth.jpg" alt="" class="fo">
		</div>
	</div>
	<h3>募集職種</h3>
<div class="job_btn">
    <?php foreach ($occupation as $job): ?>
        <li>
            <a href="<?= $company_base . $job['url'] ?>/">
                <p class="job_name"><?= $job['name'] ?></p>
            </a>
            <div class="arrow">
                <img src="<?= $highschool_base ?>polygon.png" alt="">
            </div>
        </li>
    <?php endforeach; ?>
</div>
	<h3>取材担当者からのポイント！</h3>
	<figure class="portrait">
		<img src=<?= $highschool_base . WRITER['sato']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['sato']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		金属加工処理という仕事をはじめて知りました。<br>
		テレビなどで刀鍛冶の焼入れを見たことはありましたが、そういった処理をおこなっている工場があって、その処理をした部品を使っている車に毎日乗っているなんて、想像もしていませんでした。<br>
		表面処理にしても、外で使う金属の表面が少しくすんだ色だったり、黒い塗装がされていたりしていたのが、金属をサビさせない処理だと聞いて驚きです。<br>
		コーティング処理も、ドリルの刃に使われている処理ということで、知らないところで松山技研の恩恵をたくさん受けていました。<br>
		松山技研は、気づかれにくいけれど、必要なところにはなくてはならない加工をしている会社です。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		マイクラのように、金属にエンチャントを付与する仕事
	</h3>
	<p>
		松山技研には4つの工場があり、それぞれの工場では異なる処理・加工を行っています。<br>
		金属をより強く、硬く、滑らかに、しなやかに、錆びにくくなど、金属の性質を変えるのが仕事です。<br>
		ここから先は、それぞれの工場でどのような処理を行っているのかをご紹介しています。
	</p>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
	</div>
	<h3>
		熱処理加工で金属の硬さを変える
	</h3>
	<p>
		熱処理加工は、金属を加熱・冷却して、金属の硬さ、しなやかさを引き出していく技術です。<br>
		熱処理によって、金属が原子レベルで変化し性質が変わります。通常の熱加工と、真空炉で酸化を防ぎながら行う加工があります。<br>
		熱処理は800～900度、真空炉はおよそ1200度！の温度で処理します。もっとも処理自体は機械の中でおこないますし、担当者に向けてエアコンの風が当たるようになっていますので、夏でも安心です。昔は、工場内はとても暑く、夏は塩を舐めながら作業をしていたそうです。
	</p>
	<div class="images">
		<img src="introduce2.jpg" class="scene" alt="">
	</div>
	<h3>
		表面処理加工で金属を長持ちさせる
	</h3>
	<p>
		表面処理とコーティングは、「サビ」を防いだり、表面を滑りやすくしたり、ひっかき傷に強くしたり、表面を美しく保ったりするためのものです。<br>
		大量の部品を一気に表面処理することもあれば、一つ一つの部品を丁寧に手作業で機械にかけ、コーティングすることもあります。自動車の部品やバルブ、建物の部品、ロボットなどの精密機械から、穴をあけるドリルの部品にも使われている処理です。
	</p>
	<div class="images">
		<img src="introduce3.jpg" class="scene" alt="">
	</div>
	<h3>
		力仕事もあれば、頭を使った仕事もある
	</h3>
	<p>
		大量の部品を設備に投入するとき、取り出すとき、運ぶとき、腕力が必要な場面があります。松山技研の社員の１/３は女性なので、協力しながら作業をしますが、腕力に自信のある人は大歓迎です。<br>
		また、金属の性質を引き出す作業は、原子結晶の配列変化をはかる作業です。実は想像力が不可欠で頭を使う仕事でもあります。<br>
		たくさんの部品を地道に並べる根気強さ、出荷前の検査に必要な繊細さなど、それぞれの仕事に、違った能力が求められます。
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business1.jpg" alt="">
				</div>
				<hgroup>
					<h3>エンジンの部品</h3>
					<p>
						こちらはエンジンに使われている部品です。熱処理加工をして金属の性質を硬く変化させています。
					</p>
				</hgroup>
			</div>
			<p>エンジンの部品</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>金型</h3>
					<p>
						金型はプラスチック製品や金属製品を成形するために使う型です。<br>
						真空炉を使った熱処理によって強度を高め、コーティングで表面の滑りを良くして耐久性も高めています。
					</p>
				</hgroup>
			</div>
			<p>金型</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>19</span>億円</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>37</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>10</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>20～30</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>115</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1982</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>13</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 0.001, 'caption' => '', 'color' => '#d9d9d9'],
						[ 'value' => 100, 'caption' => '100%', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 4, 'caption' => '新卒4', 'color' => '#2378C7'],
						[ 'value' => 1, 'caption' => '中途1', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 2, 'caption' => '男性：2', 'color' => '#0062B5'],
						[ 'value' => 1, 'caption' => '女性：1', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 3, 'caption' => "", 'color' => '#808080'],
					[ 'value' => 39, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 39, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 36, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 18, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 16, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 100, 'caption' => "車・バイク", 'color' => '#E06A3A'],
						[ 'value' => 0.001, 'caption' => '', 'color' => '#D04255'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>出身地の割合</p>
					<svg width="150" height="150" viewBox="0 0 200 200">
						<?php create_donut_graph(100, 100, 100, 40, [
							[ 'value' => 100, 'caption' => "長野県内", 'color' => '#B2CF3E'],
							[ 'value' => 0.001, 'caption' => '', 'color' => '#FEE929'],
													]); ?>
					</svg>
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
			<dd><?= $co['company_name'] ?></dd>
		</div>
		<div>
			<dt>業種</dt>
			<dd><?= INDUSTRIES[$co['industry'][0]] ?></dd>
		</div>
		<div>
			<dt>事業内容</dt>
			<dd>
				<ul class="li_style">
					<li>金属加工</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>川村道夫</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>151名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3213.8665215605297!2d138.28503411744384!3d36.3397847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dba51a7ab3633%3A0xf81dccc2d70ddb55!2z5p2-5bGx5oqA56CU77yI5qCq77yJIOe3j-WLmemDqA!5e0!3m2!1sja!2sjp!4v1745481765950!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-42-4063</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd><a href="https://www.matsuyama-giken.co.jp/">https://www.matsuyama-giken.co.jp/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">採用担当：吉池さん</span></figcaption>
		</figure>
		<p>
			工場の仕事って、一人で黙々と作業をするイメージがあるかもしれません。<br>
			でも、<br>
			松山技研の仕事は一人で完結するものはありません。必ずあなたの仕事を、次の人が待っているからです。<br>
			話すことが上手とか、特別なコミュニケーション力をが必要な訳ではありません。失敗も不安も話してくれる、そんな人を松山技研では求めています。<br>
			経験や学歴よりも、「どうしたら仕事がうまくいくか」、「もっと良くなるのか」を考えながら働いてくれる人なら大歓迎です。<br>
			松山技研に入ったら、働いている先輩の姿をよく見てくだい。真剣に働く大人の姿ってカッコイイですよ。<br>
			松山技研で待っています。
		</p>
	</div>
</section>
<div class="visit content">
    <h2>応募前見学について</h2>
		<dl class="speclist">
    <?php foreach ($visit as $plan): ?>
    <div class="visit-item">
        <h3><?= $plan['about'] ?>について</h3>
        <div>
            <dt>開催日</dt>
            <dd>
				<ul>
						<?php 
						if (is_array($plan['date'])) {
								foreach ($plan['date'] as $date) {
										if (is_array($date)) { 
											echo "<li>" . $date['name'] . "</li>";
										}
								}
						} else {
								echo "<li>" . $plan['date'] . "</li>";
						}
						?>
				</ul>
            </dd>
        </div>
        <div>
            <dt>内容</dt>
            <dd><?= $plan['content'] ?></dd>
        </div>
    </div>
    <?php endforeach; ?>
</dl>
	<a href="apply/#entry" class="flag_btn_entry">
		<img src="<?= $highschool_base ?>flag.png" class="flag">
		<span>
			就活前に会社を見てみよう!<br>
			応募前見学
		</span>
		<img src="<?= $highschool_base ?>arrow.svg">
	</a>
</div>
<section class="content" id="job_list">
	<h2>募集職種</h2>
	<ul class="image_navi">
		<li>
			<a href="<?= $company_base ?>job_dobokusekou/">
				<figure>
					<img src="<?= $company_base ?>second.jpg" alt="">
					<figcaption>土木施工管理</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_kentikusekou/">
				<figure>
					<img src="job_kentikusekou/fv.jpg" alt="">
					<figcaption>建築施工管理</figcaption>
				</figure>
			</a>
		</li>
	</ul>
</section>
</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<script src="../../tab.js"></script>
<script src="../../page_nav.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<?php //include $base . '../footer.php'; ?>
</body>
