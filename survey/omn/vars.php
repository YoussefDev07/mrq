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
  $master = (empty($_POST["master"])) ? "":"\n\n🟧 سنوات الخبرة بعد الماجستير ⬅️ ".trim(strip_tags($_POST["master"]));
  $e_f = (empty($_POST["e_f"])) ? "":"\n\n🟧 سنوات الخبرة بعد الزمالة المصرية ⬅️ ".trim(strip_tags($_POST["e_f"]));
  $arabic_board = (!$_POST["arabic_board"]) ? "":"\n\n🟧 سنوات الخبرة بعد البورد العربي ⬅️ ".trim(strip_tags($_POST["arabic_board"]));
  $phd = (empty($_POST["phd"])) ? "":"\n\n🟧 سنوات الخبرة بعد الدكتوراه ⬅️ ".trim(strip_tags($_POST["phd"]));
  $dataflow = trim(strip_tags($_POST["dataflow"])); //radio - required
  $bromotic = trim(strip_tags($_POST["bromotic"])); //radio - required
  $lic = trim(strip_tags($_POST["lic"])); //radio - required
  $board_or_f = trim(strip_tags($_POST["board_or_f"])); //radio - required
  $what_board_or_f = (empty($_POST["what_board_or_f"])) ? "":"\n\n🟧 ما هي البورد أو الزمالة الأُخرى؟ ⬅️ ".trim(strip_tags($_POST["what_board_or_f"])); //hidden
  $exp_board_or_f = (empty($_POST["exp_board_or_f"])) ? "":"\n\n🟧 سنوات الخبرة بعدها؟ ⬅️ ".trim(strip_tags($_POST["exp_board_or_f"])); //hidden
  $exp_master = trim(strip_tags($_POST["exp_master"])); //select - required
  $stayed = trim(strip_tags($_POST["stayed"])); //select - required
  $exp5 = (empty($_POST["exp5"])) ? "":"\n\n🟧 الدولة\الدول التي قضيت بها خبرة 5 سنين ⬅️ ".implode(" ▫️ ", $_POST["exp5"]); //select
  $newdataflow = trim(strip_tags($_POST["newdataflow"])); // radio - required
  $con = ($_POST["con"] == "نعم") ? "ساري":"لا يوجد"; //radio - required
  $condate = (empty($_POST["condate"])) ? "":"\n\n🟧 عقدك الحالي ينتهي بتاريخ ⬅️ ".str_replace("-", "/", trim(strip_tags($_POST["condate"]))); //hidden - date
  $city = trim(strip_tags($_POST["city"])); //radio - required
  $c_true = (empty($_POST["c_true"])) ? "":"\n\n🔲 ما هي المدن/المدينة التي ترغب العمل بها؟ ⬅️ ".trim(strip_tags($_POST["c_true"])); //hidden - required
  $notes = (empty($_POST["notes"])) ? "":"\n\n🔲 ملاحظات ⬅️ ".trim(strip_tags($_POST["notes"]));