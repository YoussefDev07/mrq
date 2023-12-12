const time = new Date();

// wait

$(document).ready(function(){
	$(".wait").fadeOut(1000);
});

// switch

function theme() {
  if (localStorage.getItem("theme") == "yellow") {
    $(`<link rel="stylesheet" href="https://mrq.net4.repl.co/theme.css"/>`).insertAfter(`link[href="../main.css"]`);
    $(".wait embed").attr("src", "../assets/theme.svg");
    $(`meta[name="theme-color"]`).attr("content", "#ffce00");
    $(`link[rel="icon"]`).attr("href", "https://mrq.net4.repl.co/assets/theme.png");
  } else {
    $(`link[href="https://mrq.net4.repl.co/theme.css"]`).remove();
    $(`meta[name="theme-color"]`).attr("content", "#185a50");
    $(`link[rel="icon"]`).attr("href", "https://mrq.net4.repl.co/assets/i.png");
  }
}

theme();

$(".switch").click(function(){
  if (!localStorage.getItem("theme")) {
    localStorage.setItem("theme", "yellow");
    theme();
  } else {
    localStorage.removeItem("theme");
    theme();
  }
});

// time

$(".time time").html(`${time.getHours().toString().padStart(2, "0")}:${time.getMinutes().toString().padStart(2, "0")}`);

setInterval(function(){
  const time = new Date();
  $(".time time").html(`${time.getHours().toString().padStart(2, "0")}:${time.getMinutes().toString().padStart(2, "0")}`);
}, 1000);

// footer

$("footer date").html(time.getFullYear());