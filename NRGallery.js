// ギャラリーの作成
function NRGallery(element) {
	this.element = element;
	this.imageAreaElement = element.querySelector("div.image_area");
	this.currentPos = 0;

	// 初期化: サムネイルの一覧を作成
	this.items = element.querySelectorAll("ul.slides li");
	this.thumbnailContainer = document.createElement("ul");
	this.thumbnailContainer.classList.add("thumbnails");
	element.append(this.thumbnailContainer);
	this.thumbnails = [];
	for (let i=0; i<this.items.length; i++) {
		let img = this.items[i].querySelector("img");
		// サムネイルを作成
		const li = document.createElement("li");
		li.append(img.cloneNode());
		li.thumbnailOf = this.items[i];

		// クリック時のイベントハンドラー
		li.onclick = function() {
			let i = this.thumbnailContainer.querySelector("li.selected");
			if (i != undefined) {
				i.classList.remove("selected");
			}
			li.classList.add("selected");
			for (let i = 0; i < this.items.length; i++) {
				if (this.items[i] == li.thumbnailOf) {
					this.items[i].classList.add("show");
					this.currentPos = i;
				} else {
					this.items[i].classList.remove("show");
				}
			}
		}.bind(this);
		this.thumbnailContainer.append(li);
		this.thumbnails[i] = li;
		if (i == 0) {
			li.onclick();
		}
	}

	// 移動ボタン
	this.moveLeft = function() {
		let i = this.currentPos - 1;
		if (i < 0) {
			i += this.items.length
		}
		this.thumbnails[i].onclick();
	}.bind(this);
	let left_buttons = this.element.querySelectorAll(".left_btn");
	for (let i=0; i<left_buttons.length; i++) {
		left_buttons[i].addEventListener("click", this.moveLeft);
	}
	this.moveRight = function() {
		let i = this.currentPos + 1;
		if (i >= this.items.length) {
			i -= this.items.length
		}
		this.thumbnails[i].onclick();
	}.bind(this);
	let right_buttons = this.element.querySelectorAll(".right_btn");
	for (let i=0; i<right_buttons.length; i++) {
		right_buttons[i].addEventListener("click", this.moveRight);
	}
	

	// 表示エリアの初期サイズを保存
	this.slideWidth = this.imageAreaElement.clientWidth;
	this.slideHeight = this.imageAreaElement.clientHeight;

	// 画面の大きさの再計算
	this.onresize = function() {
		const width = this.element.clientWidth;
		// スライドの大きさを調整する
		this.imageAreaElement.style.width = width + "px";
		this.imageAreaElement.style.height = (width * this.slideHeight / this.slideWidth) + "px";
		// サムネイルの大きさを調整する
		let tw = 64;
		let tc = Math.trunc(width / tw);
		if (tc < this.items.length) {
			tw = Math.trunc(width / tc);
		}
		for (let i=0; i<this.thumbnails.length; i++) {
			this.thumbnails[i].style.width = tw + "px";
			this.thumbnails[i].style.height = tw + "px";
		}
	}.bind(this);
	window.addEventListener("resize", this.onresize);
	this.onresize();
}

NRGallery.theInstances = [];

// ギャラリーの初期化
NRGallery.init = function() {
	// すべてのギャラリーを取得
	const instances = document.getElementsByClassName("NRGallery");
	for (let i=0; i<instances.length; i++) {
		NRGallery.theInstances.push(new NRGallery(instances[i]));
	}
}
window.addEventListener("load", NRGallery.init);
