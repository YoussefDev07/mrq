<?php
  #form
  $email = trim($_POST["email"]); //important
  $name = trim($_POST["name"]); //important
  $country = trim($_POST["country"]); //important
  $town = trim($_POST["town"]); //important
  $spec = trim($_POST["spec"]); //important
  $whatsapp = trim($_POST["whatsapp"]); //important
  $phone = trim($_POST["phone"]); //important
  $age = $_POST["age"]; //important
  $exp = $_POST["exp"]; //important
  $master = (!$_POST["master"]) ? "":"\n\n🟪 سنوات الخبرة بعد الماجستير ⬅️ ".$_POST["master"];
  $phd = (!$_POST["phd"]) ? "":"\n\n🟪 سنوات الخبرة بعد الدكتوراة ⬅️ ".$_POST["phd"];
  $f = (!$_POST["f"]) ? "":"\n\n🟪 سنوات الخبرة بعد الزمالة ⬅️ ".$_POST["f"];
  $work = trim($_POST["work"]); //important
  $job = $_POST["job"]; //select - important
  $license = $_POST["license"]; //radio - important
  $license_true = (!$_POST["license_true"]) ? "":"\n\n🟪 الترخيص ساري حتى ⬅️ ".str_replace("-", "/", $_POST["license_true"]); //date - hidden - important
  $license_false = ($_POST["license_false"] == "none") ? "":"\n\n🟪 الترخيص منتهي من ⬅️ ".$_POST["license_false"]; //select - hidden - impartant
  $expert_in = $_POST["expert_in"]; //important
  $expert_out = $_POST["expert_out"]; //important
  $job_submit = $_POST["job_submit"]; //select - important
  $est = $_POST["est"]; //radio - important
  $est_true = (!$_POST["est_true"]) ? "":"\n\n🟪 الإقامة سارية حتى ⬅️ ".str_replace("-", "/", $_POST["est_true"]); //date - hidden - important
  $est_false = ($_POST["est_false"] == "none") ? "":"\n\n🟪 الاقامة منتهية من ⬅️ ".$_POST["est_false"]; //select - hidden - important
  $con = ($_POST["con"] == "نعم") ? "ساري":"لا يوجد"; //radio - important
  $condate = (!$_POST["condate"]) ? "":"\n\n🟪 عقدك الحالي ينتهي بتاريخ ⬅️ ".str_replace("-", "/", $_POST["condate"]); //hidden - date
  $pat = $_POST["pat"]; //select - important
  $strong = $_POST["strong"]; //radio - important
  $warr = $_POST["warr"]; //select - important
  $city = $_POST["city"]; //radio - important
  $c_true = (!$_POST["c_true"]) ? "":"\n\n🔲 ما هي المدن/المدينة التي ترغب العمل بها؟ ⬅️ ".trim($_POST["c_true"]); //hidden - important
  $notes = (empty($_POST["notes"])) ? "":"\n\n🔲 ملاحظات ⬅️ ".trim($_POST["notes"]);