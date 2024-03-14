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
  $master = (empty($_POST["master"])) ? "":"\n\n🟦 سنوات الخبرة بعد الماجستير ⬅️ ".strip_tags($_POST["master"]);
  $phd = (empty($_POST["phd"])) ? "":"\n\n🟦 سنوات الخبرة بعد الدكتوراه ⬅️ ".strip_tags($_POST["phd"]);
  $f = (empty($_POST["f"])) ? "":"\n\n🟦 سنوات الخبرة بعد الزمالة ⬅️ ".strip_tags($_POST["f"]);
  $dataflow = trim(strip_tags($_POST["dataflow"])); //select - important
  $pro = trim(strip_tags($_POST["pro"])); //select - important
  $kdexp = trim(strip_tags($_POST["kdexp"])); //radio - important
  $city = trim(strip_tags($_POST["city"])); //radio - important
  $c_true = (empty($_POST["c_true"])) ? "":"\n\n🔲 ما هي المدن/المدينة التي ترغب العمل بها؟ ⬅️ ".trim(strip_tags($_POST["c_true"])); //hidden - important
  $travel = trim(strip_tags($_POST["travel"])); //select - important
  $papers = trim(strip_tags($_POST["papers"])); //radio - important
  $covid = trim(strip_tags($_POST["covid"])); //radio - important
  $allow = trim(strip_tags($_POST["allow"])); //radio - important
  $notes = (empty($_POST["notes"])) ? "":"\n\n🔲 ملاحظات ⬅️ ".trim(strip_tags($_POST["notes"]));