$(window).ready(function(){

// filter

$("#filter, #filterToolbar").click(function(){
  $("#filterBox").fadeIn(250);
});

$("#closeFilter").click(function(){
  $("#filterBox").fadeOut(250);
});

$("#resetFilter").click(function(){
  window.location.assign(window.location.pathname);
});

// message

function openMessage(message, title) {
  $("#messageTitle").text(title);
  $("#messageText").val(message);
  $("#messageBox").fadeIn(250);
}

$(".show-message").click(function(){
  const card = $(this).closest(".survey-card");
  const message = card.find(".survey-message").val();
  const title = card.find(".name").text();

  openMessage(message, title);
});

$("#closeMessage").click(function(){
  $("#messageBox").fadeOut(250);
});

$("#messageBox").click(function(e){
  if (e.target === this) {
    $(this).fadeOut(250);
  }
});

$("#copyMessage").click(function(){
  const value = $("#messageText").val();

  try {
    navigator.clipboard.writeText(value);
    toastr.success("", "!تم نسخ الرسالة بنجاح", {timeOut: 1800});
  }
  catch (e) {
    $("#messageText")[0].select();
    document.execCommand("copy");
    toastr.success("", "!تم نسخ الرسالة بنجاح", {timeOut: 1800});
  }
});

$(".copyID").click(function(){
  const ID = $(this).attr("data-id");

  try {
    navigator.clipboard.writeText(ID);
    toastr.success("", "!تم نسخ المعرّف بنجاح", {timeOut: 1800});
  }
  catch (e) {
    console.error(e);
  }
});

// experience / age filter

function ageCheck() {
  const fromAge = parseInt($("#fromAge").val());
  const toAge = parseInt($("#toAge").val());
  const fromExp = parseInt($("#fromExp").val());
  const toExp = parseInt($("#toExp").val());

  let valid = true;

  if (!isNaN(fromAge) && !isNaN(toAge) && fromAge > toAge) valid = false;
  if (!isNaN(fromExp) && !isNaN(toExp) && fromExp > toExp) valid = false;

  if (valid) {
    $("#submitFilter").prop("disabled", false);
  } else {
    $("#submitFilter").prop("disabled", true);
  }
}

$("#fromAge, #toAge, #fromExp, #toExp").on("keyup input change", ageCheck);
ageCheck();

});