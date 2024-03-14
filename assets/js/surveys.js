// wait

$(document).ready(function(){
  $(".wait").fadeOut(800);
});

$(window).ready(function(){

// switch

function theme() {
  if (localStorage.getItem("theme") == "yellow") {
    $(`<link rel="stylesheet" href="../../assets/css/theme.css"/>`).insertAfter(`link[href="../../assets/css/style.css"]`);
    $(".wait embed").attr("src", "../../assets/svg/theme-wait.svg");
    $(`meta[name="theme-color"]`).attr("content", "#ffce00");
    $(`link[rel="icon"]`).attr("href", "../../assets/images/theme-icon.png");
  } else {
    $(`link[href="../../assets/css/theme.css"]`).remove();
    $(`meta[name="theme-color"]`).attr("content", "#185a50");
    $(`link[rel="icon"]`).attr("href", "../../assets/images/icon.png");
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

// reset

$(".reset").click(function(){
  $(".remove").fadeIn();
});

// remove

function rm() {
  $(".remove").fadeOut();
}

$(".remove button").click(function(){
  rm();
});

$(".remove input").click(function(){
  rm();
});

});