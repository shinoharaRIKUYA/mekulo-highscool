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
				製造の流れ
			</h3>
			<p>
				製造の仕事は、具材投入・検査・梱包の３つの工程に分かれています。
			</p>
			<p>
				・具材投入<br>
				チャーシューやネギなどの具材が、決められた量になるように入れていきます。<br>
				機械が自動で流してくれますが、具材によってはバラつきが出ることも。そのため、人の手で調整しながら均等に入るようにしています。
			</p>
			<div class="images">
				<img src="contents01.jpg" alt="" class="scene">
				<img src="contents02.jpg" alt="" class="scene">
			</div>
			<p>
				・検査<br>
				機械から出てきた『かやく』を見て、具材が挟まっていないか、シールに以上がないかなどを検査します。
			</p>
			<div class="images">
				<img src="contents03.jpg" alt="" class="scene">
				<img src="contents04.jpg" alt="" class="scene">
			</div>
			<p>
				1分間に約80個のかやくが流れてくるので、素早く正確な作業が求められます。
			</p>
			<div class="images">
				<img src="contents05.jpg" alt="" class="scene">
				<img src="contents06.jpg" alt="" class="scene">
			</div>
			<p>
				この写真を見てください！具材が挟まっているのがわかりますか？こうした異常を見つける、集中力が必要な工程です。
			</p>
			<p>
				・梱包<br>
				検査を通過したかやくは、自動で段ボールに流れていきます。段ボールがいっぱいになったら重さをはかって確認し、梱包します。
				かやくは1つ1つが軽いため、段ボール1箱でも約10kgほどです。
			</p>
			<div class="images">
				<img src="contents07.jpg" alt="" class="scene">
				<img src="contents08.jpg" alt="" class="scene">
			</div>
			<p>
				こうして、安全で美味しいカップ麺のかやくが、皆さんのもとへ届けられています！
			</p>
			<h3>
				まずは研修から
			</h3>
			<p>
				入社後は、まず1か月間の研修を受けます。研修では、製造の各工程について学び、実際に作業を体験しながら流れを覚えていきます。
			</p>
			<div class="images">
				<img src="contents09.jpg" alt="" class="scene">
				<img src="contents10.jpg" alt="" class="scene">
			</div>
			<p>
				研修が終わると、一人ひとりの適性に合わせて担当の工程が決まります。人によって向き不向きがあるので、無理なく自分に合った工程を担当できるようにしています。<br>
				特に検査工程は難易度が高いですが、約4か月の経験を積むことで、一人で対応できるようになります。
			</p>
			<div class="images">
				<img src="contents11.jpg" alt="" class="scene">
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
				<img src="gallery09.jpg" alt="">
			</li>
			<li>
				<img src="gallery10.jpg" alt="">
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
				<img src="tuchiya.jpg" alt="">
				<hgroup>
					<h3>土屋さん</h3>
					<p>
						以前はアパレル関係の仕事をしていましたが、ハローワークで「カップ麺のかやくの検査」という仕事があると知って興味を持ちました。<br>
						ラインに流れてくるかやくを一つ一つ検査する仕事をしています。具材が多いかやくや、袋が繋がった状態で流れてくるかやくは特に難しいですが、4か月くらいで一通りできるようになりました。世に出る前のかやくを知れるのは、なかなか面白いです。<br>
						休日は友達と美味しいものを食べに行き、しっかりリフレッシュしています。
					</p>
				</hgroup>
			</div>
			<p>2014年中途入社<br>土屋さん</p>
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
							<dd>具材投入・かやく検査スタッフ</dd>
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
							<dd>5名</dd>
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
								162,000円～
							</dd>
						</div>
						<div>
							<dt>諸手当</dt>
							<dd>通勤手当、残業手当</dd>
						</div>
						<div>
							<dt>昇給</dt>
							<dd>年1回</dd>
						</div>
						<div>
							<dt>賞与</dt>
							<dd>年2回</dd>
						</div>
						<div>
							<dt>試用期間</dt>
							<dd>3カ月（待遇の変更なし）</dd>
						</div>
						<div>
							<dt>定年制度</dt>
							<dd>あり（60歳）</dd>
						</div>
					</dl>
					<h3>勤務に関する情報</h3>
					<dl>
						<div>
							<dt>本社</dt>
							<dd>
								〒386-1101<br>
								長野県上田市下之条42
							</dd>
						</div>
						<div>
							<dt>勤務時間</dt>
							<dd>8:15～17:00</dd>
						</div>
						<div>
							<dt>休憩時間</dt>
							<dd>75分</dd>
						</div>
						<div>
							<dt>休日・休暇</dt>
							<dd>日・祝日・その他、年間休日120日（2025年度計画）</dd>
						</div>
						<div>
							<dt>適用保険</dt>
							<dd>厚生年金保険、健康保険、雇用保険、労災保険</dd>
						</div>
						<div>
							<dt>時間外勤務の状況</dt>
							<dd>月平均8時間</dd>
						</div>
						<div>
							<dt>就業場所における受動喫煙防止の取組</dt>
							<dd>建物内喫煙不可</dd>
						</div>
					</dl>
					<h3>募集・採用に関する情報</h3>
					<dl>
						<div>
							<dt>前年度の採用実績</dt>
							<dd>0名</dd>
						</div>
						<div>
							<dt>直近3年間の新卒離職者数</dt>
							<dd>1名</dd>
						</div>
						<div>
							<dt>採用者の出身学校実績</dt>
							<dd></dd>
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
							<dd>役員 33%、管理職 0%</dd>
						</div>
						<div>
							<dt>平均勤続年数</dt>
							<dd>16年</dd>
						</div>
					</dl>
				</div>
				<div class="content">
					<h3>キャリア形成支援制度</h3>
					<dl>
						<div>
							<dt>研修制度</dt>
							<dd>〇1か月間の社内研修があります。</dd>
						</div>
						<div>
							<dt>自己啓発支援制度</dt>
							<dd>なし</dd>
		</div>
		<div>
			<dt>メンター制度</dt>
			<dd>なし</dd>
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
