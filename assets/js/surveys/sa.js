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
  if ($("#whatsappNumber").prop("disabled")) {
   $("#whatsappCode").val($("#phoneCode").val());
   $("#whatsappNumber").val($("#phoneNumber").val());
   whatsappCompilation();
  }
});
$("#anotherNumberForWhatsapp").on("change", function(){
  if ($(this).is(":checked")) {
    $("#whatsappNumber, #whatsappCode").prop("disabled", false);
    $("#whatsappNumber").val("");
  } else {
    $("#whatsappNumber, #whatsappCode").prop("disabled", true);
    $("#whatsappNumber").val($("#phoneNumber").val());
    $("#whatsappCode").val($("#phoneCode").val());
    whatsappCompilation();
  }
});

$("#job").change(function(){
  var selected = $(this).find("option:selected");
  var group = selected.closest("optgroup");
  var groupLabel = group.attr("label");

  if (groupLabel == "طبي") {
    $(".postgraduate, #spec").slideDown();
    $(".required").prop("required", true);
  } else {
    $(".postgraduate, #spec, #df, #pro").slideUp();
    $(".postgraduateInput").val(null);
    $(".required").prop("required", false);
  }
});

let t = "نعم";
let f = "لا";

$("select[name='dataflow']").change(function(){
  if (this.value == t) {
	  $("#dataflowTrue").slideDown();
	  $("#df").attr("required", "required");
  } else {	
	  $("#dataflowTrue").slideUp();
	  $("#df").removeAttr("required");
	  $("#df").val(null);
  }
});

$("select[name='prometric']").change(function(){
  if (this.value == t) {
	  $("#prometricTrue").slideDown();
	  $("#pro").attr("required", "required");
  } else {	
	  $("#prometricTrue").slideUp();
	  $("#pro").removeAttr("required");
	  $("#pro").val(null);
  }
});

$(".kdexp").change(function(){
  if (this.value == t) {
	  $("#expert_in_sa_true").slideDown();
	  $("#kdexp_true").attr("required", "required");
  }
  else if (this.value == f) {	
	  $("#expert_in_sa_true").slideUp();
	  $("#kdexp_true").removeAttr("required");
	  $("#kdexp_true").val(null);
  }
});

$(".l").change(function(){
  if (this.value == t) {
	  $("#license_true").slideDown();
	  $("#l_true").attr("required", "required");
	
	  $("#license_false").slideUp();
	  $("#l_false").removeAttr("required");
	  $("#l_false").val("none");
  }
  else if (this.value == f) {
	  $("#license_false").slideDown();
	  $("#l_false").attr("required", "required");
	
	  $("#license_true").slideUp();
	  $("#l_true").removeAttr("required");
	  $("#l_true").val(null);
  }
});

$(".e").change(function(){
  if (this.value == t) {
	  $("#est_true").slideDown();
	  $("#e_true").attr("required", "required");
	
	  $("#est_false").slideUp();
	  $("#e_false").removeAttr("required");
	  $("#e_false").val("none");
  }
  else if (this.value == f) {
	  $("#est_false").slideDown();
	  $("#e_false").attr("required", "required");
	
	  $("#est_true").slideUp();
	  $("#e_true").removeAttr("required");
	  $("#e_true").val(null);
  }
});

$(".con").change(function(){
  if (this.value == t) {
	  $("#condate").slideDown();
	  $("#cond").attr("required", "required");
  }
  else if (this.value == f) {
	  $("#condate").slideUp();
	  $("#cond").removeAttr("required");
	  $("#cond").val(null);
  }
});

$(".c").change(function(){
  if (this.value == t) {
	  $("#city_true").slideDown();
	  $("#c_true").attr("required", "required");
  }
  else if (this.value == f) {
	  $("#city_true").slideUp();
	  $("#c_true").removeAttr("required");
	  $("#c_true").val(null);
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

$("#add_expert_out").click(function(){
  let tag = "input[name=\"expert_out\"]";
  let val = parseInt($(tag).val());
  var num = val + 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num > 40) return;
  $(tag).val(num);
});
$("#remove_expert_out").click(function(){
  let tag = "input[name=\"expert_out\"]";
  let val = parseInt($(tag).val());
  var num = val - 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num < 0) return;
  $(tag).val(num);
});

$("#add_expert_in_sa").click(function(){
  let tag = "input[name=\"expert_in_sa\"]";
  let val = parseInt($(tag).val());
  var num = val + 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num > 40) return;
  $(tag).val(num);
});
$("#remove_expert_in_sa").click(function(){
  let tag = "input[name=\"expert_in_sa\"]";
  let val = parseInt($(tag).val());
  var num = val - 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num < 0) return;
  $(tag).val(num);
});