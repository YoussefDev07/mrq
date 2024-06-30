<?php require_once "../master/connect.php"; ?>
<html lang="ar" type="text/html">
 <head>
  <!--meta-->
   <meta charset = "utf-8"/>
   <meta name = "viewport" content = "width=device-width, initial-scale=0.55"/>
   <meta name = "theme-color" content = "#185a50"/>
   <meta name = "color-scheme" content = "light"/>
   <meta name = "author" content = "Youssef Dev"/>
   <meta name = "owner" content = "أشرف يوسف داوود"/>
   <meta name = "copyright" content = "Kawader Medical"/>
   <meta name = "google" content = "notranslate"/>
   <meta name = "robots" content = "none"/>
   <meta name = "title" content = "الإستبيانات"/>
   <meta name = "twitter:card" content = "summary"/>
   <meta name = "twitter:url" content = "http://localhost/www/mrq/admin/surveys.php"/>
   <meta name = "twitter:title" content = "الإستبيانات"/>
   <meta name = "twitter:image" content = "../assets/images/icon.png"/>
   <meta name = "twitter:image:alt" content = "Icon"/>
   <meta name = "twitter:creator" content = "@YoussefDev7"/>
   <meta name = "twitter:creator:id" content = "1427454968232022016"/>
   <meta property = "og:type" content = "website"/>
   <meta property = "og:url" content = "/"/>
   <meta property = "og:site_name" content = "Medical Recruitment Questionnaire"/>
   <meta property = "og:title" content = "الإستبيانات"/>
   <meta property = "og:image" content = "../assets/images/icon.png"/>
   <meta property = "og:image:alt" content = "Icon"/>
   <meta property = "fb:admins" content = "100090928069955"/>
  <!--style-->
   <style>
    /*slidebar*/
     .slidebar {
       min-height: calc(100vh - 75px);
     }

    /*@media: slidebar (mobile)*/
     @media (max-width:767px) {
       .slidebar {
        min-height: calc(100vh - 150px);
       }
     }
   </style>
  <!--link-->
   <link rel="canonical" href="http://localhost/www/mrq/admin/surveys.php"/>
   <link rel="icon" type="image/png" href="../assets/images/icon.png"/>
   <link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
   <link rel="stylesheet" media="all" href="../assets/libs/css/fontawesome.css"/>
  <!--title-->
   <title>الإستبيانات</title>
  <!--script-->
   <script src="../assets/libs/js/jquery.js"></script>
   <script type="application/javascript" src="../assets/js/script.js" async></script>
   <script type="application/javascript" src="../assets/js/admin.js" defer></script>
   <noscript>لفتح الإستبيانات (JavaScript) الرجاء فتح الجافا سكريبت</noscript>
 </head>
 <body>
  <!--loading-->
   <div id="loading">
    <!--load-->
     <embed class="load" src="../assets/svg/load.svg"></embed>
   </div>
  <!--container-->
   <div class="_container">
    <!--header-->
     <header>
      <!--time-->
       <nav class="time">
        <span id="time"></span>
       </nav>
      <!--filter-->
       <button type="button" title="فلترة الإستبيانات" class="filter" id="filter"><i class="fas fa-sliders-h"></i></button>
     </header>
    <!--filter-box-->
     <div class="filter-box" id="filterBox">
      <span>
       <button type="button"><i class="fas fa-times"></i></button>
       <h3>فلترة الإستبيانات</h3>
       <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
        <?php
         function survey_type($name) {
           $type = (isset($_GET["survey_type"])) ? $_GET["survey_type"]:"";

           if ($type == $name) {
             echo "selected";
           }
         }
        ?>
        <select name="survey_type">
         <option disabled selected>نوع الإستبيان</option>
         <optgroup label="ــــــــــــــــــــــــــــــــــــــــــــــــ"></optgroup>
         <option value="all" <?php survey_type("all"); ?>>الكل</option>
         <option value="ksa" <?php survey_type("ksa"); ?>>المملكة العربية السعودية</option>
         <option value="ksa_in" <?php survey_type("ksa_in"); ?>>السعودية (مقيم داخل المملكة)</option>
         <option value="ksa_out" <?php survey_type("ksa_out"); ?>>السعودية (خارج المملكة)</option>
         <option value="uae" <?php survey_type("uae"); ?>>الإمارات العربية المتحدة</option>
         <option value="omn" <?php survey_type("omn"); ?>>سلطنة عمان</option>
         <option value="ger" disabled <?php survey_type("ger"); ?>>المانيا</option>
        </select>
        <?php
          $survey_name = (isset($_GET["name"])) ? $_GET["name"]:"";
          $survey_country = (isset($_GET["country"])) ? $_GET["country"]:"";
          $survey_spec = (isset($_GET["spec"])) ? $_GET["spec"]:"";
          $survey_phone = (isset($_GET["phone"])) ? $_GET["phone"]:"";
          $survey_from_age = (isset($_GET["from_age"])) ? $_GET["from_age"]:"";
          $survey_to_age = (isset($_GET["to_age"])) ? $_GET["to_age"]:"";
        ?>
        <input type="text" name="name" maxlength="250" placeholder="الاسم" autocomplete="off" value="<?php echo $survey_name; ?>">
        <input type="text" name="country" maxlength="100" minlength="3" placeholder="الجنسية" autocomplete="off" value="<?php echo $survey_country; ?>">
        <input type="text" name="spec" maxlength="150" placeholder="التخصص" autocomplete="off" value="<?php echo $survey_spec; ?>">
        <input type="tel" name="phone" maxlength="20" minlength="8" placeholder="رقم الجوال" autocomplete="off" value="<?php echo $survey_phone; ?>">
        <div class="age">
         <label>العمر</label>
         <div class="age-inputs">
          <input type="number" id="fromAge" name="from_age" min="24" placeholder="من" autocomplete="off" value="<?php echo $survey_from_age; ?>">
          <input type="number" id="toAge" name="to_age" max="65" placeholder="إلى" autocomplete="off" value="<?php echo $survey_to_age; ?>">
         </div>
        </div>
        <input type="submit" id="submitFilter" name="filter" value="تعيين">
        <a href="./surveys.php">إعادة التعيين</a>
       </form>
      </span>
     </div>
    <!--main-->
     <main>
      <!--slidebar-->
       <section class="slidebar">
        <!--surveys-->
         <ul class="surveys">
          <?php
           if (isset($_GET["survey_type"]) && $_GET["survey_type"] == "all") {
            if (isset($_GET["survey_type"]) && empty($_GET["name"])) {
              $type_filter = " 1 ";
             }
             else if (isset($_GET["survey_type"]) && !empty($_GET["name"])) {
              $type_filter = " 1 AND";
             }
           }
           else if (isset($_GET["survey_type"]) && $_GET["survey_type"] == "ksa") {
            if (isset($_GET["survey_type"]) && empty($_GET["name"])) {
              $type_filter = " type IN ('ksa_in', 'ksa_out')";
             }
             else if (isset($_GET["survey_type"]) && !empty($_GET["name"])) {
              $type_filter = " type IN ('ksa_in', 'ksa_out') AND";
             }
           }
           else if (isset($_GET["survey_type"]) && empty($_GET["name"])) {
            $type_filter = " type = '".$_GET["survey_type"]."'";
           }
           else if (isset($_GET["survey_type"]) && !empty($_GET["name"])) {
            $type_filter = " type = '".$_GET["survey_type"]."' AND";
           }
           else {
            $type_filter = null;
           }

           $name_filter = (empty($_GET["name"])) ? "":" name LIKE '%".$_GET["name"]."%'";
           $country_filter = (empty($_GET["country"])) ? "":" country LIKE '%".$_GET["country"]."%'";
           $spec_filter = (empty($_GET["spec"])) ? "":" spec LIKE '%".$_GET["spec"]."%'";
           $phone_filter = (empty($_GET["phone"])) ? "":" phone = '".$_GET["phone"]."'";
           $age_filter = (empty($_GET["from_age"]) && empty($_GET["to_age"])) ? "":" age BETWEEN ".$_GET["from_age"]." AND ".$_GET["to_age"];

           if ($country_filter != "") { $spec_filter = (empty($_GET["spec"])) ? "":" AND spec LIKE '%".$_GET["spec"]."%'"; }
           if ($country_filter != "" || $spec_filter != "") { $age_filter = (empty($_GET["from_age"]) && empty($_GET["to_age"])) ? "":" AND age BETWEEN ".$_GET["from_age"]." AND ".$_GET["to_age"]; }

           $surveys = (isset($_GET["filter"])) ? $conn -> query("SELECT * FROM surveys WHERE $type_filter $name_filter $country_filter $spec_filter $phone_filter $age_filter ORDER BY id DESC"):$conn -> query("SELECT * FROM surveys ORDER BY id DESC");
           while ($survey = $surveys -> fetch()):

           if ($survey["type"] == "ksa_in") {
             $survey["type"] = "السعودية (مقيم)";
           }
           else if ($survey["type"] == "ksa_out") {
             $survey["type"] = "السعودية (خارج المملكة)";
           }
           else if ($survey["type"] == "uae") {
             $survey["type"] = "الإمارات";
           }
           else if ($survey["type"] == "omn") {
             $survey["type"] = "عمان";
           }
          ?>
          <li class="survey">
           <div>
            <span><strong>نوع الإستبيان:</strong><?php echo $survey["type"]; ?></span>
           </div>
           <div>
            <span><strong>اسم الطبيب:</strong><?php echo $survey["name"]; ?></span>
            <span><strong>جنسية الطبيب:</strong><?php echo $survey["country"]; ?></span>
            <span><strong>تخصص الطبيب:</strong><?php echo $survey["spec"]; ?></span>
            <span><strong>جوال الطبيب:</strong><a href="tel:<?php echo $survey["phone"]; ?>"><?php echo $survey["phone"]; ?></a></span>
           </div>
           <div>
            <a href="https://wa.me/<?php echo str_replace("+", "", str_replace(" ", "", $survey["whatsapp"])); ?>" target="_blank">واتساب</a>
            <button type="button" id="<?php echo $survey["id"]; ?>">المزيد</button>
           </div>
          </li>
          <?php endwhile; ?>
         </ul>
       </section>
     </main>
   </div>
 </body>
</html>