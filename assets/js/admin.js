$(window).ready(function(){

// switch

function theme() {
  if (localStorage.getItem("theme") == "yellow") {
    $(`<link rel="stylesheet" href="../assets/css/theme.css"/>`).insertAfter(`link[href="../assets/css/style.css"]`);
    $(".load").attr("src", "../assets/svg/theme-load.svg");
    $(`meta[name="theme-color"]`).attr("content", "#ffce00");
    $(`link[rel="icon"]`).attr("href", "../assets/images/theme-icon.png");
  } else {
    $(`link[href="../assets/css/theme.css"]`).remove();
    $(`meta[name="theme-color"]`).attr("content", "#185a50");
    $(`link[rel="icon"]`).attr("href", "../assets/images/icon.png");
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

// copy-url

$("#copyURL").click(function(){
  this.select();
  this.setSelectionRange(0, 99999);

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
    navigator.clipboard.writeText(this.value);
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

// view

$("#view").click(function(){
  window.location.assign("./surveys.php");
});

// filter

$("#filter").click(function(){
  $("#filterBox").fadeIn();
});

// filter-box

$("#filterBox button").click(function(){
  $("#filterBox").fadeOut(300);
});

function ageCheck() {
  if (parseInt($("#fromAge").val()) > parseInt($("#toAge").val())) {
    $("#submitFilter").attr("disabled", "disabled");
  } else {
    $("#submitFilter").removeAttr("disabled");
  }
}

$("#fromAge").keyup(function(){
  ageCheck();
});

$("#toAge").keyup(function(){
  ageCheck();
});

});