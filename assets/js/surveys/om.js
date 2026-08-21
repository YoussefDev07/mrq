// form

let t = "نعم";
let f = "لا";

$(".board_or_f").change(function(){
  if (this.value == t) {
	  $("#what_board_or_f").slideDown();
	  $("#what_board_or_f_input").attr("required", "required");

		$("#exp_board_or_f").slideDown();
	  $("#exp_board_or_f_input").attr("required", "required");
  }
  else if (this.value == f) {
	  $("#what_board_or_f").slideUp();
	  $("#what_board_or_f_input").removeAttr('required');
		$("#what_board_or_f_input").val(null);

		$("#exp_board_or_f").slideUp();
	  $("#exp_board_or_f_input").removeAttr('required');
		$("#exp_board_or_f_input").val(null);
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

$("#add_e_f").click(function(){
  let tag = "input[name=\"e_f\"]";
  let val = parseInt($(tag).val());
  var num = val + 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num > 60) return;
  $(tag).val(num);
});
$("#remove_e_f").click(function(){
  let tag = "input[name=\"e_f\"]";
  let val = parseInt($(tag).val());
  var num = val - 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num < 0) return;
  $(tag).val(num);
});

$("#add_arabic_board").click(function(){
  let tag = "input[name=\"arabic_board\"]";
  let val = parseInt($(tag).val());
  var num = val + 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num > 60) return;
  $(tag).val(num);
});
$("#remove_arabic_board").click(function(){
  let tag = "input[name=\"arabic_board\"]";
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

$("#add_exp_board_or_f").click(function(){
  let tag = "input[name=\"exp_board_or_f\"]";
  let val = parseInt($(tag).val());
  var num = val + 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num > 60) return;
  $(tag).val(num);
});
$("#remove_exp_board_or_f").click(function(){
  let tag = "input[name=\"exp_board_or_f\"]";
  let val = parseInt($(tag).val());
  var num = val - 1;
  if (isNaN(val)) return $(tag).attr("value", 0);
  if (num < 0) return;
  $(tag).val(num);
});

// reset

$(".reset").click(function(){
  $(".remove").fadeIn();
});

// remove

function rm() {
  $(".remove").fadeOut();
}

$(".remove button").click(function(){
  rm();
});

$(".remove input").click(function(){
  rm();
});