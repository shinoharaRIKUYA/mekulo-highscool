<?php
$base = '../../../';
$highschool_base = '../../';
$company_base = '../';

$cur_page = 'job_developer';
$job_title = '開発職';

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
				ウェブサイトやシステムを構築する
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
						<li><a href="#motivation">この仕事を始めた動機</a></li>
						<li><a href="#training">仕事を覚えるまで</a></li>
						<li><a href="#growth">目指したいこと</a></li>
						<li><a href="#off">オフの過ごし方</a></li>
					</ol>
				</li>
				<li><a href="#jobinfo">募集要項</a></li>
			</ul>
		</section>
<section class="g" id="job_detail">
	<h2>仕事内容</h2>
	<p>
		　<strong>開発職</strong>は、ウェブサイト（ホームページ）や情報システムの開発をする仕事です。ウェブサイトのコーディングを行ったり、情報システムの設計やプログラミング、テストなどを行ったりします。
	</p>
	<p>
		　ウェブサイトの開発では、上がってきたデザインやコンテンツをもとに、HTMLやCSSでウェブサイトを組んでいきます。WordPressやShopifyなどのシステムを使うこともあります。<br>
		　同じデザインでも様々な実現方法があるので、それを慎重に選びながらページを構築していきます。また、開発者がコンテンツやデザインを考えることもあります。
	</p>
	<p>
		　コーディングを行ったらレビューを行い、書いたコードが正しいかどうかをチーム内で確認します。すべてのコードが組めたら、ウェブサイトをサーバー上に掲載してリリースします。
	</p>
	<img src="1.jpg" alt="" class="scene">
	<p>
		　システムの開発では、仕事はお客様から要件を正確に聞き取り、それを元に設計書を書くところから始まります。設計プロセスの中では、システムが動作するための細かい条件をお客様との間で確認しながら設計を進めますので、システム開発の知識のほかに、注意力やコミュニケーション力も求められます。<br>
	</p>
	<p>
		　設計ができたら、いよいよプログラムを組みます。当社で使っているプログラミング言語はPHPやJavaScriptなどが中心ですが、将来的にはJavaやPythonなどを扱う可能性もあります。また、データベース (SQL) やネットワーク、サーバーに関する知識も身につける必要があります。<br>
		　システム開発の場合も、プログラムを組んだらレビューをし、社内でプログラムを確認して、問題がないかどうかをチェックします。その後でテストを完了させたら、いよいよリリースします。
	<p>
		　当社の開発職は、その時の仕事の状況に応じて、ウェブサイトの開発を行ったりシステムの開発を行ったりします。ですから、両方の技術を身につけていただきます。<br>
		　新入社員には、まず小さなモジュールのプログラミングやテスト、データの移行などの簡単な仕事から始めます。徐々に技術を身につけた後で、システム全体のプログラミングや、システムの企画、要件定義、設計などといった上流の仕事を行うようになります。
	</p>
</section>
<section class="g">
	<h2>社員に聞いてみた</h2>
	<ul class="people">
		<li>
			<figure class="person" style="float: right;">
				<img alt="" src="kobayashi.jpg">
				<figcaption>
					小林 史起<br>
					制作部<br>
					2020年からアルバイト、2024年正社員<br>
				</figcaption>
			</figure>
		</li>
	</ul>
	<section class="g" id="mywork">
		<h3>担当している仕事</h3>
		<p>
			　主にホームページのコーディングや、後輩へのコーディングの指導、また同僚がコーディングしたコードのレビューなどを担当しています。<br>
			　また、PHPやMySQLを使って、システム開発の仕事をすることもあります。
		</p>
		<p>
			　他にも、ホームページ制作プロジェクトやシステム開発プロジェクトの管理を行ったり、開発メンバーのスケジュール管理を行ったりもしています。
		</p>
		<img src="firstview.jpg" alt="" class="scene">
	</section>
	<section class="g" id="motivation">
		<h3>この仕事を始めたきっかけ</h3>
		<p>
			　もともと、コンピューターがどのような仕組みで動いているか知りたいという思いはありました。<br>
			　そのような中、大学1年生のときに、ゼミで同学年の野口君（現社長）から声をかけてもらいました。当時、何をやりたいかについてあまり明確なイメージはなく、IT関係のことをやってみたいと答えた覚えがあります。
		</p>
		<p>
			　ITの仕事と言うと、一人で黙々と開発する仕事だというイメージがありました。そのような仕事でお金がもらえるのであれば良いと思っていましたが、実際に仕事を始めてみると、お客様やメンバーとの間で多くのコミュニケーションを取らなければならないことに気が付きました。今は人と話しながら仕事をするのが大半で、コミュニケーションの大切さを痛感しています。
		</p>
	</section>
	<section class="g" id="training">
		<h3>仕事を覚えるまで</h3>
		<p>
			　最初はお客様のホームページ制作の取材をするところから始めました。コーディングなどの技術については、最初はウェブなどで調べて勉強することが多かったのですが、そのやり方ではなかなか承認をもらえないということに気が付きました。そして、先に実現方法を社内で確認してから作業を始めるようになりました。その方が結果が出やすいんです。
		</p>
		<p>
			　作成したコードを経験者に何度も見てもらって、成果物の質を高めることができるようになってきたと思います。
		</p>
	</section>
	<section class="g" id="growth">
		<h3>これから目指していきたいこと</h3>
		<p>
			　具体的に伸ばしていきたい技術があるわけではありませんが、もっと収入が得られるような仕事を覚えていきたいと思います。特に、技術を高めたり、管理の仕事で成果を出せるようになっていきたいと思います。
		</p>
		<img src="2.jpg" alt="" class="scene">
	</section>
	<section class="g" id="off">
		<h3>休日の過ごし方</h3>
		<p>
			　痩せていることにコンプレックスを持っていたので、休日には体づくりのためにジムに行ったりしています。また、自炊をして食事にも気を付けています。
		</p>
		<p>
			　学生の頃はゲームにはまっていた時期もありましたが、最近はゲームをやることも少なくなりました。
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
			<a href="<?= $company_base ?>job_designer/" class="btn">次の職種</a>
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
