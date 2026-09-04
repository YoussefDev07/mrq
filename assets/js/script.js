const time = new Date();

// loading

$(document).ready(function(){
  $("#loading").fadeOut(1000);
});

$(window).ready(function(){

// switch

function theme() {
  if (localStorage.getItem("theme") == "old") {
    $(`<link rel="stylesheet" href="./assets/css/theme.css"/>`).insertAfter(`link[href="./assets/css/style.css"]`);
    $(".load").attr("src", "./assets/svg/theme-load.svg");
    $(`meta[name="theme-color"]`).attr("content", "#185a50");
    $(`link[rel="icon"]`).attr("href", "./assets/images/theme-icon.png");
  } else {
    $(`link[href="./assets/css/theme.css"]`).remove();
    $(`meta[name="theme-color"]`).attr("content", "#422464");
    $(`link[rel="icon"]`).attr("href", "./assets/images/icon.png");
  }
}

theme();

$(".switch").click(function(){
  if (window.location.href.includes("survey") || window.location.href.includes("admin")) return;
  if (!localStorage.getItem("theme")) {
    localStorage.setItem("theme", "old");
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
  $(".country button#ksa").mouseenter(function(){ $("main").css("background-image", 'url("./assets/images/sa.gif")'); });
  $(".country button#ksa").mouseleave(function(){ $("main").css("background-image", 'url("./assets/images/SlideBar_Media.gif")'); });
} else {
  $(".country button#ksa").mouseenter(function(){ $("main").css("background-image", 'url("./assets/images/KSA.gif")'); });
  $(".country button#ksa").mouseleave(function(){ $("main").css("background-image", 'url("./assets/images/SlideBar.gif")'); });
}

$("#ksa").click(function(){
  $(".country").hide("1000");
  $(".ksa").css("display", "flex");
});

// option

$("#in-sa").click(function(){
  window.open("./survey/ksa/in.php", "_self");
});
$("#out-sa").click(function(){
  window.open("./survey/ksa/out.php", "_self");
});

// resend

if (localStorage.getItem("type")) {
  $(".resend").show();

  var mrqMessage = localStorage.getItem("mrq");
  var mrqMSG = localStorage.getItem("msg");
  let numberSendTo = localStorage.getItem("num");
  $("#mrqMessage").text(mrqMessage);
}

$("#copySurvey").click(function(){
  const mrqMessage = $("#mrqMessage");
  mrqMessage[0].select();
  mrqMessage[0].setSelectionRange(0, 99999);

  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "100",
    "hideDuration": "250",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
  
  try {
    navigator.clipboard.writeText(mrqMessage[0].value);
  }
  catch (e) {
    toastr.error(e, "خطأ في نسخ الرسالة", {timeOut: 2500});
    setTimeout(function(){
      $(".toast-success").hide();
    }, 0);
  }
  finally {
    toastr.success("", "!تم نسخ الرسالة بنجاح", {timeOut: 1800});
  }
});

$("#resendSurvey").click(function(){
  const expression = /(iPhone|iPod|iPad)/i;
	if (expression.test(navigator.platform)) {
	  window.open("whatsapp://send?text=" + mrqMSG, "_self");
	} else {
	  window.open("https://api.whatsapp.com/send/?phone=" + numberSendTo + "&text=" + mrqMSG, "_self");
	}
});

// surveys

$(".survey button").click(function(){
  window.location.assign("./hooks/more.php?msg=" + this.id);
});

// footer

$("footer time").html(time.getFullYear());

});