<div class="company_nav">
	<img src="<?= $company_base ?><?= $co['logo_filename'] ?>" alt="<?= $co['company_name'] ?>" class="company_logo">
	<ul>
<?php
foreach ($toc as $key => $prop) {
?>
<li class="<?= ($cur_page == $key ? 'selected ' : '') . (isset($prop['submenu']) ? 'submenu ' : '') ?>">
	<a href="<?= $company_base . ( isset($prop['url']) ? $prop['url'] : ($key . '/')) ?>">
		<img alt="" class="icon" src="<?= $highschool_base . $prop['icon'] ?>">
		<?= $prop['name'] ?>
	</a>
<?php
	if (isset($prop['submenu'])) {
		?><ul class="submenu"><?php
		foreach ($prop['submenu'] as $subkey => $subprop) {
?>
<li class="<?= $cur_page == $subkey ? 'selected' : '' ?>">
	<a href="<?= $company_base . ( isset($subprop['url']) ? $subprop['url'] : ($subkey . '/')) ?>">
		<?= $subprop['name'] ?>
	</a>
</li>
<?php
		}
		?></ul><?php
	}
	?></li><?php
}
?>
	</ul>
	<a href="<?= $company_base ?>apply/#entry" class="btn_entry">
		<img src="<?= $highschool_base ?>flag.png" class="flag">
		<span>応募前見学情報を見る</span>
		<img src="<?= $highschool_base ?>arrow.svg">
	</a>
</div>
<a href="#" class="btn_top"><img src="<?= $highschool_base ?>up.png" alt="↑" width="32" height="16"><br>ページ<br>Top</a>
<script>
// サブメニューの作成
function initSubMenu() {
	let litems = document.querySelectorAll("li.submenu");
	for (let litem of litems) {
		const anchor = litem.querySelector(".submenu > a");
		const submenu = litem.querySelector("ul.submenu");
		anchor.addEventListener("click", (event) => {
			anchor.focus();
			event.preventDefault();
			submenu.setAttribute("open", "");
		});
		anchor.addEventListener("blur", (event) => {
			submenu.removeAttribute("open");
		});
	}
}
window.addEventListener("load", initSubMenu);
</script>