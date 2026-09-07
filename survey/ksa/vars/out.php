<?php
  #form
  $email = trim(strip_tags($_POST["email"])); //required
  $name = trim(strip_tags($_POST["name"])); //required
  $nationality = trim(strip_tags($_POST["nationality"])); //required
  $birth_date = trim(strip_tags($_POST["birth_date"])); //date - required
  $phone = trim(strip_tags($_POST["phone"])); //required
  $whatsapp = trim(strip_tags($_POST["whatsapp"])); //required
  $town = trim(strip_tags($_POST["town"])); //required
  $job = trim(strip_tags($_POST["job"])); //select - required
  $spec = (empty($_POST["spec"])) ? "":"🟦 التخصص ⬅️ ".trim(strip_tags($_POST["spec"])); //select - hidden
  $exp = trim(strip_tags($_POST["exp"]))."-01"; //date - required
  $master = (empty($_POST["master"])) ? "":"\n\n🟦 سنوات الخبرة بعد الماجستير ⬅️ {master}"; //date - hidden
  $phd = (empty($_POST["phd"])) ? "":"\n\n🟦 سنوات الخبرة بعد الدكتوراه ⬅️ {phd}"; //date - hidden
  $f = (empty($_POST["f"])) ? "":"\n\n🟦 سنوات الخبرة بعد الزمالة ⬅️ {f}"; //date - hidden
  $dataflow = (empty($_POST["dataflow"])) ? "":"\n\n🟦 هل معك داتا فلو؟ ⬅️ ".trim(strip_tags($_POST["dataflow"])); //date - hidden - required
  $dataflow_date = (empty($_POST["dataflow_date"])) ? "":"\n\n🟦 سنوات الخبرة بعد الداتا فلو ⬅️ {dataflow}"; //date - hidden - required
  $prometric = (empty($_POST["prometric"])) ? "":"\n\n🟦 هل أنت حاصل على برومتريك؟ ⬅️ ".trim(strip_tags($_POST["prometric"])); //date - hidden - required
  $prometric_date = (empty($_POST["prometric_date"])) ? "":"\n\n🟦 سنوات الخبرة بعد البروميتك ⬅️ {prometric}"; //date - hidden - required
  $kdexp = trim(strip_tags($_POST["kdexp"])); //radio - required
  $expert_in_sa = (empty($_POST["master"])) ? "":"\n\n🔲 سنوات الخبرة بعد الماجستير ⬅️ ".trim(strip_tags($_POST["expert_in_sa"])); //hidden
  $city = trim(strip_tags($_POST["city"])); //radio - required
  $c_true = (empty($_POST["c_true"])) ? "":"\n\n🔲 ما هي المدن/المدينة التي ترغب العمل بها؟ ⬅️ ".trim(strip_tags($_POST["c_true"])); //hidden - required
  $travel = trim(strip_tags($_POST["travel"])); //select - required
  $papers = trim(strip_tags($_POST["papers"])); //radio - required
  $allow = trim(strip_tags($_POST["allow"])); //radio - required
  $notes = (empty($_POST["notes"])) ? "":"\n\n🔲 ملاحظات ⬅️ ".trim(strip_tags($_POST["notes"]));

  #raw
  $spec_raw = (empty($_POST["spec"])) ? null:trim(strip_tags($_POST["spec"]));
  $master_raw = (empty($_POST["master"])) ? null:trim(strip_tags($_POST["master"]))."-01";
  $phd_raw = (empty($_POST["phd"])) ? null:trim(strip_tags($_POST["phd"]))."-01";
  $f_raw = (empty($_POST["f"])) ? null:trim(strip_tags($_POST["f"]))."-01";
  $dataflow_raw = (empty($_POST["dataflow_date"])) ? null:trim(strip_tags($_POST["dataflow_date"]))."-01";
  $prometric_raw = (empty($_POST["prometric_date"])) ? null:trim(strip_tags($_POST["prometric_date"]))."-01";

  #converted
  $get_years = function(?string $date_raw): int {
    if (empty($date_raw)) return 0;
    return (new DateTime($date_raw)) -> diff(new DateTime()) -> y;
  };

  $age = $get_years($birth_date);
  $exp_years = $get_years($exp);
  $master_years = $get_years($master_raw);
  $phd_years = $get_years($phd_raw);
  $f_years = $get_years($f_raw);
  $dataflow_years = $get_years($dataflow_raw);
  $prometric_years = $get_years($prometric_raw);