const time = new Date();

// loading

$("document").ready(function(){
  $("#loading").fadeOut(1000);
});

// switch

function theme() {
  if (localStorage.getItem("theme") == "yellow") {
    $(`<link rel="stylesheet" href="./theme.css"/>`).insertAfter(`link[href="./style.css"]`);
    $(".load").attr("src", "./media/theme/load.svg");
    $(`meta[name="theme-color"]`).attr("content", "#ffce00");
    $(`link[rel="icon"]`).attr("href", "./assets/theme.png");
  } else {
    $(`link[href="./theme.css"]`).remove();
    $(`meta[name="theme-color"]`).attr("content", "#185a50");
    $(`link[rel="icon"]`).attr("href", "./assets/i.png");
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

// slidebar

$(".slidebar > button").click(function(){
  window.open("./select.html", "_self");
});

// country

if ($(window).width() <= 999) {
  $(".country button#ger").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/gr.gif")'); });
  $(".country button#ger").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/SlideBar_Media.gif")'); });

  $(".country button#ksa").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/sa.gif")'); });
  $(".country button#ksa").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/SlideBar_Media.gif")'); });
  
  $(".country button#uae").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/em.gif")'); });
  $(".country button#uae").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/SlideBar_Media.gif")'); });

  $(".country button#omn").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/om.gif")'); });
  $(".country button#omn").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/SlideBar_Media.gif")'); });
} else {
  $(".country button#ger").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/GER.gif")'); });
  $(".country button#ger").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/SlideBar.gif")'); });

  $(".country button#ksa").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/KSA.gif")'); });
  $(".country button#ksa").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/SlideBar.gif")'); });
  
  $(".country button#uae").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/UAE.gif")'); });
  $(".country button#uae").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/SlideBar.gif")'); });

  $(".country button#omn").mouseenter(function(){ $(".slidebar").css("background-image", 'url("./assets/OMN.gif")'); });
  $(".country button#omn").mouseleave(function(){ $(".slidebar").css("background-image", 'url("./assets/SlideBar.gif")'); });
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
  window.open("./form/uae/are.php", "_self");
});

$("#omn").click(function(){
  window.open("./form/omn/om.php", "_self");
});

// option

$("#in-gr").click(function(){
  window.open("./form/ger/in.php", "_self");
});
$("#out-gr").click(function(){
  window.open("./form/ger/out.php", "_self");
});

$("#in-sa").click(function(){
  window.open("./form/ksa/in.php", "_self");
});
$("#out-sa").click(function(){
  window.open("./form/ksa/out.php", "_self");
});

// footer

$("footer date").html(time.getFullYear());