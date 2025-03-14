"use strict";

// ページ内のスライドビュー一覧のライトボックス処理
let theLightbox;
let theBackground;
let theLightboxContainer;

function onClickForLightbox(e) {
	
	// クリックされた要素から子要素を移植
	for (let i=0; i<this.children.length; i++) {
		let el = this.children[i].cloneNode(true);
		theLightboxContainer.append(el);
	}
	
	// ライトボックスを表示
	theLightbox.classList.add("active");
	theBackground.classList.add("active");
}

function closeLightbox(e) {
	// ライトボックスを非表示
	theLightbox.classList.remove("active");
	theBackground.classList.remove("active");
	
	// すべての子要素を削除
	while (theLightboxContainer.firstChild) {
		theLightboxContainer.removeChild(theLightboxContainer.firstChild);
	}
}

// スライドビューの初期化
function initLightbox(e) {
	// ライトボックスと背景を生成
	theLightbox = document.createElement("div");
	theLightbox.id = "theLightbox";
	const closeButton = document.createElement("button");
	closeButton.setAttribute("type", "button");
	closeButton.innerText = "×";
	theLightbox.append(closeButton);
	theLightboxContainer = document.createElement("div");
	theLightboxContainer.id = "theLightboxContainer";
	theLightbox.append(theLightboxContainer);
	
	theBackground = document.createElement("div");
	theBackground.id = "theLightboxBackground";
	
	theBackground.append(theLightbox);
	document.body.append(theBackground);

	theLightbox.addEventListener("click", closeLightbox);
	theBackground.addEventListener("click", closeLightbox);
	
	// すべての子要素のクリックイベントを検出
	const items = 	document.querySelectorAll(".Lightbox .thumbnails");
	for (let i=0; i<items.length; i++) {
		items[i].addEventListener("click", onClickForLightbox);
	}
}
window.addEventListener("load", initLightbox);