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
  $master = (!$_POST["master"]) ? "":"\n\n🟥 سنوات الخبرة بعد الماجستير ⬅️ ".$_POST["master"];
  $phd = (!$_POST["phd"]) ? "":"\n\n🟥 سنوات الخبرة بعد الدكتوراة ⬅️ ".$_POST["phd"];
  $f = (!$_POST["f"]) ? "":"\n\n🟥 سنوات الخبرة بعد الزمالة ⬅️ ".$_POST["f"];
  $dataflow = $_POST["dataflow"]; //select - important
  $pro = $_POST["pro"]; //select - important
  $protype = (!$_POST["protype"]) ? "":"\n\n🟥 ما نوع البرومتيك؟ ⬅️ ".trim($_POST["protype"]); // hidden - important
  $procon = (!$_POST["procon"]) ? "":"\n\n🟥 هل معك برومتريك سعودي وتود تحويله الى برومتريك إماراتي؟ ⬅️ ".$_POST["procon"]; // hidden - radio - important
  $uexp = $_POST["uexp"]; // radio - important
  $dexp = ($_POST["dexp"] == "none") ? "":"\n\n🟥 ما هي عدد سنوات خبرتك بالإمارات؟ ⬅️ ".$_POST["dexp"]; // hidden - select - important
  $city = $_POST["city"]; //radio - important
  $c_true = (!$_POST["c_true"]) ? "":"\n\n🟥 ما هي المدن/المدينة التي ترغب العمل بها؟ ⬅️ ".implode(" ▪ ", $_POST["c_true"]); //hidden - select - important
  $travel = $_POST["travel"]; //select - important
  $papers = $_POST["papers"]; //select - important
  $covid = $_POST["covid"]; //radio - important
  $allow = $_POST["allow"]; //radio - important
  $notes = (empty($_POST["notes"])) ? "":"\n\n⬛ ملاحظات ⬅️ ".trim($_POST["notes"]);