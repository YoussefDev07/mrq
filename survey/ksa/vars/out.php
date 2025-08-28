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
  $master = (empty($_POST["master"])) ? "":"\n\n🟦 سنوات الخبرة بعد الماجستير ⬅️ ".strip_tags($_POST["master"]);
  $phd = (empty($_POST["phd"])) ? "":"\n\n🟦 سنوات الخبرة بعد الدكتوراه ⬅️ ".strip_tags($_POST["phd"]);
  $f = (empty($_POST["f"])) ? "":"\n\n🟦 سنوات الخبرة بعد الزمالة ⬅️ ".strip_tags($_POST["f"]);
  $dataflow = trim(strip_tags($_POST["dataflow"])); //select - required
  $pro = trim(strip_tags($_POST["pro"])); //select - required
  $kdexp = trim(strip_tags($_POST["kdexp"])); //radio - required
  $city = trim(strip_tags($_POST["city"])); //radio - required
  $c_true = (empty($_POST["c_true"])) ? "":"\n\n🔲 ما هي المدن/المدينة التي ترغب العمل بها؟ ⬅️ ".trim(strip_tags($_POST["c_true"])); //hidden - required
  $travel = trim(strip_tags($_POST["travel"])); //select - required
  $papers = trim(strip_tags($_POST["papers"])); //radio - required
  $covid = trim(strip_tags($_POST["covid"])); //radio - required
  $allow = trim(strip_tags($_POST["allow"])); //radio - required
  $notes = (empty($_POST["notes"])) ? "":"\n\n🔲 ملاحظات ⬅️ ".trim(strip_tags($_POST["notes"]));