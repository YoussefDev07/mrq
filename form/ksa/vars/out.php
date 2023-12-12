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
  $master = (!$_POST["master"]) ? "":"\n\n🟦 سنوات الخبرة بعد الماجستير ⬅️ ".$_POST["master"];
  $phd = (!$_POST["phd"]) ? "":"\n\n🟦 سنوات الخبرة بعد الدكتوراة ⬅️ ".$_POST["phd"];
  $f = (!$_POST["f"]) ? "":"\n\n🟦 سنوات الخبرة بعد الزمالة ⬅️ ".$_POST["f"];
  $dataflow = $_POST["dataflow"]; //select - important
  $pro = $_POST["pro"]; //select - important
  $kdexp = $_POST["kdexp"]; //radio - important
  $city = $_POST["city"]; //radio - important
  $c_true = (!$_POST["c_true"]) ? "":"\n\n🔲 ما هي المدن/المدينة التي ترغب العمل بها؟ ⬅️ ".trim($_POST["c_true"]); //hidden - important
  $travel = $_POST["travel"]; //select - important
  $papers = $_POST["papers"]; //radio - important
  $covid = $_POST["covid"]; //radio - important
  $allow = $_POST["allow"]; //radio - important
  $notes = (empty($_POST["notes"])) ? "":"\n\n🔲 ملاحظات ⬅️ ".trim($_POST["notes"]);