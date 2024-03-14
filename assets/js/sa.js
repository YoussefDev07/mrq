// form

let t = "نعم";
let f = "لا";

$(".l").change(function(){
  if (this.value == t) {
	  $("#license_true").slideDown();
	  $("#l_true").attr("required", "required");
	
	  $("#license_false").slideUp();
	  $("#l_false").removeAttr('required');
	  $("#l_false").val("none");
  }
  else if (this.value == f) {
	  $("#license_false").slideDown();
	  $("#l_false").attr("required", "required");
	
	  $("#license_true").slideUp();
	  $("#l_true").removeAttr('required');
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

// input

$("#add_age").click(function(){
  let tag = "input[name=\"age\"]";
  let val = parseInt($(tag).val());
  var num = val + 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num > 65) return;
  $(tag).val(num);
});
$("#remove_age").click(function(){
  let tag = "input[name=\"age\"]";
  let val = parseInt($(tag).val());
  var num = val - 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num < 24) return;
  $(tag).val(num);
});

$("#add_exp").click(function(){
  let tag = "input[name=\"exp\"]";
  let val = parseInt($(tag).val());
  var num = val + 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num > 47) return;
  $(tag).val(num);
});
$("#remove_exp").click(function(){
  let tag = "input[name=\"exp\"]";
  let val = parseInt($(tag).val());
  var num = val - 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num < 0) return;
  $(tag).val(num);
});

$("#add_master").click(function(){
  let tag = "input[name=\"master\"]";
  let val = parseInt($(tag).val());
  var num = val + 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num > 60) return;
  $(tag).val(num);
});
$("#remove_master").click(function(){
  let tag = "input[name=\"master\"]";
  let val = parseInt($(tag).val());
  var num = val - 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num < 0) return;
  $(tag).val(num);
});

$("#add_phd").click(function(){
  let tag = "input[name=\"phd\"]";
  let val = parseInt($(tag).val());
  var num = val + 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num > 60) return;
  $(tag).val(num);
});
$("#remove_phd").click(function(){
  let tag = "input[name=\"phd\"]";
  let val = parseInt($(tag).val());
  var num = val - 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num < 0) return;
  $(tag).val(num);
});

$("#add_f").click(function(){
  let tag = "input[name=\"f\"]";
  let val = parseInt($(tag).val());
  var num = val + 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num >= 100) return;
  $(tag).val(num);
});
$("#remove_f").click(function(){
  let tag = "input[name=\"f\"]";
  let val = parseInt($(tag).val());
  var num = val - 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num < 0) return;
  $(tag).val(num);
});

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