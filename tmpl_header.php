<header>
	<div class="header_container">
		<div class="title_area">
			<div class="company_name">
				<a href="<?= $company_base ?>">
					<img alt="<?= $co['company_name'] ?>" src="<?= $company_base . $co['logo_filename'] ?>" class="logo">
				</a>
			</div>
			<a href="<?= $highschool_base ?>" class="btn_return">
				<div class="btn_wrapp">
					<img alt="めくろうワークス" src="<?= $base ?>header_logo.png" class="logo">
					<span>
						<img src="<?= $highschool_base ?>theme_logo.png" alt="高卒向け" class="theme_logo">
						TOPページへ
					</span>
				</div>
				<div class="btn_design"><img src="<?= $highschool_base ?>arrow.svg"></div>
			</a>
		</div>
		<div class="title_text">
			<span class="word">
				<img src="<?= $highschool_base ?>theme_logo.png" alt="高卒向け" class="theme_logo">
				<?= $co['company_name'] ?></span>
		</div>
</header>
