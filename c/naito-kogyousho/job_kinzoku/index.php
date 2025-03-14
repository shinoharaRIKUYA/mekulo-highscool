<?php
$base = '../../../../';
$highschool_base = '../../../';
$company_base = '../';

$cur_page = 'job_marketing';
$job_title = '金属加工';

include_once $company_base . '!data.php';

//========================================
// ページのメタデータ
$title = $job_title . ' - ' . $co['company_name'] . 'の新卒求人情報';
$title_with_site = $title . ' | めくろうワークス';

$keywords = '';//TBD

$description = '';//TBD

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
<body class="highschool">
<?php include $highschool_base . 'tmpl_header.php'; ?>
<div class="content_area">
	<main>
		<div class="fv_area">
			<img alt="" class="fv_image" src="firstview.jpg">
			<hgroup>
				<h1 class="catch">
					いろいろな機械を操り、巨大な材料を加工せよ!
				</h1>
				<p class="fv-tag"><?= $job_title ?></p>
			</hgroup>
			<a href="<?= $company_base ?>job_yousetsu/" class="btn">次の職種を見る</a>
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
				分厚い鉄を切り、穴を開けてフレームのパーツを作り上げる
			</h3>
			<p>
				　巨大な機械を支えるフレームも、実は丈夫な鉄骨や分厚い鉄板を一つ一つ組み合わせて作られています。こうした材料は、時には数センチもの厚さになることもあるので、切断したり穴を開けたりするだけで大変です。そのため、組み立てる前にまず工作機械を使って切断をしたり穴を開けたりして、部品の形を作ります。<br>
				　部品も重いので、クレーンを使って運んでいます。
			</p>
			<div class="images">
				<img src="../introduce1.jpg" alt="" class="scene">
				<img src="../job_yousetsu/yousetsu1.jpg" alt="" class="scene">
			</div>
			<h3>
				自分よりもデカい機械を操り、自分よりもデカいパーツを加工する
			</h3>
			<div class="images">
				<img src="../gomen.jpg" alt="" class="scene">
			</div>
			<p>
				　加工するものが大きいので、加工する機械も巨大です。高さは人間の数倍で、長さはバスくらいあります。初めて見る人はびっくりするかもしれません。
			</p>
			<div class="images">
				<img src="firstview.jpg" alt="" class="scene">
			</div>
			<h3>
				小さなところから徐々に挑戦していく
			</h3>
			<p>
				　入社後は、まずは穴を開ける場所に印をつけていくなど、簡単な作業から始めます。一つの加工をマスターしたら、レベルアップして先輩から教わりながら新しい加工に挑戦します。この流れを繰り返し、経験を積み重ねることで、できる仕事を増やしていきます。
			</p>
			<p>
				　当社で働いている多くの社員は、未経験からのスタートなので、最初は何もわからないのが当たり前です。こうやって教え合いながら経験を積んでいくことで、将来的には、図面を見ただけで加工の順序や方法を考えられるようになります。
			</p>
		</section>
		<section class="g">
			<h2>写真で雰囲気を知る</h2>
			<div class="NRGallery" data-width="640" data-height="480">
				<div class="image_area">
					<ul class="slides">
<?php
foreach ($scenery as $i) {
	if ($i['disp_order'] != NULL) {
		?><li><img src="<?= $image . $i['filename'] ?>" alt=""><?php
		if ($i['subtitle'] != NULL) {
			?><div class="caption"><?= h($i['subtitle']) ?></div><?php
		}
		?></li><?php
	}
}
?>
					</ul>
					<div class="button left_btn"><img src="<?= $base ?>left.png" alt=""></div>
					<div class="button right_btn"><img src="<?= $base ?>right.png" alt=""></div>
				</div>
			</div>
		</section>
		<section class="g" id="employee_introduction">
			<h2>社員紹介</h2>
			<div class="member-list Lightbox">
				<div class="thumbnails">
					<div class="thumbnail furuya">
						<img src="<?= $highschool_base ?>magnifying-glass.png" class="glass">
					</div>
					<p>2014年 (中途入社)</p>
					<p>浦木さん</p>
				</div>
			</div>
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
							<dd>溶接作業</dd>
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
							<dd>1名</dd>
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
								168,000～<br
								>（1か月160時間勤務の場合、残業代別）
							</dd>
						</div>
						<div>
							<dt>諸手当</dt>
							<dd>
								通勤手当 、皆勤手当
							</dd>
						</div>
						<div>
							<dt>昇給</dt>
							<dd>
								あり
							</dd>
						</div>
						<div>
							<dt>賞与</dt>
							<dd>
								あり
							</dd>
						</div>
						<div>
							<dt>試用期間</dt>
							<dd>3カ月（待遇の変更なし）</dd>
						</div>
						<div>
							<dt>定年制度</dt>
							<dd>
								あり（60歳）
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
<?php foreach ($toc['job']['submenu'] as $key => $prop) { 
				if(!($prop['name'] === $job_title)) { ?>
				<li>
					<a href="<?= $company_base . $key . '/' ?> ">
					<figure>
						<img src="<?= $company_base . $prop['fv_url'] ?>" alt="">
						<figcaption><?= $prop['name'] ?></figcaption>
					</figure>
					</a>
				</li>
<?php
				}
			}	
?>			
			</ul>
		</section>
	</main>
<?php include $highschool_base . 'tmpl_navi.php' ?>
</div>
<?php include $base . '../footer.php' ?>
<script src="<?= $highschool_base ?>animation.js"></script>
<script src="<?= $highschool_base ?>lightbox.js"></script>
</body>
