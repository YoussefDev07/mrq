const time = new Date();

// loading

$(document).ready(function(){
  $("#loading").fadeOut(1000);
});

$(window).ready(function(){

// switch

function theme() {
  if (localStorage.getItem("theme") == "yellow") {
    $(`<link rel="stylesheet" href="./assets/css/theme.css"/>`).insertAfter(`link[href="./assets/css/style.css"]`);
    $(".load").attr("src", "./assets/svg/theme-load.svg");
    $(`meta[name="theme-color"]`).attr("content", "#ffce00");
    $(`link[rel="icon"]`).attr("href", "./assets/images/theme-icon.png");
  } else {
    $(`link[href="./assets/css/theme.css"]`).remove();
    $(`meta[name="theme-color"]`).attr("content", "#185a50");
    $(`link[rel="icon"]`).attr("href", "./assets/images/icon.png");
  }
}

theme();

$(".switch").click(function(){
  if (window.location.href.includes("survey") || window.location.href.includes("admin")) return;
  if (!localStorage.getItem("theme")) {
    localStorage.setItem("theme", "yellow");
    theme();
  } else {
    localStorage.removeItem("theme");
    theme();
  }
});

// time

$("#time").html(`${time.getHours().toString().padStart(2, "0")}:${time.getMinutes().toString().padStart(2, "0")}`);

setInterval(function(){
  const time = new Date();
  $("#time").html(`${time.getHours().toString().padStart(2, "0")}:${time.getMinutes().toString().padStart(2, "0")}`);
}, 250);

// slidebar

$(".slidebar > button").click(function(){
  window.open("./select.html", "_self");
});

if (window.location.href.includes("admin/surveys.php")) {
  $(".slidebar").css({
    "height": "auto",
    "background-attachment": "fixed"
  });
}

// country

if ($(window).width() <= 1024) {
  $(".country button#ger").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/images/de.gif")'); });
  $(".country button#ger").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/images/SlideBar_Media.gif")'); });

  $(".country button#ksa").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/images/sa.gif")'); });
  $(".country button#ksa").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/images/SlideBar_Media.gif")'); });
  
  $(".country button#uae").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/images/em.gif")'); });
  $(".country button#uae").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/images/SlideBar_Media.gif")'); });

  $(".country button#omn").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/images/om.gif")'); });
  $(".country button#omn").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/images/SlideBar_Media.gif")'); });
} else {
  $(".country button#ger").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/images/GER.gif")'); });
  $(".country button#ger").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/images/SlideBar.gif")'); });

  $(".country button#ksa").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/images/KSA.gif")'); });
  $(".country button#ksa").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/images/SlideBar.gif")'); });
  
  $(".country button#uae").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/images/UAE.gif")'); });
  $(".country button#uae").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/images/SlideBar.gif")'); });

  $(".country button#omn").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/images/OMN.gif")'); });
  $(".country button#omn").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/images/SlideBar.gif")'); });
}

$("#ger").click(function(){
  $(".country").hide("1000");
  $(".ger").css("display", "flex");
});

$("#ksa").click(function(){
  $(".country").hide("1000");
  $(".ksa").css("display", "flex");
});

$("#uae").click(function(){
  window.open("./survey/uae/uae.php", "_self");
});

$("#omn").click(function(){
  window.open("./survey/omn/om.php", "_self");
});

// option

$("#in-gr").click(function(){
  window.open("./survey/ger/in.php", "_self");
});
$("#out-gr").click(function(){
  window.open("./survey/ger/out.php", "_self");
});

$("#in-sa").click(function(){
  window.open("./survey/ksa/in.php", "_self");
});
$("#out-sa").click(function(){
  window.open("./survey/ksa/out.php", "_self");
});

// surveys

$(".survey button").click(function(){
  window.location.assign("./hooks/more.php?msg=" + this.id);
});

// footer

$("footer date").html(time.getFullYear());

});