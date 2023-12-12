<?php
  #form
  $email = $_POST["email"]; //important
  $name = $_POST["name"]; //important
  $country = $_POST["country"]; //important
  $town = $_POST["town"]; //important
  $spec = $_POST["spec"]; //important
  $whatsapp = $_POST["whatsapp"]; //important
  $phone = $_POST["phone"]; //important
  $age = $_POST["age"]; //important
  $exp = $_POST["exp"]; //important
  $master = (!$_POST["master"]) ? "":"\n\n🟧 سنوات الخبرة بعد الماجستير ⬅️ ".$_POST["master"];
  $e_f = (!$_POST["e_f"]) ? "":"\n\n🟧 سنوات الخبرة بعد الزمالة المصرية ⬅️ ".$_POST["e_f"];
  $arabic_board = (!$_POST["arabic_board"]) ? "":"\n\n🟧 سنوات الخبرة بعد البورد العربي ⬅️ ".$_POST["arabic_board"];
  $phd = (!$_POST["phd"]) ? "":"\n\n🟧 سنوات الخبرة بعد الدكتوراة ⬅️ ".$_POST["phd"];
  $dataflow = $_POST["dataflow"]; //radio - important
  $bromotic = $_POST["bromotic"]; //radio - important
  $lic = $_POST["lic"]; //radio - important
  $board_or_f = $_POST["board_or_f"]; //radio - important
  $what_board_or_f = (!$_POST["what_board_or_f"]) ? "":"\n\n🟧 ما هي البورد أو الزمالة الأُخرى؟ ⬅️ ".$_POST["what_board_or_f"]; //hidden
  $exp_board_or_f = (!$_POST["exp_board_or_f"]) ? "":"\n\n🟧 سنوات الخبرة بعدها؟ ⬅️ ".$_POST["exp_board_or_f"]; //hidden
  $exp_master = $_POST["exp_master"]; //select - important
  $stayed = $_POST["stayed"]; //select - important
  $exp5 = (!$_POST["exp5"]) ? "":"\n\n🟧 الدولة\الدول التي قضيت بها خبرة 5 سنين ⬅️ ".implode(" ▫️ ", $_POST["exp5"]); //select
  $newdataflow = $_POST["newdataflow"]; // radio - important
  $con = ($_POST["con"] == "نعم") ? "ساري":"لا يوجد"; //radio - important
  $condate = (!$_POST["condate"]) ? "":"\n\n🟧 عقدك الحالي ينتهي بتاريخ ⬅️ ".str_replace("-", "/", $_POST["condate"]); //hidden - date
  $city = $_POST["city"]; //radio - important
  $c_true = (!$_POST["c_true"]) ? "":"\n\n🔲 ما هي المدن/المدينة التي ترغب العمل بها؟ ⬅️ ".trim($_POST["c_true"]); //hidden - important
  $notes = (empty($_POST["notes"])) ? "":"\n\n🔲 ملاحظات ⬅️ ".trim($_POST["notes"]);