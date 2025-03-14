//各職種ページの募集要項とキャリア形成のタブ切り替え用のJavascript

let tabs = document.querySelectorAll(".tabs button");
let contents = document.querySelectorAll(".requirement .content");

function switching(e) {
  for (let i = 0; i < contents.length; i++) {
    if (e === i) {
      tabs [i].style.backgroundColor = "#00509B";
      tabs [i].style.color = "white";
      contents[i].style.display = "block";
    }
    else {
      tabs [i].style.backgroundColor = "#D4E1FF";
      tabs [i].style.color = "black";
      contents[i].style.display = "none";
    }
  }
}

for (let i = 0; i < tabs.length; i++) {
  tabs[i].onclick = function () {
    switching(i);
  };
}

switching(0);
