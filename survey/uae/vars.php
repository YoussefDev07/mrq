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
  $master = (empty($_POST["master"])) ? "":"\n\n🟥 سنوات الخبرة بعد الماجستير ⬅️ ".trim(strip_tags($_POST["master"]));
  $phd = (empty($_POST["phd"])) ? "":"\n\n🟥 سنوات الخبرة بعد الدكتوراه ⬅️ ".trim(strip_tags($_POST["phd"]));
  $f = (empty($_POST["f"])) ? "":"\n\n🟥 سنوات الخبرة بعد الزمالة ⬅️ ".trim(strip_tags($_POST["f"]));
  $dataflow = trim(strip_tags($_POST["dataflow"])); //select - important
  $pro = trim(strip_tags($_POST["pro"])); //select - important
  $protype = (empty($_POST["protype"])) ? "":"\n\n🟥 ما نوع البرومتيك؟ ⬅️ ".trim(strip_tags($_POST["protype"])); // hidden - important
  $procon = (empty($_POST["procon"])) ? "":"\n\n🟥 هل معك برومتريك سعودي وتود تحويله الى برومتريك إماراتي؟ ⬅️ ".trim(strip_tags($_POST["procon"])); // hidden - radio - important
  $uexp = trim(strip_tags($_POST["uexp"])); // radio - important
  $dexp = (empty($_POST["dexp"]) || $_POST["dexp"] == "none") ? "":"\n\n🟥 ما هي عدد سنوات خبرتك بالإمارات؟ ⬅️ ".trim(strip_tags($_POST["dexp"])); // hidden - select - important
  $city = trim(strip_tags($_POST["city"])); //radio - important
  $c_true = (empty($_POST["c_true"])) ? "":"\n\n🟥 ما هي المدن/المدينة التي ترغب العمل بها؟ ⬅️ ".implode(" ▪ ", $_POST["c_true"]); //hidden - select - important
  $travel = trim(strip_tags($_POST["travel"])); //select - important
  $papers = trim(strip_tags($_POST["papers"])); //select - important
  $covid = trim(strip_tags($_POST["covid"])); //radio - important
  $allow = trim(strip_tags($_POST["allow"])); //radio - important
  $notes = (empty($_POST["notes"])) ? "":"\n\n⬛ ملاحظات ⬅️ ".trim(strip_tags($_POST["notes"]));