let tab1 = document.querySelector('.gallery_index .fs');
let tab2 = document.querySelector('.gallery_index .sc');
let tab3 = document.querySelector('.gallery_index .th');
let tab4 = document.querySelector('.gallery_index .fo');

let fs = document.querySelector('.gallery_window .fs');
let sc = document.querySelector('.gallery_window .sc');
let th = document.querySelector('.gallery_window .th');
let fo = document.querySelector('.gallery_window .fo');

function onClickTab1() {
    fs.classList.add("show");
    sc.classList.remove("show");
    th.classList.remove("show");
    fo.classList.remove("show");
}

function onClickTab2() {
    fs.classList.remove("show");
    sc.classList.add("show");
    th.classList.remove("show");
    fo.classList.remove("show");
}

function onClickTab3() {
    fs.classList.remove("show");
    sc.classList.remove("show");
    th.classList.add("show");
    fo.classList.remove("show");
}

function onClickTab4() {
    fs.classList.remove("show");
    sc.classList.remove("show");
    th.classList.remove("show");
    fo.classList.add("show");
}


tab1.addEventListener("click", onClickTab1);
tab2.addEventListener("click", onClickTab2);
tab3.addEventListener("click", onClickTab3);
tab4.addEventListener("click", onClickTab4);