<?php
  #form
  $email = trim(strip_tags($_POST["email"])); //required
  $name = trim(strip_tags($_POST["name"])); //required
  $nationality = trim(strip_tags($_POST["nationality"])); //required
  $birth_date = trim(strip_tags($_POST["birth_date"])); //date - required
  $phone = trim(strip_tags($_POST["phone"])); //required
  $whatsapp = trim(strip_tags($_POST["whatsapp"])); //required
  $town = trim(strip_tags($_POST["town"])); //required
  $job = trim(strip_tags($_POST["job"])); //select - required
  $spec = (empty($_POST["spec"])) ? "":"🟪 التخصص ⬅️ ".trim(strip_tags($_POST["spec"])); //select - hidden
  $work = trim(strip_tags($_POST["work"])); //required
  $exp = trim(strip_tags($_POST["exp"]))."-01"; //date - required
  $master = (empty($_POST["master"])) ? "":"\n\n🟪 سنوات الخبرة بعد الماجستير ⬅️ {master}"; //date - hidden
  $phd = (empty($_POST["phd"])) ? "":"\n\n🟪 سنوات الخبرة بعد الدكتوراة ⬅️ {phd}"; //date - hidden
  $f = (empty($_POST["f"])) ? "":"\n\n🟪 سنوات الخبرة بعد الزمالة ⬅️ {f}"; //date - hidden
  $license = trim(strip_tags($_POST["license"])); //radio - required
  $license_true = (empty($_POST["license_true"])) ? "":"\n\n🟪 الترخيص ساري حتى ⬅️ ".str_replace("-", "/", trim(strip_tags($_POST["license_true"]))); //date - hidden - required
  $license_false = (empty($_POST["license_false"]) || $_POST["license_false"] == "none") ? "":"\n\n🟪 الترخيص منتهي من ⬅️ ".trim(strip_tags($_POST["license_false"])); //select - hidden - required
  $expert_in = trim(strip_tags($_POST["expert_in"])); //required
  $expert_out = trim(strip_tags($_POST["expert_out"])); //required
  $est = trim(strip_tags($_POST["est"])); //radio - required
  $est_true = (empty($_POST["est_true"])) ? "":"\n\n🟪 الإقامة سارية حتى ⬅️ ".str_replace("-", "/", trim(strip_tags($_POST["est_true"]))); //date - hidden - required
  $est_false = (empty($_POST["est_false"]) || $_POST["est_false"] == "none") ? "":"\n\n🟪 الاقامة منتهية من ⬅️ ".trim(strip_tags($_POST["est_false"])); //select - hidden - required
  $con = ($_POST["con"] == "نعم") ? "ساري":"لا يوجد"; //radio - required
  $condate = (empty($_POST["condate"])) ? "":"\n\n🟪 عقدك الحالي ينتهي بتاريخ ⬅️ ".str_replace("-", "/", trim(strip_tags($_POST["condate"]))); //hidden - date
  $pat = trim(strip_tags($_POST["pat"])); //select - required
  $qiwa = trim(strip_tags($_POST["qiwa"])); //radio - required
  $warr = trim(strip_tags($_POST["warr"])); //select - required
  $city = trim(strip_tags($_POST["city"])); //radio - required
  $c_true = (empty($_POST["c_true"])) ? "":"\n\n🔲 ما هي المدن/المدينة التي ترغب العمل بها؟ ⬅️ ".trim(strip_tags($_POST["c_true"])); //hidden - required
  $notes = (empty($_POST["notes"])) ? "":"\n\n🔲 ملاحظات ⬅️ ".trim(strip_tags($_POST["notes"]));

  #raw
  $spec_raw = (empty($_POST["spec"])) ? null:trim(strip_tags($_POST["spec"]));
  $master_raw = (empty($_POST["master"])) ? null:trim(strip_tags($_POST["master"]))."-01";
  $phd_raw = (empty($_POST["phd"])) ? null:trim(strip_tags($_POST["phd"]))."-01";
  $f_raw = (empty($_POST["f"])) ? null:trim(strip_tags($_POST["f"]))."-01";

  #converted
  $get_years = function(?string $date_raw): int {
    if (empty($date_raw)) return 0;
    return (new DateTime($date_raw)) -> diff(new DateTime()) -> y;
  };

  $age = $get_years($birth_date);
  $exp_years = $get_years($exp);
  $master_years = $get_years($master_raw);
  $phd_years = $get_years($phd_raw);
  $f_years = $get_years($f_raw);