// wait

$(document).ready(function(){
  $(".wait").fadeOut(800);
});

$(window).ready(function(){

// compilations

$("#phoneNumber, #phoneCode").on("input change", function(){
  let number = $("#phoneNumber").val();
  let code = $("#phoneCode").val();
  number = number.replace(/ /g, "").replace(/-/g, "").replace(/\(/g, "").replace(/\)/g, "").replace(/\D/g, "");
  code = code.replace("+", "").replace(/ /g, "").replace(/\D/g, "");

  $("#phoneHidden").val(code + number);
});

function whatsappCompilation() {
  let number = $("#whatsappNumber").val();
  let code = $("#whatsappCode").val();
  number = number.replace(/ /g, "").replace(/-/g, "").replace(/\(/g, "").replace(/\)/g, "").replace(/\D/g, "");
  code = code.replace("+", "").replace(/ /g, "").replace(/\D/g, "");

  $("#whatsappHidden").val(code + number);
}
$("#whatsappNumber, #whatsappCode").on("input change", whatsappCompilation);

// lock/unlock

$("#phoneCode, #phoneNumber").on("input change", function(){
  if ($("#whatsappNumber").prop("readonly")) {
   $("#whatsappCode").val($("#phoneCode").val());
   $("#whatsappNumber").val($("#phoneNumber").val());
   whatsappCompilation();
  }
});
$("#anotherNumberForWhatsapp").on("change", function(){
  if ($(this).is(":checked")) {
    $("#whatsappNumber, #whatsappCode").prop("readonly", false);
    $("#whatsappNumber").val("");
  } else {
    $("#whatsappNumber, #whatsappCode").prop("readonly", true);
    $("#whatsappNumber").val($("#phoneNumber").val());
    $("#whatsappCode").val($("#phoneCode").val());
    whatsappCompilation();
  }
});

let t = "نعم";
let f = "لا";

$(".l").change(function(){
  if (this.value == t) {
	  $("#license_true").slideDown();
	  $("#l_true").prop("required", true);
	
	  $("#license_false").slideUp();
	  $("#l_false").prop("required", false);
	  $("#l_false").val("none");
  }
  else if (this.value == f) {
	  $("#license_false").slideDown();
	  $("#l_false").prop("required", true);
	
	  $("#license_true").slideUp();
	  $("#l_true").prop("required", false);
	  $("#l_true").val(null);
  }
});

$(".e").change(function(){
  if (this.value == t) {
	  $("#est_true").slideDown();
	  $("#e_true").prop("required", true);
	
	  $("#est_false").slideUp();
	  $("#e_false").prop("required", false);
	  $("#e_false").val("none");
  }
  else if (this.value == f) {
	  $("#est_false").slideDown();
	  $("#e_false").prop("required", true);
	
	  $("#est_true").slideUp();
	  $("#e_true").prop("required", false);
	  $("#e_true").val(null);
  }
});

$(".con").change(function(){
  if (this.value == t) {
	  $("#condate").slideDown();
	  $("#cond").prop("required", true);
  }
  else if (this.value == f) {
	  $("#condate").slideUp();
	  $("#cond").prop("required", false);
	  $("#cond").val(null);
  }
});

// increase/decrease

$("#add_expert_in").click(function(){
  let tag = "input[name=\"expert_in\"]";
  let val = parseInt($(tag).val());
  var num = val + 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num > 40) return;
  $(tag).val(num);
});
$("#remove_expert_in").click(function(){
  let tag = "input[name=\"expert_in\"]";
  let val = parseInt($(tag).val());
  var num = val - 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num < 0) return;
  $(tag).val(num);
});

$("#add_expert_in_sa").click(function(){
  let tag = "#kdexp_true";
  let val = parseInt($(tag).val());
  var num = val + 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num > 40) return;
  $(tag).val(num);
});
$("#remove_expert_in_sa").click(function(){
  let tag = "#kdexp_true";
  let val = parseInt($(tag).val());
  var num = val - 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num < 0) return;
  $(tag).val(num);
});

});