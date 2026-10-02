<?php
  #raw
  $master_raw = (!empty($_POST["master"])) ? trim(strip_tags($_POST["master"]))."-01":(!empty($survey["master"]) ? $survey["master"]:null);
  $phd_raw = (!empty($_POST["phd"])) ? trim(strip_tags($_POST["phd"]))."-01":(!empty($survey["phd"]) ? $survey["phd"]:null);
  $f_raw = (!empty($_POST["f"])) ? trim(strip_tags($_POST["f"]))."-01":(!empty($survey["f"]) ? $survey["f"]:null);
  $dataflow_raw = (!empty($_POST["dataflow_date"])) ? trim(strip_tags($_POST["dataflow_date"]))."-01":(!empty($survey["dataflow"]) ? $survey["dataflow"]:null);
  $prometric_raw = (!empty($_POST["prometric_date"])) ? trim(strip_tags($_POST["prometric_date"]))."-01":(!empty($survey["prometric"]) ? $survey["prometric"]:null);

  #form
  if ($survey["type"] == "ksa_in") {
    $cube = "🟪";
  }
  elseif ($survey["type"] == "ksa_out") {
    $cube = "🟦";
  }
  else {
    $cube = null;
  }

  $phone = array(
    "full" => trim(strip_tags($_POST["phone"])),
    "code" => trim(strip_tags($_POST["phone_code"])),
    "number" => trim(strip_tags($_POST["phone_number"]))
  ); //required
  $whatsapp = array(
    "full" => trim(strip_tags($_POST["whatsapp"])),
    "code" => trim(strip_tags($_POST["whatsapp_code"])),
    "number" => trim(strip_tags($_POST["whatsapp_number"]))
  ); //required
  $town = trim(strip_tags($_POST["town"])); //required
  $master = (!empty($master_raw)) ? "\n\n$cube سنوات الخبرة بعد الماجستير ⬅️ {master}":""; //date - hidden
  $phd = (!empty($phd_raw)) ? "\n\n$cube سنوات الخبرة بعد الدكتوراة ⬅️ {phd}":""; //date - hidden
  $f = (!empty($f_raw)) ? "\n\n$cube سنوات الخبرة بعد الزمالة ⬅️ {f}":""; //date - hidden
  $dataflow_date = (!empty($dataflow_raw)) ? "\n\n$cube سنوات الخبرة بعد الداتا فلو ⬅️ {dataflow}":""; //date - hidden
  $prometric_date = (!empty($prometric_raw)) ? "\n\n$cube سنوات الخبرة بعد البروميتك ⬅️ {prometric}":""; //date - hidden
  $license = (empty($_POST["license"])) ? null:trim(strip_tags($_POST["license"])); //radio - required
  $license_true = (empty($_POST["license_true"])) ? null:"\n\n$cube الترخيص ساري حتى ⬅️ ".str_replace("-", "/", trim(strip_tags($_POST["license_true"]))); //date - hidden - required
  $license_false = (empty($_POST["license_false"]) || $_POST["license_false"] == "none") ? null:"\n\n$cube الترخيص منتهي من ⬅️ ".trim(strip_tags($_POST["license_false"])); //select - hidden - required
  $expert_in = (empty($_POST["expert_in"])) ? null:trim(strip_tags($_POST["expert_in"])); //required
  $expert_out = (empty($_POST["expert_out"])) ? null:trim(strip_tags($_POST["expert_out"])); //required
  $expert_in_sa = (empty($_POST["expert_in_sa"])) ? null:trim(strip_tags($_POST["expert_in_sa"]));
  $est = (empty($_POST["est"])) ? null:trim(strip_tags($_POST["est"])); //radio - required
  $est_true = (empty($_POST["est_true"])) ? null:"\n\n$cube الإقامة سارية حتى ⬅️ ".str_replace("-", "/", trim(strip_tags($_POST["est_true"]))); //date - hidden - required
  $est_false = (empty($_POST["est_false"]) || $_POST["est_false"] == "none") ? null:"\n\n$cube الاقامة منتهية من ⬅️ ".trim(strip_tags($_POST["est_false"])); //select - hidden - required
  $con = (isset($_POST["con"]) && $_POST["con"] == "نعم") ? "ساري":"لا يوجد"; //radio - required
  $condate = (empty($_POST["condate"])) ? null:"\n\n$cube عقدك الحالي ينتهي بتاريخ ⬅️ ".str_replace("-", "/", trim(strip_tags($_POST["condate"]))); //hidden - date
  $travel = (empty($_POST["travel"])) ? null:trim(strip_tags($_POST["travel"])); //select - required
  $notes = (empty($_POST["notes"])) ? "":"\n\n🔲 ملاحظات ⬅️ {note}";

  #converted
  $birth_date = $survey["birth_date"];
  $exp = $survey["graduation"];

  $get_years = function(?string $date_raw): int {
    if (empty($date_raw)) return 0;
    return (new DateTime($date_raw)) -> diff(new DateTime()) -> y;
  };

  $age = $get_years($birth_date);
  $exp_years = $get_years($exp);
  $master_years = $get_years($master_raw);
  $phd_years = $get_years($phd_raw);
  $f_years = $get_years($f_raw);
  $dataflow_years = $get_years($dataflow_raw);
  $prometric_years = $get_years($prometric_raw);

  #parts
  $edu_inject = "";
  if (!empty($master_raw) && strpos($current_msg, "{master}") === false) $edu_inject .= $master;
  if (!empty($phd_raw) && strpos($current_msg, "{phd}") === false) $edu_inject .= $phd;
  if (!empty($f_raw) && strpos($current_msg, "{f}") === false) $edu_inject .= $f;
  if (!empty($dataflow_raw) && strpos($current_msg, "{dataflow}") === false) $edu_inject .= $dataflow_date;
  if (!empty($prometric_raw) && strpos($current_msg, "{prometric}") === false) $edu_inject .= $prometric_date;

  if ($edu_inject !== "") {
    $current_msg = str_replace("{exp}", "{exp}".$edu_inject, $current_msg);
  }

  if (!empty($_POST["notes"]) && strpos($current_msg, "{note}") === false) {
    $current_msg = $current_msg .= $notes;
  }
  
  if ($survey["type"] == "ksa_in") {
    $license = "\n\n🟪 هل الترخيص ساري؟ ⬅️ ".$license.$license_true.$license_false;
    $est = "\n\n🟪 هل الإقامة سارية؟ ⬅️ ".$est.$est_true.$est_false;
    $con = "\n\n🟪 عقدك الحالي ⬅️ ".$con.$condate;
  }