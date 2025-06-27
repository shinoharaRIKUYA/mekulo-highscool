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
$title = $co['company_name'] . 'の高卒求人情報';
$title_with_site = $title . ' | めくろうワークス';

$description = '佐久市で巨大な産業機械のフレームを製造する会社。一点物の鉄骨構造を切断・溶接・塗装まで一貫して手がけ、自分の身長を超えるスケールのモノづくりに挑めます。地域産業を支えるダイナミックな仕事です！';//メタディスクリプションの追加 

$canonical_url = 'https://works.mekulo.jp/hs/' . $co['slug'] . '/';

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
	}]
}
</script>

</head>
<body class="highschool kyasuteku">
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
		形のない金属を、図面通りの部品に変える職人技
	</h2>
	<div class="images">
		<img src="introduce1.jpg" class="scene" alt="">
	</div>
	<p>
		私たちキャステクは青木村(本社)と丸子で、鋳造という、溶かした金属を型に流し込み、冷やして固める加工方法で製品を作る仕事をしています。<br>
		鋳造で作った製品のことを「鋳物」と言い、鋳物は皆さんの身の回りで生活を支えています。例えば、マンホール、車のタイヤホイール、ドアノブなどがあります。<br>
		さらに、鋳造技術を活かして電力、医療といった多分野に挑戦しています。<br>
		本社工場では複雑な形に対応できる砂型鋳造、丸子工場では大量生産に適した金型鋳造を行っています。<br>
		また、社員が「ここをこうした方がいい」と思ったことを会社に提案できる制度があります。いい提案には会社から賞金も出ることもあるのでみんなが積極的に意見を出しています。他にも、月に一度、工場の中をチェックしてきれいに保つ活動もしています。<br> 
		今回は、本社工場の「砂型鋳造部門」または「加工部門」で、一緒に働いてくださる方を募集しています。
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
		鋳造の仕事は、まさに「職人の世界」です。<br>
		作業は繰り返しが多く、すぐに成果が見えないこともありますが、コツコツ続けることで技術が身につきます。作業場は暑く、重い物を運ぶこともあるので体力は必要ですが、何より大切なのは「前向きな気持ち」です。失敗してもくよくよせず、次に活かすことが大事です。<br>
		細かい確認や時間を守る力も、鋳物を完成させるためには大切で、「感覚」と「経験」が活きる仕事です。
		最初は誰でもわからないことだらけ。でも大丈夫。先輩が一人ついてマンツーマンで指示して、教えてくれるので、安心してスタートできます！ <br>
		自分の手で作った製品が、身の回りで使われているのを見ることがやりがいになります。
		また、現場で働く社員さんへの安全の意識も高く、会社として安全対策（粉じんを通さない安全性の高いマスクの着用等）を行っており、安心して働ける環境が整っています。 
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>
		キャステクでできること
	</h3>
	<p>
		私たちキャステクは、青木村にある本社工場と丸子にある丸子工場で、鋳造技術を活かしたさまざまな製品を作っています。<br>
		また、自社の鋳造技術を活かした環境への取り組みも行っています。自然エネルギーを利用した発電システム機の開発を行い、実用化を目指しています。道の駅あおきにある「エネ空あおきタワー」、リフレッシュパーク青木にある「ミライズあおき」がその一例です。エネ空あおきタワーは風力と太陽光のハイブリッド発電システムが搭載され、ミライズあおきは水力と太陽光のハイブリッド発電システムが搭載されたタワーです。
	</p>
	<div class="images">
		<img src="introduce2.jpg" class="scene" alt="">
	</div>
	<h3 class="department">
		砂型鋳造部門
	</h3>
	<p>

		砂型鋳造では、砂で作った型にドロドロに溶かした金属を流し込み、冷えて固まることで形を作ります。砂で型を作るため、複雑な形の製品にも対応できるのが特徴です。<br>
		砂型の作り方には「手ごめ」と「機械」の2つの方法があります。「手ごめ」は職人が手で砂を込めて形を作る方法で、高い技術が必要です。その分、自分の技で丁寧に仕上げるので、やりがいも大きく、まるで芸術作品を作るような楽しさがあります。
		一方、「機械」は型づくりを自動で行う方法で、たくさんの製品を効率よく大量に作るのに向いています 。<br>
		例えば、キャステクでは、ガスタンクや電車、工場の設備などに使われる圧力計の部品を作ります。この部品は、金属を流し込んで作る「鋳造」という作業から、形を整える「加工」まで、すべての工程を自社で行っています。こうすることで、製品の品質を高く保ちつつ、ムダの少ない効率的な生産ができるのです。 
	</p>

	<div class="images">
		<img src="introduce3.jpg" class="scene" alt="">
	</div>
	<p>
		砂型鋳造の作業工程<br>
		1.砂型を作成 
	</p>
	<div class="images">
		<img src="introduce4.jpg" class="scene" alt="">
	</div>
	<p>
		2.地金を溶かす：インゴットを溶解炉に入れて、ドロドロに溶かします。
	</p>
	<div class="images">
		<img src="introduce5.jpg" class="scene" alt="">
	</div>
	<p>
		3.注湯：作成した砂型に溶かした金属を流し込みます。
	</p>
	<div class="images">
		<img src="second.jpg" class="scene" alt="">
	</div>
	<p>
		4.型をハンマーで叩いて壊す：冷えて固まったら型を壊して砂を崩し、鋳物を取り出します。
	</p>
	<div class="images">
		<img src="introduce7.jpg" class="scene" alt="">
	</div>
	<p>
		5.できた鋳物の型バラシ：型を壊した直後の鋳物は、プラモデルのランナーからパーツを切り離す前のような状態なので造形物から使用するパーツを切断して取り出します。<br>
		6.バリ部分を取り除く工程（鋳仕上げ）：キャステクの青木工場は、鋳造から2次加工まで、一貫した生産ラインがあります。砂型工場の現場で製造された鋳物は、このあと、青木の加工工場でいくつかの工程を経て、圧力計の部品が完成します。
	</p>
	<div class="images">
		<img src="introduce8.jpg" class="scene" alt="">
	</div>
	<p>
		どの工程も、完成品をイメージして、作業に取り組むことが、早い成長へのカギになります。
	</p>
	<h3 class="department">
		加工部門
	</h3>
	<p>
		加工工場では、鋳造で作られた製品を、実際に機械に使えるような正確な部品に仕上げる仕事をしています。鋳造によってできた製品は、表面がぼこぼこしていたり、寸法が大まかだったりして、そのままでは使えません。また、ネジの穴なども開いていないため、機械を使って加工する必要があります。<br>
		加工工場では、鋳造された製品を削り、磨き、検査して、精密で信頼できる部品に仕上げています。ものづくりにおいて、なくてはならない大切な工程です。<br> <br>
		加工の作業工程<br>
		1.切削工程：機械に指示を送って操作し、鋳造でできた材料を削ったり、穴を開けたりして、設計図通りの形や大きさに仕上げる作業です。たとえば、平らにすべき部分を正確に削ったり、角を滑らかに整えたりします。
	</p>
	<div class="images">
		<img src="third.jpg" class="scene" alt="">
	</div>
	<p>
		2.研磨工程:機械を使わずに自分の手で、切削だけでは出せないような細かい寸法を調整したり、表面を磨いてきれいに仕上げたりする工程です。見た目を整えるだけでなく、部品同士をぴったりと組み合わせるためにも必要な作業です。<br>
		3.検査工程:ノギスや三次元測定機やバランスマシンなどの測定工具を使って、完成した部品が設計図通りの寸法や形状になっているかを確認します。不具合がないかをしっかりチェックすることで、安全で正確な製品を送り出すことができます。
	</p>
	<div class="images">
		<img src="introduce10.jpg" class="scene" alt="">
	</div>
	<h3>入社後</h3>
	<p>
		入社後は、まず一つの工程から始めます。半年ほどで道具や作業の名前は覚えられますが、仕事を任されるには2～3年、全体を理解して自分の判断で動けるようになるには5～7年かかります。すぐに成長を実感するのは難しいかもしれませんが、粘り強く学び続けることで、必ず力になります。<br>
		私たちの仕事は、学校ではなかなか学べない世界なので、スタートラインはみんな同じです。最初は不安でも、真面目に取り組むあなたなら、必ず成長できるでしょう。
	</p>
</section>
<section id="business" class="content">
	<h2>私たちのビジネス</h2>
	<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="introduce11.jpg" alt="">
				</div>
				<hgroup>
					<h3>建設大型機械のトランスミッショントルクコンバーター部品</h3>
					<p>
						ショベルカーなどのエンジンとトランスミッションの間でエンジンの回転力をミッションに伝達する役割を担う一部の部品です。
					</p>
				</hgroup>
			</div>
			<p>建設大型機械のトランスミッショントルクコンバーター部品</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="introduce12.jpg" alt="">
				</div>
				<hgroup>
					<h3>ミニチュア銅鐸(どうたく)</h3>
					<p>
						伝統工芸を再現した鋳造技術のミニチュア模型です。
					</p>
				</hgroup>
			</div>
			<p>ミニチュア銅鐸(どうたく)</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>13</span>億<span>8000</span>万円</p>
		<p class="year">※2024年実績</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>45.1</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>11.3</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num">月平均<span>11</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>117</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>1962</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>9.3</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 100, 'caption' => '', 'color' => '#d9d9d9'],
						[ 'value' => 0.01, 'caption' => '該当者なし', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 2, 'caption' => '新卒', 'color' => '#2378C7'],
						[ 'value' => 8, 'caption' => '中途', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 90, 'caption' => '男性', 'color' => '#0062B5'],
						[ 'value' => 10, 'caption' => '女性', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 10, 'caption' => "10代", 'color' => '#808080'],
					[ 'value' => 20, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 30, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 40, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 100, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 40, 'caption' => '60代', 'color' => '#008C4A'],
				]); ?>
			</svg>
		</div>
		<li>
			<div class="chart" >
				<p>通勤手段の割合</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 100, 'caption' => "車・バイク100%", 'color' => '#E06A3A'],
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
							[ 'value' => 87, 'caption' => "長野県内", 'color' => '#B2CF3E'],
							[ 'value' => 23, 'caption' => '県外', 'color' => '#FEE929'],
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
					<li>産業機械</li>
					<li>工作機械</li>
					<li>建設機械等各種機械のフレーム</li>
					<li>架台の製作及び大型NC機械</li>
					<li>マシニングセンターによる金属の機械加工</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>内藤央</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>16名（男性 11名／女性 5名、役員、パート・アルバイト含む）（2024年1月1日現在）</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3217.3819080239614!2d138.46759807650105!3d36.254505972407784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dcb5aeb822259%3A0xbdfb0d798128c345!2z5YaF6Jek5bel5qWt5omA!5e0!3m2!1sja!2sjp!4v1738231241938!5m2!1sja!2sjp" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0267-67-1800</dd>
		</div>
		<div>
			<dt>ホームページ</dt>
			<dd><a href="https://sakucity-industrialpark.com/naitou/">https://sakucity-industrialpark.com/naitou/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<h3>仕事はゲームと一緒！？</h3>
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">内藤央</span></figcaption>
		</figure>
		<p>
			みなさんは、初めてスマホを使ったときや新しいゲームを始めたとき、「難しかったらどうしよう」と思ったことがありますか？「どんなことができるのかな」とわくわくした人が多いのではないでしょうか。<br>
			簡単すぎるゲームが物足りないのと同じで、少しずつ挑戦しながらレベルアップしていくのが楽しいですよね。
		</p>
		<p>
			実は、仕事もこれと似ています。ゲームのチュートリアルのように1つずつ新しいスキルを身につけながら挑戦を重ねることでどんどん成長していけます。機械の操作方法や溶接のコツを学び、自分の「レベル」を上げていけば、さらに面白いことに挑戦できます。<br>
			一緒にスキルを高め合える仲間たちが、あなたを待っています！ 
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
			<a href="<?= $company_base ?>job_kinzoku/">
				<figure>
					<img src="<?= $company_base ?>job_kinzoku/firstview.jpg" alt="">
					<figcaption>金属加工</figcaption>
				</figure>
			</a>
		</li>
		<li>
			<a href="<?= $company_base ?>job_yousetsu/">
				<figure>
					<img src="firstview.jpg" alt="">
					<figcaption>溶接作業</figcaption>
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
<?php //include $base . '../footer.php' ?>
</body>
