<header>
	<div class="header_container">
		<div class="title_area">
			<a href="<?= $company_base ?>" class="company_name">
				<img alt="NEXT RESERVATION" src="<?= $company_base ?>nr_logo.png" class="logo">
				新卒求人特集記事
			</a>
			<a href="<?= $highschool_base ?>" class="btn_return">
				<img alt="めくろうワークス" src="<?= $base ?>header_logo.png" class="logo">
				新卒求人特集へ戻る
			</a>
		</div>
		<ul class="company_nav">
			<li class="<?= $cur_page == 'top' ? 'selected' : '' ?>">
				<a href="<?= $company_base ?>">
					企業TOP
				</a>
			</li><!--
			--><li class="<?= $cur_page == 'carrier' ? 'selected' : '' ?>">
				<a href="<?= $company_base ?>carrier/">
					キャリアモデル
				</a>
			</li><!--
			--><li class="<?= $cur_page == 'jobinfo' ? 'selected' : '' ?>">
				<a href="<?= $company_base ?>jobinfo/">
					募集要項
				</a>
				</li><!--
			--><li class="<?= $cur_page == 'orientation' ? 'selected' : '' ?>">
				<a href="<?= $company_base ?>orientation/">
					説明会情報
				</a>
			</li><!--
			--><li>
				<a href="<?= $company_base ?>orientation/#entry">
					エントリー
				</a>
			</li>
		</ul>
	</div>
</header>
