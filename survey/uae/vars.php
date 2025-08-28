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
  $master = (empty($_POST["master"])) ? "":"\n\n🟥 سنوات الخبرة بعد الماجستير ⬅️ ".trim(strip_tags($_POST["master"]));
  $phd = (empty($_POST["phd"])) ? "":"\n\n🟥 سنوات الخبرة بعد الدكتوراه ⬅️ ".trim(strip_tags($_POST["phd"]));
  $f = (empty($_POST["f"])) ? "":"\n\n🟥 سنوات الخبرة بعد الزمالة ⬅️ ".trim(strip_tags($_POST["f"]));
  $dataflow = trim(strip_tags($_POST["dataflow"])); //select - required
  $pro = trim(strip_tags($_POST["pro"])); //select - required
  $protype = (empty($_POST["protype"])) ? "":"\n\n🟥 ما نوع البرومتيك؟ ⬅️ ".trim(strip_tags($_POST["protype"])); // hidden - required
  $procon = (empty($_POST["procon"])) ? "":"\n\n🟥 هل معك برومتريك سعودي وتود تحويله الى برومتريك إماراتي؟ ⬅️ ".trim(strip_tags($_POST["procon"])); // hidden - radio - required
  $uexp = trim(strip_tags($_POST["uexp"])); // radio - required
  $dexp = (empty($_POST["dexp"]) || $_POST["dexp"] == "none") ? "":"\n\n🟥 ما هي عدد سنوات خبرتك بالإمارات؟ ⬅️ ".trim(strip_tags($_POST["dexp"])); // hidden - select - required
  $city = trim(strip_tags($_POST["city"])); //radio - required
  $c_true = (empty($_POST["c_true"])) ? "":"\n\n🟥 ما هي المدن/المدينة التي ترغب العمل بها؟ ⬅️ ".implode(" ▪ ", $_POST["c_true"]); //hidden - select - required
  $travel = trim(strip_tags($_POST["travel"])); //select - required
  $papers = trim(strip_tags($_POST["papers"])); //select - required
  $covid = trim(strip_tags($_POST["covid"])); //radio - required
  $allow = trim(strip_tags($_POST["allow"])); //radio - required
  $notes = (empty($_POST["notes"])) ? "":"\n\n⬛ ملاحظات ⬅️ ".trim(strip_tags($_POST["notes"]));