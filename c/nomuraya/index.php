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
$keywords = '野村屋ホールディングスは、瓦から始まり100年以上。東日本大震災を機に自然エネルギー・不動産・建築へと事業を広げ、変化を恐れず挑戦し続けています。そんな私たちの姿勢と採用情報をご紹介します。';//メタキーワードの追加
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
		私たちは、いつでもカワル。  
	</h2>
	<p>
		株式会社野村屋ホールディングスの採用ページをご覧いただき、ありがとうございます。<br>
		私たちは、長野県上田市を拠点に、「瓦」から始まり、自然エネルギー・不動産・建築・インフラなど、幅広い分野に挑戦を続けている企業です。<br>
		はじまりは1913年。<br>
		野村屋は「野村製瓦工場」として創業し、日本家屋に欠かせない瓦をつくり、敷き詰めることで、長きにわたり地域の暮らしと文化を支えてきました。<br>
		時代の変化とともに瓦の需要が減少するなか、私たちは2011年の東日本大震災を機に、「エネルギーを自分たちでつくる」時代の到来を感じ取り、新たな一歩を踏み出します。<br>
		若き四代目社長・野村健太のもと、住宅向け太陽光発電システムの設置を皮切りに、様々な事業を展開していきました。<br>
		このページでは、そんな私たちの姿勢や取り組みを詳しくご紹介しています。
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
		<img src=<?= $highschool_base . WRITER['noguchi']['image'] //担当者名をここに記入?> alt="">
		<figcaption><span class="name"><?= WRITER['noguchi']['name']//担当者名をここに記入 ?></span></figcaption>
	</figure>
	<p>
		取材の中で、特に心に残ったのが、野村社長と専務が揃って語ったこの言葉です。<br>
		「お金で人生の可能性を制限させたくない」<br>
		実はお二人とも、20代の頃は本当にお金で苦労されたそうです。
		だからこそ、「社員にはそんな思いをさせたくない」と強く決意し、利益をしっかり出せる会社にすること、そして会社を永く続けることに、本気で取り組んできたのだと話してくれました。
		野村社長が就任した当初、年間売上は3,800万円。<br>
		そこから10年で、売上20億円を超える企業にまで成長させたそのスピード感と実行力には、本当に驚かされました。<br>
		社員の多くは、実は未経験からのスタート。それでも、支え合いながら挑戦を続ける文化が根づいていて、仕事だけでなく、社内部活動などでも自分の「好き」や「得意」を活かせる場があるのも、野村屋の魅力です。<br>
		「まだやりたいことは決まってないけど、面白いことや、大きなことに挑戦してみたい」<br>
		そんな気持ちを持っている高校生には、まさにぴったりの場所。
		この会社で働けば、自分の力がグッと伸びていく実感が得られ、自然と“自分の夢”も見えてくるはずです。
	</p>
</div>
<section class="content" id="about_company">
	<h2>会社情報記事</h2>
	<h3>瓦屋から始まり、あらゆる事業へと挑戦を続ける</h3>
	<p>
		――――「これからも、100年続く企業を目指して」<br>
		私たち株式会社野村屋ホールディングスは、1913年（大正2年）、長野県上田市で「野村製瓦工場」として創業しました。
		当時は瓦屋根が主流であり、職人たちが一枚一枚、丁寧に瓦を敷き詰め、日本の伝統的な建築文化を支えてきました。<br>
		しかし、時代は変わり、住宅の屋根は瓦から板金などへと移り変わり、それにともない、私たちの仕事も大きく減少していきました。
	</p>
	<div class="images">
		<img src=".jpg" class="scene" alt="">
		<img src=".jpg" class="scene" alt="">
	</div>
	<h3>変化のきっかけは東日本大震災、そして若き社長の決断</h3>
	<p>
		変化の大きなターニングポイントとなったのは、2011年。<br>
		東日本大震災が日本を襲い、電気やガスといったインフラが各地で寸断され、「電気を買う」から「自分たちで電気をつくる」時代へと、人々の意識が大きく変わった瞬間でもありました。<br>
		同時に、野村屋には全国から“瓦屋根の修繕”の依頼が殺到し、私たち瓦職人は復旧のために全国各地を飛び回る日々を過ごしました。<br>
		そのさなか、突然、会社を牽引していた三代目社長（現社長の父）が急逝。<br>
		その跡を継いだのが、当時29歳だった現社長・野村健太でした。
		「瓦だけでは、いずれ会社が立ちゆかなくなる」<br>
		かねてから抱いていた危機感と、震災を通じて感じ取った“時代の変化”を重ね合わせ、野村屋は瓦屋の枠を超え、自然エネルギーという新たな事業領域に挑戦する決断をしました。<br>
		それこそが、「瓦の野村屋」から「多角的な事業を展開する野村屋ホールディングス」へと変化する第一歩でした。

	</p>
	<div class="images">
		<img src="first.jpg" class="scene" alt="">
	</div>
	<h3>「瓦の野村屋」から、「多角経営の野村屋ホールディングス」へ</h3>
	<p>
		2012年、「有限会社野村屋瓦工業」から「株式会社野村屋」へと社名を変更。<br>
		住宅向け太陽光発電システムの設置事業をスタートさせ、本格的に自然エネルギー分野に挑戦し始めました。<br>
		翌2013年には産業用太陽光の販売に乗り出し、2014年には自社で太陽光発電所を保有。2015年からは分譲型太陽光発電所の販売も手がけるなど、自然エネルギー事業を着実に拡大していきました。<br>
		しかし、かつて瓦一筋だった私たちは、「一つの事業に依存すれば、成長はやがて止まり、衰退が訪れる」という現実を経験しています。<br>
		だからこそ、2018年には不動産事業を担う「株式会社野村屋トラスト」を設立。<br>
		さらに、砕石の製造・販売や土木工事を手がける丸眞興業有限会社や新築住宅を手掛ける株式会社菱田工務店をM&Aによりグループ化し、ゴルフ練習場「グリーン・ヒル神畑」の運営にも乗り出し、グループ全体としての多角化を一層進めてきました。<br>
		現在では上田駅前にあった閉鎖中のホテルを取得し、温泉施設としての再生プロジェクトも進行中です。
	</p>
	<div class="images">
		<img src="introduce4.jpg" class="scene" alt="">
	</div>
		<h3>「次の100年」をつくるために</h3>
	<p>
		今、時代はかつてないスピードで変化しています。<br>
		そんな中で私たちは、過去の肩書きや経験にとらわれることなく、新しい可能性に果敢に挑む人と、これからの未来を築いていきたいと考えています。<br>
		大切なのは、「どれだけやってきたか」ではなく、「これから何をやるか」。<br>
		自分たちの手でチャレンジし、努力した分だけ、自分の人生もより豊かにしていける。<br>
		そんな環境と価値観を、私たちは大切にしています。<br>
		もちろん、働き方は人それぞれ。<br>
		当社には、子育てや家庭との両立をしながら働く女性社員も多く在籍しており、それぞれの状況に寄り添いながら、挑戦と家庭の両方を支える職場づくりにも力を入れています。<br>
		また、男性社員も育児休業を取得しており、性別に関係なく仕事と家庭を両立できる環境づくりを進めています。<br>
		これからの野村屋グループを共につくるのは、「変化を楽しめる人」。<br>
		過去にとらわれず、自分の可能性を信じ、未来に向かって一歩を踏み出せる人。<br>
		そんな仲間と出会えることを、私たちは心から楽しみにしています。
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
					<h3>株式会社人間電力</h3>
					<p>
						太陽光パネルの設置や発電所の建設・販売を通じて、クリーンなエネルギーを広げています。
						また、野村屋ホールディングスの創業当初から続く“瓦”の工事にも取り組んでいます。
					</p>
				</hgroup>
			</div>
			<p>株式会社人間電力</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>株式会社人間計画</h3>
					<p>
						eスポーツチーム「野村屋STRIDERZ長野」の運営を手がけ、ゲームの世界で世界を目指すプロ選手たちをサポート。
						さらに、現在は温泉施設のプロデュースにも挑戦中。
						「遊び」を本気でカタチにする、ユニークなチャレンジ企業です。
					</p>
				</hgroup>
			</div>
			<p>株式会社人間計画</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>ノム・トラスト株式会社</h3>
					<p>
						自然エネルギーと不動産、どちらも地域の未来に不可欠な事業を展開中。
						エコな発電所の開発から、土地・住宅の売買まで、暮らしと環境をトータルで支える会社です。
					</p>
				</hgroup>
			</div>
			<p>ノム・トラスト株式会社</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>丸眞興業有限会社</h3>
					<p>
						長野県富士見町の大地で、砕石づくりから土木工事、産業廃棄物の収集まで、地域のインフラを支える会社です。
					</p>
				</hgroup>
			</div>
			<p>丸眞興業有限会社</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>株式会社菱田工務店</h3>
					<p>
						長野県坂城町で新築住宅の設計や施工、リフォーム、リノベーションなどを手掛ける。
						長野県埴科郡坂城町で新築住宅やリフォーム、リノベーションなどを手掛ける会社です。
					</p>
				</hgroup>
			</div>
			<p>株式会社菱田工務店</p>
		</li>
		<li class="thumbnails">
			<div class="thumbnail">
				<div class="inner">
					<img src="business2.jpg" alt="">
				</div>
				<hgroup>
					<h3>グリーン・ヒル神畑</h3>
					<p>
						2021年にリニューアルされたゴルフ練習場「グリーン・ヒル神畑」の運営を行っています。
					</p>
				</hgroup>
			</div>
			<p>グリーン・ヒル神畑</p>
		</li>
	</ul>
</section>
<section class="content" id="numeric_data">
	<h2>数字で見る当社</h2>
	<p class="remark">（2025年2月20日現在）</p>
	<div class="large">
		<p>売上高</p>
		<p class="num"><span>1億9386万</span>円</p>
	</div>
	<ul class="gr_con">
		<li class="small">
			<p>平均年齢</p>
			<p class="num"><span>32</span>歳</p>
		</li>
		<li class="small">
			<p>平均勤続年数</p>
			<p class="num"><span>8</span>年</p>
		</li>
		<li class="small">
			<p>平均残業時間</p>
			<p class="num"><span>15</span>時間</p>
		</li>
		<li class="small">
			<p>年間休日</p>
			<p class="num"><span>90</span>日</p>
		</li>
		<li class="small">
			<p>設立年</p>
			<p class="num"><span>2013</span>年</p>
		</li>
		<li class="small">
			<p>平均有給取得日数</p>
			<p class="num"><span>10</span>日</p>
		</li>
	</ul>
	<ul class="fl_con">
	<li>
			<div class="chart">
				<p>育児休暇率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 100, 'caption' => '0%', 'color' => '#d9d9d9'],
						[ 'value' => 0.001, 'caption' => '', 'color' => '#2378C7'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>新卒・中途の比率</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 45, [
						[ 'value' => 0.001, 'caption' => '', 'color' => '#2378C7'],
						[ 'value' => 14, 'caption' => '中途14', 'color' => '#F34444'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
			<div class="chart">
				<p>男女比</p>
				<svg width="150" height="150" viewBox="0 0 200 200">
					<?php create_donut_graph(100, 100, 100, 40, [
						[ 'value' => 4, 'caption' => '男性：4', 'color' => '#0062B5'],
						[ 'value' => 10, 'caption' => '女性：10', 'color' => '#FF6E7E'],
					]); ?>
				</svg>
			</div>
		</li>
		<li>
		<div class="chart">
			<p>年齢構成</p>
			<svg width="150" height="150" viewBox="0 0 200 200">
				<?php create_donut_graph(100, 100, 100, 40, [
					[ 'value' => 0.001, 'caption' => "", 'color' => '#808080'],
					[ 'value' => 4, 'caption' => '20代', 'color' => '#0073B7'],
					[ 'value' => 8, 'caption' => '30代', 'color' => '#00AEEF'],
					[ 'value' => 2, 'caption' => '40代', 'color' => '#00B398'],
					[ 'value' => 0.001, 'caption' => '50代', 'color' => '#009F6B'],
					[ 'value' => 0.001, 'caption' => '60代', 'color' => '#008C4A'],
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
					<li>太陽光パネル設置や発電所の建設・販売、伝統の瓦工事</li>
					<li>eスポーツチーム運営・温泉施設プロデュース</li>
					<li>不動産</li>
					<li>砕石製造・土木工事・産業廃棄物収集</li>
					<li>新築住宅の設計・施工やリフォーム、リノベーション</li>
					<li>ゴルフ練習場の運営など塗装工事</li>
				</ul>
			</dd>
		</div>
		<div>
			<dt>代表者名</dt>
			<dd>野村 健太</dd>
		</div>
		<div>
			<dt>従業員数</dt>
			<dd>名</dd>
		</div>
		<div>
			<dt>本社所在地</dt>
			<dd>〒<?= $co['post_code']?><br><?= $co['address']?><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3205.741307980616!2d138.1192850763172!3d36.536234972323584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601d8327d9ec0faf%3A0xf899b11647bc1a36!2z5qCq5byP5Lya56S-44Ko44O844K544O744Ov44O844Kr44O844K6!5e0!3m2!1sja!2sjp!4v1748582444511!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</dd>
		</div>
		<div>
			<dt>本社電話番号</dt>
			<dd>0268-75-7763</dd>
		</div>
		<div class="hp">
			<dt>ホームページ</dt>
			<dd><a href="https://nomurayagroup.com/">https://nomurayagroup.com/</a></dd>
		</div>
	</dl>
</section>
<section class="content" id="from_president">
	<h2>会社からのメッセージ</h2>
	<div class="pre_con">
		<figure class="portrait">
			<img src="president_p.jpg" alt="">
			<figcaption><span class="name">松本　朗</span></figcaption>
		</figure>
		<p>
			私たち野村屋は、1913年の創業から100年以上もの間、時代の変化に柔軟に対応しながら挑戦を続けてきました。<br>
			これからの未来は、誰にも予測できないほど変化が激しく、不確実性に満ちています。<br>
			だからこそ、私たちは「変わり続けること」を恐れず、新しい可能性を追い求める企業であり続けたい。<br>
			若い皆さんには、固定概念にとらわれず、自分の可能性を信じてほしい。<br>
			夢は最初から明確でなくても構いません。<br>
			挑戦を重ねる中で、自ずと見えてくるものです。<br>
			自分の手で未来を切り拓き、世の中に新しい価値を生み出していきましょう。
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
				<p>※他の日程はお問い合わせください。</p>
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
			<a href="<?= $company_base ?>job_genba/">
				<figure>
					<img src="first.jpg" alt="">
					<figcaption>現場職人</figcaption>
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
