$(window).ready(function(){

// top-buttons

function copyTopURL() {
  let message = document.getElementById("message");
  message.select();
  message.setSelectionRange(0, 99999);

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
    navigator.clipboard.writeText(message.value);
  }
  catch (e) {
    toastr.error(e, "خطأ في نسخ الرابط", {timeOut: 2500});
    setTimeout(function(){
      $(".toast-success").hide();
    }, 0);
  }
  finally {
    toastr.success("", "!تم نسخ الرابط بنجاح", {timeOut: 1800});
  }
}

$("#topCopy").click(copyTopURL);
$("#message").click(copyTopURL);

$("#topBack").click(function(){
  history.back();
});

});