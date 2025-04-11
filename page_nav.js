// メニューの動作
const e_header = document.querySelector(".toc");
const e_nav = document.querySelector(".click");
e_header.addEventListener("click", (event) => {
  e_header.classList.toggle("active");
});