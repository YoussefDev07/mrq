// form

let t = "نعم";
let f = "لا";

$("#pro").change(function(){
  if (this.value == t) {
    $("#protype").slideDown();
	  $("#protype input").attr("required", "required");
	
	  $("#procon").slideUp();
	  $("#procon input").removeAttr("required");
  }
	else if (this.value == f) {
	  $("#protype").slideUp();
	  $("#protype input").removeAttr("required");
	  $("#protype input").val(null);
	
	  $("#procon").slideDown();
	  $("#procon input").attr("required", "required");
  }
	else {
		$("#protype").slideUp();
	  $("#protype input").removeAttr("required");
	  $("#protype input").val(null);

		$("#procon").slideUp();
	  $("#procon input").removeAttr("required");
	}
});

$(".uexp").change(function(){
  if (this.value == t) {
	  $("#dexp").slideDown();
	  $("#dexp select").attr("required", "required");
  } else {
	  $("#dexp").slideUp();
	  $("#dexp select").removeAttr("required");
	  $("#dexp select").val("none");
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