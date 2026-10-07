// loading

$(document).ready(function(){
  $("#loading").fadeOut(1000);
});

$(window).ready(function(){

// switch

function theme() {
  if (localStorage.getItem("theme") == "old") {
    $(`<link rel="stylesheet" href="../assets/css/theme.css"/>`).insertAfter(`link[href="../assets/css/style.css"]`);
    $(".load").attr("src", "../assets/svg/theme-load.svg");
    $(`meta[name="theme-color"]`).attr("content", "#185a50");
    $(`link[rel="icon"]`).attr("href", "../assets/images/theme-icon.png");
    $(".wait embed").attr("src", "../assets/svg/theme-wait.svg");
  } else {
    $(`link[href="../assets/css/theme.css"]`).remove();
    $(`meta[name="theme-color"]`).attr("content", "#422464");
    $(`link[rel="icon"]`).attr("href", "../assets/images/icon.png");
  }
}

theme();

$(".switch").click(function(){
  if (!localStorage.getItem("theme")) {
    localStorage.setItem("theme", "old");
    theme();
  } else {
    localStorage.removeItem("theme");
    theme();
  }
});

// footer

$("footer time").html(new Date().getFullYear());

});