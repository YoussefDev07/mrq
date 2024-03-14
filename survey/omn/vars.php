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
  $master = (empty($_POST["master"])) ? "":"\n\n🟧 سنوات الخبرة بعد الماجستير ⬅️ ".trim(strip_tags($_POST["master"]));
  $e_f = (empty($_POST["e_f"])) ? "":"\n\n🟧 سنوات الخبرة بعد الزمالة المصرية ⬅️ ".trim(strip_tags($_POST["e_f"]));
  $arabic_board = (!$_POST["arabic_board"]) ? "":"\n\n🟧 سنوات الخبرة بعد البورد العربي ⬅️ ".trim(strip_tags($_POST["arabic_board"]));
  $phd = (empty($_POST["phd"])) ? "":"\n\n🟧 سنوات الخبرة بعد الدكتوراه ⬅️ ".trim(strip_tags($_POST["phd"]));
  $dataflow = trim(strip_tags($_POST["dataflow"])); //radio - important
  $bromotic = trim(strip_tags($_POST["bromotic"])); //radio - important
  $lic = trim(strip_tags($_POST["lic"])); //radio - important
  $board_or_f = trim(strip_tags($_POST["board_or_f"])); //radio - important
  $what_board_or_f = (empty($_POST["what_board_or_f"])) ? "":"\n\n🟧 ما هي البورد أو الزمالة الأُخرى؟ ⬅️ ".trim(strip_tags($_POST["what_board_or_f"])); //hidden
  $exp_board_or_f = (empty($_POST["exp_board_or_f"])) ? "":"\n\n🟧 سنوات الخبرة بعدها؟ ⬅️ ".trim(strip_tags($_POST["exp_board_or_f"])); //hidden
  $exp_master = trim(strip_tags($_POST["exp_master"])); //select - important
  $stayed = trim(strip_tags($_POST["stayed"])); //select - important
  $exp5 = (empty($_POST["exp5"])) ? "":"\n\n🟧 الدولة\الدول التي قضيت بها خبرة 5 سنين ⬅️ ".implode(" ▫️ ", $_POST["exp5"]); //select
  $newdataflow = trim(strip_tags($_POST["newdataflow"])); // radio - important
  $con = ($_POST["con"] == "نعم") ? "ساري":"لا يوجد"; //radio - important
  $condate = (empty($_POST["condate"])) ? "":"\n\n🟧 عقدك الحالي ينتهي بتاريخ ⬅️ ".str_replace("-", "/", trim(strip_tags($_POST["condate"]))); //hidden - date
  $city = trim(strip_tags($_POST["city"])); //radio - important
  $c_true = (empty($_POST["c_true"])) ? "":"\n\n🔲 ما هي المدن/المدينة التي ترغب العمل بها؟ ⬅️ ".trim(strip_tags($_POST["c_true"])); //hidden - important
  $notes = (empty($_POST["notes"])) ? "":"\n\n🔲 ملاحظات ⬅️ ".trim(strip_tags($_POST["notes"]));