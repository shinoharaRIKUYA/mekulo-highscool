<?php
$base = '../../../';
$highschool_base = '../../';
$company_base = '../';

$cur_page = 'job_designer';
$job_title = 'ウェブデザイナー';

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
<body class="newgrads">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
		<div class="fv_area">
			<img alt="" class="fv_image" src="firstview.jpg">
			<h1><?= $job_title ?></h1>
			<div class="catch">
				ウェブを通して想いを届ける
			</div>
		</div>
		<section class="g">
			<dl class="requirements">
				<div>
					<dt>応募要件</dt>
					<dd>
						高卒以上、全学部全学科<br>
						普通自動車運転免許（AT可）
					</dd>
				</div>
			</dl>
		</section>
		<section class="toc">
			<h2>目次</h2>
			<ul>
				<li><a href="#job_detail">仕事内容</a></li>
				<li>社員に聞いてみた
					<ol>
						<li><a href="#mywork">担当している仕事</a></li>
						<li><a href="#motivation">この仕事を始めたきっかけ</a></li>
						<li><a href="#training">仕事を覚えるまで</a></li>
						<li><a href="#growth">目指したいこと</a></li>
						<li><a href="#off">仕事以外の時間の過ごし方</a></li>
						<li><a href="#message">ウェブデザイナーを目指したい人へ</a></li>
					</ol>
				</li>
				<li><a href="#jobinfo">募集要項</a></li>
			</ul>
		</section>
<section class="g" id="job_detail">
	<h2>仕事内容</h2>
	<p>
		　インターネット上には、数えきれないほどのウェブサイト（ホームページ）があります。このウェブサイトを作る仕事が<strong>ウェブデザイナー</strong>です。
	</p>
	<p>
		　ウェブデザイナーと言っても、好き勝手にきれいなデザインを作ればよい訳ではありません。お客様がお金をかけてウェブサイトを作るのには必ず目的があります。まずその目的を踏まえて、ウェブサイトをどのような構成にするか、どのようなコンテンツを載せるかを考え、それを「コンテンツ設計」にまとめます。<br>
		　その後で、レイアウト設計、デザイン設計を行って、ウェブサイトの外観を決めていきます。同時に、ウェブサイトで伝える内容であるコンテンツ（文章や写真）も制作していきます。
	</p>
	<img src="2.jpg" alt="" class="scene">
	<p>
		　どの設計についても、お客様や社内のメンバーと綿密に打ち合わせを重ねながら進めていきます。ですから、お客様やメンバーとのコミュニケーション力や、お客様の要望を感じ取る力、世の中の人にどのような形で情報発信すれば響くだろうと想像する力も必要になります。
	</p>
	<p>
		　また、ウェブデザインは表示する画面の大きさによってレイアウトが変わるなど、ポスターやパンフレットのデザインとは異なる要素がたくさんあります。そのため、HTMLやCSSの知識が必須ですし、また欄の幅や余白など、ページ上の様々な寸法を具体的な数値で把握することも大切です。こうした知識を身につけるため、最初のうちはデザインを担当する人も、HTMLやCSSのコーディングを担当してもらいます。
	</p>
	<p>
		　なお、当社では動画制作もウェブデザイナーが行っています。そのため、ウェブデザイナーが動画のシナリオや絵コンテを書いたり、撮影や編集を行ったりすることもあります。
	</p>
</section>
<section class="g">
	<h2>社員に聞いてみた</h2>
	<ul class="people">
		<li>
			<figure class="person" style="float: right;">
				<img alt="" src="furuya.jpg">
				<figcaption>
					古谷 嘉野<br>
					制作部 リーダー<br>
					勤続4年（アルバイト時期を含む）<br>
				</figcaption>
			</figure>
		</li>
	</ul>
	<section class="g" id="mywork">
		<h3>担当している仕事</h3>
		<p>
			　主にホームページのデザインや、コンテンツ設計、写真の構図などの仕事を行っています。また、動画のシナリオや絵コンテも担当しています。
		</p>
		<p>
			　最初にコンテンツ設計を作ります。それが決まった段階で、コンテンツをページの中にどのように配置するかを考える<mark>レイアウトラフ</mark>を作ります。このときに思いついた装飾や表現を、レイアウトラフに書き込んでいって、ページのイメージを膨らませていきます。
		</p>
		<img src="firstview.jpg" alt="" class="scene">
		<p>
			　その後で、パソコンを使ってレイアウトを表すワイヤーフレームを作成します。本格的に色や装飾を加えて、撮影した写真を加えるとホームページのレイアウトが出来上がります。この設計図をもとに、開発職の人がコーディングを行います。<br>
			　パソコンとスマートフォンでは画面の大きさが違うので、レイアウトはパソコン用とスマートフォン用の両方を作成します。パソコンの場合は、ブラウザーの画面の大きさを自由に変えることができるので、他にもいくつかの大きさのレイアウトを作ることもあります。
		</p>
		<p>
			　ホームページに載せるイラストを自分で描くこともあります。
		</p>
	</section>
	<section class="g" id="motivation">
		<h3>この仕事を始めたきっかけ</h3>
		<p>
			　最初は、プログラミングのセミナーでNEXT RESERVATIONを知りました。セミナーに参加した後で、アルバイトに誘われ、まずコーディングのアルバイトを始めました。<br>
			　液晶タブレットを持って行って、趣味で描いた絵を見せたところ、デザインができるのでは？と言われ、デザインをやるようになりました。
		</p>
		<p>
			　最初は、3つの見出しのデザインを作るのに3時間もかかってしまいました（笑）。今では、見出しのデザインもすぐに作れるようになりました。
		</p>
		<img src="1.jpg" alt="" class="scene">
	</section>
	<section class="g" id="training">
		<h3>仕事を覚えるまで</h3>
		<p>
			　デザインの仕事を始めたとき、会社としてウェブデザインを行う方法が確立されていなかったので、試行錯誤しながらウェブデザインをうまく行う方法を考えていきました。最初にラフ画を書くようにしてみたり、デザイン設計書を作る工程を加えてみたりして、開発の人に自分が考えたデザインをうまく伝える方法を模索していきました。
		</p>
	</section>
	<section class="g" id="growth">
		<h3>これから目指していきたいこと</h3>
		<p>
			　デザインは、自分も満足できて、お客様にも満足していただけるものを作ることが大切だと思っています。その意味で、デザインに終わりはないと思うので、自分で色々なデザインを勉強して、実践していきたいと思っています。
		</p>
		<p>
			　デザインを言葉で表現する力も磨きたいです。デザインは形でしか判断してもらえませんが、デザインのコンセプトをお客様に伝える必要がある場合もあります。その時に、自分だけではなく他の人も説明できるようにしたいと思います。
		</p>
		<img src="3.jpg" alt="" class="scene">
		<p>
			　NEXT RESERVATIONが、長野県の中で、デザインもコンテンツもできる会社と認識してもらえるようにしたいですね。
		</p>
	</section>
	<section class="g" id="off">
		<h3>仕事以外の時間の過ごし方</h3>
		<p>
			　まだ学生なので（笑）、平日は大学の授業を受けています。大学の授業の合間や、授業が終わった後、休日などに仕事をしています。
		</p>
		<p>
			　文房具が大好きです。ロフトなどに文房具を買いに行くことがよくあります。文房具は何時間探していても飽きません。<br>
			　食べることも好きです。自分でよく料理もしますし、コンビニで新しいものが発売されるたびに買いたくなります。
		</p>
		<p>
			　旅行にも行きたいですね。インスタグラムできれいな景色などを見て、次にどこに旅行をするか探しています。
		</p>
	</section>
	<section class="g" id="message">
		<h3>ウェブデザイナーを目指したい人へ</h3>
		<p>
			　ウェブデザイナーになりたいと思っている人には、とにかく世の中の色々なホームページを見てほしいと思います。そして、参考になるものをたくさん見つけて、デザインをするときの引き出しをたくさん持てるようにしてほしいと思います。
		</p>
		<p>
			　また、画面の大きさが変わるときやユーザーが操作をしたときに、どのように画面が動くのかを頭の中で描けるようになることも大切だと思います。そのようなことを聞かれたら、具体的に答えられるようになってほしいと思います。
		</p>
	</section>
</section>
<section class="g" id="jobinfo">
	<h2>募集要項</h2>
	<dl class="speclist">
		<div>
			<dt>募集職種</dt>
			<dd><?= $job_title ?></dd>
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
			<dd>
				普通自動車運転免許（AT可）<br>
			</dd>
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
	<h4>採用後の待遇</h4>
	<dl class="speclist">
		<div>
			<dt>基本給</dt>
			<dd>
				<dl class="speclist">
					<dt>高卒以上</dt>
					<dd>171,000円～（1か月160時間勤務の場合、残業代別）</dd>
				</dl>
			</dd>
		</div>
		<div>
			<dt>諸手当</dt>
			<dd>通勤手当（月額10,000円まで）</dd>
		</div>
		<div>
			<dt>昇給</dt>
			<dd>
				役員面談（年4回）による。<br>
				2023年度実績: 平均20,000円程度
			</dd>
		</div>
		<div>
			<dt>賞与</dt>
			<dd>年1回（実績なし）</dd>
		</div>
		<div>
			<dt>試用期間</dt>
			<dd>3か月（待遇の変更なし）</dd>
		</div>
		<div>
			<dt>定年制度</dt>
			<dd>なし</dd>
		</div>
	</dl>
	<h4>勤務に関する情報</h4>
	<dl class="speclist">
		<div>
			<dt>勤務地</dt>
			<dd>
				【本社】<br>
				〒386-1211<br>
				長野県上田市下之郷348-1<br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d102812.37843672572!2d138.20204662900753!3d36.3635201095952!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x85b5a732e5904ef6!2zTkVYVCBSRVNFUlZBVElPTuagquW8j-S8muekvg!5e0!3m2!1sja!2sjp!4v1656155358994!5m2!1sja!2sjp" width="100%" height="400" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy"></iframe>
			</dd>
		</div>
		<div>
			<dt>勤務時間</dt>
			<dd>
				フレックスタイム制（標準9:00～18:00）<br>
				※コアタイムなし<br>
				※独り立ちできるまでは上長と共に仕事をするため、出勤時間は上長に合わせていただきます。<br>
			</dd>
		</div>
		<div>
			<dt>休憩時間</dt>
			<dd>60分</dd>
		</div>
		<div>
			<dt>休日・休暇</dt>
			<dd>週休2日制（シフト制）、年間休日123日（2024年度計画）</dd>
		</div>
		<div>
			<dt>適用保険</dt>
			<dd>厚生年金保険、健康保険、介護保険、雇用保険、労災保険</dd>
		</div>
		<div>
			<dt>時間外勤務の状況</dt>
			<dd>月平均10時間位</dd>
		</div>
		<div>
			<dt>就業場所における受動喫煙防止の取組</dt>
			<dd>建物内喫煙不可</dd>
		</div>
	</dl>
	<h4>募集・採用に関する情報</h4>
	<dl class="speclist">
		<div>
			<dt>前年度の採用実績</dt>
			<dd>2名</dd>
		</div>
<?php /* 直近3年間の新卒採用者数があるので不要
		<div>
			<dt>直近3年間の新卒採用者数</dt>
			<dd>令和2年 0名、平成31年 1名、平成30年 1名</dd>
		</div>
*/ ?>
		<div>
			<dt>直近3年間の新卒離職者数</dt>
			<dd>1名</dd>
		</div>
		<div>
			<dt>採用者の出身学校実績</dt>
			<dd>長野大学</dd>
		</div>
	</dl>
	<h4>キャリア形成支援制度</h4>
	<dl class="speclist">
		<div>
			<dt>研修制度</dt>
			<dd>OJTのみ</dd>
		</div>
		<div>
			<dt>自己啓発支援制度</dt>
			<dd>
				<p>
					〇社内定期勉強会<br>
					　当社メンバーが主体となり、定期的な社内勉強会を実施しています。長期に渡るものや、単発のものまで様々ですが、メンバー自らが勉強会の企画から考え、実行しています。<br>
					　最近では、ウェブデザイン勉強会や、アクセス解析勉強会、マーケティング勉強会などを行いました。<br>
				</p>
				<p>
					〇資格取得支援<br>
					　ウェブアナリスト、ウェブデザイン技能検定、ITパスポート、基本情報、ウェブ解析士などの資格取得にかかる費用を全て、会社承認の上で、100%補助を行っています。<br>
					　また、資格取得に向けた社内勉強会も、随時開催しています。<br>
				</p>
				<p>
					〇当社主催の有料セミナーへの無料参加<br>
					　当社では、「上田IT講座」というITセミナー事業を運営しています。行う講座内容は、HTML、CSSの内容から、データベース、プログラミング、Androidアプリ開発など、多岐に渡る講座を提供しています。<br>
					　本来は、有料で参加できる講座ですが、当社メンバーは特別に無料で参加することができます。この機会に、新たな知識を付け、仕事に役立てている仲間も多くいます。<br>
				</p>
				<p>
					〇教材及び外部セミナー補助制度<br>
					　ウェブ技術やデザインに関する教材本の購入にかかる費用を100%補助しています。また、外部セミナーへの受講費用は、勉強したことを社内で発表し、全メンバーに共有することを条件に50%補助しています。<br>
				</p>
			</dd>
		</div>
		<div>
			<dt>メンター制度</dt>
			<dd>
				〇役員面談<br>
				　3ヵ月に一度の役員面談があります。役員面談では、3ヵ月間仕事を通じて、自らが成長した所を振り返ったり、今の仕事で悩んでいることがあれば遠慮なく言って頂く場として活用しています。<br>
				　そして、このような場で教えて頂いた課題は、「個人の課題」ではなく、「会社の課題」として私たち経営層も捉え、もっと良い会社を創るために組織として課題解決に臨んでいきます。<br>
				　また、正社員の場合、一年に一度ですがこの場で昇給の話もしていきます。<br>
			</dd>
		</div>
	</dl>
	<h4>雇用管理状況（令和5年度実績）</h4>
	<dl class="speclist">
		<div>
			<dt>前年度の月平均所定外労働時間の実績</dt>
			<dd>13.5時間</dd>
		</div>
		<div>
			<dt>前年度の有給休暇の平均取得日数</dt>
			<dd>8.5日</dd>
		</div>
		<div>
			<dt>前年度の育児休業取得者数</dt>
			<dd>0名</dd>
		</div>
		<div>
			<dt>役員/管理職の女性比率</dt>
			<dd>役員 0%、管理職 0%</dd>
		</div>
		<div>
			<dt>平均勤続年数</dt>
			<dd>
				3.0年（アルバイト・パートを除く）<br>
				※2017年の創業以降の実績
			</dd>
		</div>
	</dl>
</section>
		<div class="btn_navi">
			<a href="<?= $company_base ?>" class="btn">企業TOP</a>
			<a href="<?= $company_base ?>job_marketing/" class="btn">次の職種</a>
			<a href="<?= $company_base ?>apply/" class="btn">この仕事に興味がある</a>
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
