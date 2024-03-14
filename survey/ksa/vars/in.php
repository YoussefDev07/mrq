<?php
  #form
  $email = trim(strip_tags($_POST["email"])); //important
  $name = trim(strip_tags($_POST["name"])); //important
  $country = trim(strip_tags($_POST["country"])); //important
  $town = trim(strip_tags($_POST["town"])); //important
  $spec = trim(strip_tags($_POST["spec"])); //important
  $whatsapp = trim(strip_tags($_POST["whatsapp"])); //important
  $phone = trim(strip_tags($_POST["phone"])); //important
  $age = trim(strip_tags($_POST["age"])); //important
  $exp = trim(strip_tags($_POST["exp"])); //important
  $master = (empty($_POST["master"])) ? "":"\n\n🟪 سنوات الخبرة بعد الماجستير ⬅️ ".trim(strip_tags($_POST["master"]));
  $phd = (empty($_POST["phd"])) ? "":"\n\n🟪 سنوات الخبرة بعد الدكتوراة ⬅️ ".trim(strip_tags($_POST["phd"]));
  $f = (empty($_POST["f"])) ? "":"\n\n🟪 سنوات الخبرة بعد الزمالة ⬅️ ".trim(strip_tags($_POST["f"]));
  $work = trim(strip_tags($_POST["work"])); //important
  $job = trim(strip_tags($_POST["job"])); //select - important
  $license = trim(strip_tags($_POST["license"])); //radio - important
  $license_true = (empty($_POST["license_true"])) ? "":"\n\n🟪 الترخيص ساري حتى ⬅️ ".str_replace("-", "/", trim(strip_tags($_POST["license_true"]))); //date - hidden - important
  $license_false = (empty($_POST["license_false"]) || $_POST["license_false"] == "none") ? "":"\n\n🟪 الترخيص منتهي من ⬅️ ".trim(strip_tags($_POST["license_false"])); //select - hidden - impartant
  $expert_in = trim(strip_tags($_POST["expert_in"])); //important
  $expert_out = trim(strip_tags($_POST["expert_out"])); //important
  $job_submit = trim(strip_tags($_POST["job_submit"])); //select - important
  $est = trim(strip_tags($_POST["est"])); //radio - important
  $est_true = (empty($_POST["est_true"])) ? "":"\n\n🟪 الإقامة سارية حتى ⬅️ ".str_replace("-", "/", trim(strip_tags($_POST["est_true"]))); //date - hidden - important
  $est_false = (empty($_POST["est_false"]) || $_POST["est_false"] == "none") ? "":"\n\n🟪 الاقامة منتهية من ⬅️ ".trim(strip_tags($_POST["est_false"])); //select - hidden - important
  $con = ($_POST["con"] == "نعم") ? "ساري":"لا يوجد"; //radio - important
  $condate = (empty($_POST["condate"])) ? "":"\n\n🟪 عقدك الحالي ينتهي بتاريخ ⬅️ ".str_replace("-", "/", trim(strip_tags($_POST["condate"]))); //hidden - date
  $pat = trim(strip_tags($_POST["pat"])); //select - important
  $strong = trim(strip_tags($_POST["strong"])); //radio - important
  $warr = trim(strip_tags($_POST["warr"])); //select - important
  $city = trim(strip_tags($_POST["city"])); //radio - important
  $c_true = (empty($_POST["c_true"])) ? "":"\n\n🔲 ما هي المدن/المدينة التي ترغب العمل بها؟ ⬅️ ".trim(strip_tags($_POST["c_true"])); //hidden - important
  $notes = (empty($_POST["notes"])) ? "":"\n\n🔲 ملاحظات ⬅️ ".trim(strip_tags($_POST["notes"]));