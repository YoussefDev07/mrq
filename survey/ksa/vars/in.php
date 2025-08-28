<?php
  #form
  $email = trim(strip_tags($_POST["email"])); //required
  $name = trim(strip_tags($_POST["name"])); //required
  $country = trim(strip_tags($_POST["nationality"])); //required
  $town = trim(strip_tags($_POST["town"])); //required
  $spec = trim(strip_tags($_POST["spec"])); //required
  $whatsapp = trim(strip_tags($_POST["whatsapp"])); //required
  $phone = trim(strip_tags($_POST["phone"])); //required
  $age = trim(strip_tags($_POST["age"])); //required
  $exp = trim(strip_tags($_POST["exp"])); //required
  $master = (empty($_POST["master"])) ? "":"\n\n🟪 سنوات الخبرة بعد الماجستير ⬅️ ".trim(strip_tags($_POST["master"]));
  $phd = (empty($_POST["phd"])) ? "":"\n\n🟪 سنوات الخبرة بعد الدكتوراة ⬅️ ".trim(strip_tags($_POST["phd"]));
  $f = (empty($_POST["f"])) ? "":"\n\n🟪 سنوات الخبرة بعد الزمالة ⬅️ ".trim(strip_tags($_POST["f"]));
  $work = trim(strip_tags($_POST["work"])); //required
  $job = trim(strip_tags($_POST["job"])); //select - required
  $license = trim(strip_tags($_POST["license"])); //radio - required
  $license_true = (empty($_POST["license_true"])) ? "":"\n\n🟪 الترخيص ساري حتى ⬅️ ".str_replace("-", "/", trim(strip_tags($_POST["license_true"]))); //date - hidden - required
  $license_false = (empty($_POST["license_false"]) || $_POST["license_false"] == "none") ? "":"\n\n🟪 الترخيص منتهي من ⬅️ ".trim(strip_tags($_POST["license_false"])); //select - hidden - impartant
  $expert_in = trim(strip_tags($_POST["expert_in"])); //required
  $expert_out = trim(strip_tags($_POST["expert_out"])); //required
  $job_submit = trim(strip_tags($_POST["job_submit"])); //select - required
  $est = trim(strip_tags($_POST["est"])); //radio - required
  $est_true = (empty($_POST["est_true"])) ? "":"\n\n🟪 الإقامة سارية حتى ⬅️ ".str_replace("-", "/", trim(strip_tags($_POST["est_true"]))); //date - hidden - required
  $est_false = (empty($_POST["est_false"]) || $_POST["est_false"] == "none") ? "":"\n\n🟪 الاقامة منتهية من ⬅️ ".trim(strip_tags($_POST["est_false"])); //select - hidden - required
  $con = ($_POST["con"] == "نعم") ? "ساري":"لا يوجد"; //radio - required
  $condate = (empty($_POST["condate"])) ? "":"\n\n🟪 عقدك الحالي ينتهي بتاريخ ⬅️ ".str_replace("-", "/", trim(strip_tags($_POST["condate"]))); //hidden - date
  $pat = trim(strip_tags($_POST["pat"])); //select - required
  $strong = trim(strip_tags($_POST["strong"])); //radio - required
  $warr = trim(strip_tags($_POST["warr"])); //select - required
  $city = trim(strip_tags($_POST["city"])); //radio - required
  $c_true = (empty($_POST["c_true"])) ? "":"\n\n🔲 ما هي المدن/المدينة التي ترغب العمل بها؟ ⬅️ ".trim(strip_tags($_POST["c_true"])); //hidden - required
  $notes = (empty($_POST["notes"])) ? "":"\n\n🔲 ملاحظات ⬅️ ".trim(strip_tags($_POST["notes"]));