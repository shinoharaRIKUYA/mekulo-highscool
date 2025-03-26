<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';
include_once $company_base . '!data.php';
$current_url = $_SERVER['REQUEST_URI']; //現在のページのURLを表示
$last_segment = basename($current_url);//現在のURLから末尾の職種URLの綴りを取得
$catch_copy = $occupation[$last_segment]['catch-copy'] ?? '職種が見つかりません';//値があるか確認
$name = $occupation[$last_segment]['name'] ?? '不明な職種';
$meta_keywords = $occupation[$last_segment]['meta_keyword'] ?? '';
$meta_desc = $occupation[$last_segment]['meta_desc'] ?? '';


// 現在のURLに一致しない職種を探す
$next_job = null; // 初期値
foreach ($occupation as $key => $job) {
    if ($key !== $last_segment) {
        $next_job = $job; // 最初に見つかった異なる職種をセット
        break; // ループを終了
    }
}


//========================================
// ページのメタデータ
$title = $name . ' - ' . $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';

$keywords = $meta_keywords;
$description = $meta_desc;

$canonical_url = 'https://works.mekulo.jp/highschool/' . $co['slug'] . '/' . $last_segment . '/';

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
		"name": "<?= $name ?>",
		"item": "https://works.mekulo.jp/highschool/<?= $co['slug'] ?>/<?= $last_segment ?>/"
	}]
}
</script>
</head>
<body class="newgrads highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
	<div class="fv_area">
    <img alt="" class="fv_image" src="firstview.jpg">
    <hgroup>
        <h1 class="catch"><?= $catch_copy ?></h1>
        <p class="fv-tag"><?= $name ?></p>
    </hgroup>
    <?php if (count($occupation) >= 2): // 配列数が2以上か確認し、無い場合は非表示にする ?>
        <a href="<?= $company_base . $next_job['url'] ?>/" class="btn">次の職種を見る</a>
    <?php endif; ?>
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
		<section class="g" id="job_detail">
			<h2>仕事内容</h2>
			<h3>
				製品ごとに機械を調整する
			</h3>
			<p>
				工場には、機械が【TBD】台あります。それぞれの機械を製品に合わせて設定し、ネジを緩めるなどの微調整を行う仕事です。<br>
				機械操作スタッフは、1人で約6台の機械を担当します。
			</p>
			<div class="images">
				<img src="contents01.jpg" alt="" class="scene">
			</div>
			<p>
				主にドライバーやスパナを使用し、「どうすれば不良を減らせるか？」を考えながら、細かい調整を繰り返します。<br>
				例えば、機械の速度を変更したり、包装に具材を入れる部分を広げたり狭めたりすることで、具材が包装に挟まる不良を減らすことができます。
			</p>
			<div class="images">
				<img src="contents02.jpg" alt="" class="scene">
				<img src="contents03.jpg" alt="" class="scene">
			</div>
			<p>
				別の製品に切り替えるときは、包装のロールを交換します。ロールにはそれぞれクセがあるので、交換後はそのクセを見極めて調整します。<br>
				また、機械に具材が挟まったり、具材の量が違ったりすると、機械からエラー音が鳴ることもあります。そんな時こそ、焦らず落ち着いて機械と向き合い、原因を突き止めて対処することが大切です。
			</p>
			<div class="images">
				<img src="contents04.jpg" alt="" class="scene">
			</div>
			<p>
				かやくの種類や具材によって、細かい調整や工夫が欠かせません。状況に応じた臨機応変な対応が求められる仕事です。 
			</p>
			<h3>
				じっくり経験を積む
			</h3>
			<p>
				入社後は、先輩と二人三脚で仕事を覚えていきます。特別な資格は必要ありませんが、作業の流れや機械の調整方法を一つずつ丁寧に習得していくことが大切です。
			</p>
			<div class="images">
				<img src="contents05.jpg" alt="" class="scene">
			</div>
			<p>
				最初は工場全体の流れを学び、徐々に「この状況ではこう調整する」といったコツを覚えていきます。一通りの仕事ができるようになるまでは、約2年。じっくりと経験を積みながら成長できます。<br>
				また、3か月ごとに機械の点検を行い、安全性や性能を確認しています。最近の機械は内部構造が見えにくいものが多いですが、当社では独自の機械を使っていて内部がよく見えるので、機械が好きな人には特に面白い仕事だと思います。
			</p>
			<div class="images">
				<img src="contents06.jpg" alt="" class="scene">
			</div>
		</section>
		<section class="g">
			<h2>写真で雰囲気を知る</h2>
			<div class="NRGallery" data-width="640" data-height="480">
				<div class="image_area">
					<ul class="slides">
					<li>
				<img src="gallery01.jpg" alt="">
			</li>
        <li>
				<img src="gallery02.jpg" alt="">
			</li>
        <li>
				<img src="gallery03.jpg" alt="">
			</li>
			<li>
				<img src="gallery04.jpg" alt="">
			</li>
			<li>
				<img src="gallery05.jpg" alt="">
			</li>
			<li>
				<img src="gallery06.jpg" alt="">
			</li>
			<li>
				<img src="gallery07.jpg" alt="">
			</li>
			<li>
				<img src="gallery08.jpg" alt="">
			</li>
			<li>
				<img src="gallery09.jpg" alt="">
			</li>
				</ul>
				<div class="button left_btn">&lt;</div>
				<div class="button right_btn">&gt;</div>
				</div>
			</div>
		</section>
		<section class="g" id="employee_introduction">
			<h2>社員紹介</h2>
			<ul class="Lightbox">
		<li class="thumbnails">
			<div class="thumbnail">
				<img src="kikuchi.jpg" alt="">
				<hgroup>
					<h3>菊地さん</h3>
					<p>
						もともと機械オペレーターの仕事に興味があり、ハローワークで見つけたのが入社のきっかけです。<br>
						機械の不具合に対しては、ある程度パターンで覚えることができますが、そのパターンが通用しないことも多いです。そんな時は、よく先輩に助けてもらっています。<br>
						一言で「かやく」と言ってもいろいろな種類があり、「こんなのも具材になるんだ！」というのを見るのが面白いです。最近では、おまけのイチゴが入っているものも作りました。<br>
						春から秋にかけてはキャンプをするのが好きです。他の季節はドライブを楽しんでいます。
					</p>
				</hgroup>
			</div>
			<p>2015年中途入社<br>菊地さん</p>
		</li>
	</ul>
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
							<dd>機械操作スタッフ</dd>
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
							<dd>不問</dd>
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
								171,000～<br
								>（1か月160時間勤務の場合、残業代別）
							</dd>
						</div>
						<div>
							<dt>諸手当</dt>
							<dd>通勤手当（月額15,000円まで）</dd>
						</div>
						<div>
							<dt>昇給</dt>
							<dd>年1回</dd>
						</div>
						<div>
							<dt>賞与</dt>
							<dd>年1回</dd>
						</div>
						<div>
							<dt>試用期間</dt>
							<dd>3カ月（待遇の変更なし）</dd>
						</div>
						<div>
							<dt>定年制度</dt>
							<dd>あり（60歳、本人と相談の上65歳まで）</dd>
						</div>
					</dl>
					<h3>勤務に関する情報</h3>
					<dl>
						<div>
							<dt>本社</dt>
							<dd>
								〒386-11-1<br>
								長野県上田市下之条42
							</dd>
						</div>
						<div>
							<dt>勤務時間</dt>
							<dd>TBD</dd>
						</div>
						<div>
							<dt>休憩時間</dt>
							<dd>TBD分</dd>
						</div>
						<div>
							<dt>休日・休暇</dt>
							<dd>TBD週休2日制、年間休日108日（2025年度計画）</dd>
						</div>
						<div>
							<dt>適用保険</dt>
							<dd>TBD厚生年金保険、健康保険、介護保険、雇用保険、労災保険</dd>
						</div>
						<div>
							<dt>時間外勤務の状況</dt>
							<dd>月平均8時間</dd>
						</div>
						<div>
							<dt>就業場所における受動喫煙防止の取組</dt>
							<dd>TBD建物内喫煙不可</dd>
						</div>
					</dl>
					<h3>募集・採用に関する情報</h3>
					<dl>
						<div>
							<dt>前年度の採用実績</dt>
							<dd>TBD名</dd>
						</div>
						<div>
							<dt>直近3年間の新卒離職者数</dt>
							<dd>TBD名</dd>
						</div>
						<div>
							<dt>採用者の出身学校実績</dt>
							<dd>TBD</dd>
						</div>
					</dl>
					<h3>雇用管理状況（令和６年度実績）</h3>
					<dl>
						<div>
							<dt>前年度の月平均所定外労働時間の実績</dt>
							<dd>8時間</dd>
						</div>
						<div>
							<dt>前年度の有給休暇の平均取得日数</dt>
							<dd>7日</dd>
						</div>
						<div>
							<dt>前年度の育児休業取得者数</dt>
							<dd>0名</dd>
						</div>
						<div>
							<dt>役員/管理職の女性比率</dt>
							<dd>役員 TBD%、管理職 TBD%</dd>
						</div>
						<div>
							<dt>平均勤続年数</dt>
							<dd>16年<br>
							※創業以降の実績</dd>
						</div>
					</dl>
				</div>
				<div class="content">
					<h3>キャリア形成支援制度</h3>
					<dl>
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
        <?php foreach ($occupation as $key => $prop): ?>
            <?php if ($key !== $last_segment): // 現在のURLと異なる職種のみ表示 ?>
                <li>
                    <a href="<?= $company_base . $prop['url'] ?>">
                        <figure>
                            <img src="<?= $company_base . $prop['fv_url'] ?>" alt="">
                            <figcaption><?= $prop['name'] ?></figcaption>
                        </figure>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</section>			
			</ul>
		</section>
	</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<?php include $base . '../footer.php' ?>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
<script src="<?= $highschool_base ?>NRGallery.js"></script>
</body>
