<html lang="ar" type="text/html">
 <head>
  <!--meta-->
   <meta charset = "utf-8"/>
   <meta name = "theme-color" content = "#422464"/>
   <meta name = "color-scheme" content = "light"/>
   <meta name = "author" content = "Youssef Dev"/>
   <meta name = "google" content = "notranslate"/>
   <meta name = "robots" content = "none"/>
   <meta name = "description" content = "استبيان توظيف للتقدم على وظيفة طبية"/>
   <meta name = "twitter:card" content = "summary"/>
   <meta property = "og:type" content = "website"/>
   <meta property = "og:url" content = "http://localhost/www/Kawader%20Medical/update.php"/>
   <meta property = "og:site_name" content = "mrq"/>
   <meta property = "og:title" content = "Kawader Medical"/>
   <meta property = "og:description" content = "استبيان توظيف للتقدم على وظيفة طبية"/>
   <meta property = "og:image" content = "./assets/images/icon.png"/>
   <meta property = "og:image:alt" content = "Icon"/>
  <!--link-->
   <link rel="me" href="https://youssefdev.42web.io"/>
   <link rel="icon" type="image/png" href="./assets/images/icon.png"/>
   <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
   <link rel="stylesheet" type="text/css" href="./assets/css/survey.css"/>
   <link rel="stylesheet" media="all" href="./assets/libs/css/fontawesome.css"/>
  <!--title-->
   <title>استبيان العمل الطبي</title>
  <!--script-->
   <script src="./assets/libs/js/jquery.js"></script>
   <script type="text/javascript" src="./assets/js/script.js" defer></script>
   <script type="text/javascript" src="./assets/js/surveys/update.js" defer></script>
   <noscript>لفتح الإستبيان (JavaScript) الرجاء فتح الجافا سكريبت</noscript>
 </head>
 <body>
  <!--wait-->
	 <div class="wait">
	  <span>
		 <p><embed src="./assets/svg/wait.svg"></embed>جارِ التحميل...</p>
		</span>
	 </div>
  <!--container-->
   <div class="_container">
    <!--header-->
     <header>
      <!--logo-->
       <div class="logo">
        <img title="كوادر الطب" src="./assets/images/icon.png" alt="logo">
       </div>
      <!--switch-->
       <button type="button" class="switch"></button>
     </header>
    <!--main-->
     <main>
      <!--head-->
       <div class="head">
        <h1>تحديث بيانات الاستبيان</h1>
       </div>
      <!--form-->
       <?php require_once "./master/connect.php"; ?>
       <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="form">

       <?php
         $email = htmlspecialchars($_POST["email"]);
         $survey = $conn -> query("SELECT * FROM surveys WHERE email = '$email' ORDER BY id DESC") -> fetchAll(PDO::FETCH_ASSOC); $survey = $survey[0];
         $survey_data = $conn -> query("SELECT * FROM surveys_data WHERE email = '$email' ORDER BY id DESC") -> fetchAll(PDO::FETCH_ASSOC); $survey_data = $survey_data[0];
       ?>

       <?php if (empty($survey["birth_date"])): ?>
        <div>
         <span class="req">تاريخ الميلاد</span>
         <class>
          <input type="date" name="birth_date" min="1945-01-01" max="<?= date('Y-m-d'); ?>" autocomplete="off" required>
         </class>
        </div>
       <?php endif; ?>
        
        <div>
         <span class="req">رقم الجوال (اتصال)</span>
         <class>
          <input type="hidden" name="phone" id="phoneHidden" autocomplete="off" value="<?= $survey["phone"]; ?>">
          <input type="tel" id="phoneNumber" maxlength="18" minlength="6" autocomplete="off" value="<?= $survey_data["phone_number"]; ?>" required>
          <input list="tels" id="phoneCode" min="2" max="5" autocomplete="off" value="<?= $survey_data["phone_code"]; ?>" required>
          <?php include "./includes/html/countries_codes.html"; ?>
         </class>
        </div>

        <div class="multiple">
         <span class="req">رقم الجوال (واتساب)</span>
         <class>
          <input type="hidden" name="whatsapp" id="whatsappHidden" value="<?= $survey["whatsapp"]; ?>" autocomplete="off">
          <input type="tel" id="whatsappNumber" maxlength="18" minlength="6" autocomplete="off" value="<?= $survey_data["whatsapp_number"]; ?>" required disabled>
          <input list="tels" id="whatsappCode" min="2" max="5" autocomplete="off" value="<?= $survey_data["whatsapp_code"]; ?>" required disabled>
          <?php include "./includes/html/countries_codes.html"; ?>
          <br>
          <label class="checkbox-container">
           <input type="checkbox" id="anotherNumberForWhatsapp" <?php if ($survey["whatsapp"] != $survey["phone"]) { echo "checked"; } ?>>
           <div class="checkmark"></div>
           استخدام رقم واتساب مختلف
          </label>
         </class>
        </div>

        <div>
         <span class="req">مدينة الإقامة الحالية</span>
          <class>
           <input list="saudicities" name="town" placeholder="إجابتك" autocomplete="off" value="<?= $survey_data["town"]; ?>" required>
           <?php if ($survey["type"] == "ksa_in") { include "./includes/html/saudicities.html"; } ?>
          </class>
        </div>

        <?php if ($survey["job_type"] == "طبي" && empty($survey["master"])): ?>
         <div>
          <span class="opt">تاريخ الحصول على الماجستير</span>
          <class>
           <input type="month" name="master" min="1964-01" max="<?= date('Y-m'); ?>" autocomplete="off">
          </class>
         </div>
        <?php endif; ?>

        <?php if ($survey["job_type"] == "طبي" && empty($survey["phd"])): ?>
         <div>
          <span class="opt">تاريخ الحصول على الدكتوراه</span>
          <class>
           <input type="month" name="phd" min="1964-01" max="<?= date('Y-m'); ?>" autocomplete="off">
          </class>
         </div>
        <?php endif; ?>

        <?php if ($survey["job_type"] == "طبي" && empty($survey["f"])): ?>
         <div>
          <span class="opt">تاريخ الحصول على الزمالة</span>
          <class>
           <input type="month" name="f" min="1964-01" max="<?= date('Y-m'); ?>" autocomplete="off">
          </class>
         </div>
        <?php endif; ?>

        <?php if ($survey["type"] == "ksa_out" && $survey["job_type"] == "طبي" && empty($survey["dataflow"])): ?>
         <div>
          <span class="opt">تاريخ الحصول على الداتا فلو</span>
          <class>
           <input type="month" name="dataflow_date" min="1964-01" max="<?= date('Y-m'); ?>" autocomplete="off">
          </class>
         </div>
        <?php endif; ?>

        <?php if ($survey["type"] == "ksa_out" && $survey["job_type"] == "طبي" && empty($survey["prometric"])): ?>
         <div>
          <span class="opt">تاريخ الحصول على برومتريك</span>
          <class>
           <input type="month" name="prometric_date" min="1964-01" max="<?= date('Y-m'); ?>" autocomplete="off">
          </class>
         </div>
        <?php endif; ?>

        <?php if ($survey["type"] == "ksa_in"): ?>
         <div>
          <span class="req">الترخيص</span>
          <class>
           <label>
            <a>ساري</a>
            <input type="radio" class="l" value="نعم" name="license" required>
           </label>
           <label>
            <a>منتهي</a>
            <input type="radio" class="l" value="لا" name="license" required>
           </label>
          </class>
         </div>

         <div id="license_true" style="display:none">
          <span class="req">الترخيص ساري حتى</span>
          <class>
           <input type="date" id="l_true" name="license_true" required>
          </class>
         </div>
        <?php endif; ?>

        <?php if ($survey["type"] == "ksa_in"): ?>
        <div>
         <span class="req">عدد سنوات الخبرة داخل المملكة؟</span>
         <class>
          <button type="button" id="add_expert_in">+</button>
          <input type="number" name="expert_in" min="0" max="40" placeholder="إجابتك" autocomplete="off" value="<?= $survey_data["expert_in"]; ?>" required>
          <button type="button" id="remove_expert_in">-</button>
         </class>
        </div>

        <div>
         <span class="req">عدد سنوات الخبرة خارج المملكة؟</span>
         <class>
          <button type="button" id="add_expert_out">+</button>
          <input type="number" name="expert_out" min="0" max="40" placeholder="إجابتك" autocomplete="off" value="<?= $survey_data["expert_out"]; ?>" required>
          <button type="button" id="remove_expert_out">-</button>
         </class>
        </div>
        <?php endif; ?>

        <?php if ($survey["type"] == "ksa_out"): ?>
         <div>
          <span class="req">عدد سنوات الخبرة في المملكة العربية السعودية؟</span>
          <class>
           <button type="button" id="add_expert_in_sa">+</button>
           <input type="number" id="kdexp" name="expert_in_sa" min="0" max="40" placeholder="إجابتك" value="<?= $survey_data["kdexp"]; ?>" autocomplete="off">
           <button type="button" id="remove_expert_in_sa">-</button>
          </class>
         </div>
        <?php endif; ?>

        <?php if ($survey["type"] == "ksa_in"): ?>
         <div>
          <span class="req">الإقامة</span>
          <class>
           <label>
            <a>سارية</a>
            <input type="radio" class="e" value="نعم" name="est" required>
           </label>
           <label>
            <a>منتهية</a>
            <input type="radio" class="e" value="لا" name="est" required>
           </label>
          </class>
         </div>

         <div id="est_true" style="display:none">
          <span class="req">الإقامة سارية حتى</span>
          <class>
           <input type="date" id="e_true" name="est_true" required>
          </class>
         </div>

         <div id="est_false" style="display:none">
          <span class="req">الإقامة منتهية من</span>
          <class>
           <select id="e_false" name="est_false" required>
            <option value="none" disabled selected>اختر</option>
            <optgroup label="ــــــــــــــــــــ"></optgroup>
            <option>أقل من شهر</option>
            <option>شهر</option>
            <option>شهرين</option>
            <option>3 شهور</option>
            <option>4 شهور</option>
            <option>5 شهور</option>
            <option>6 شهور</option>
            <option>أكثر من 6 شهور</option>
            <option>سنة</option>
            <option>سنتين</option>
            <option>3 سنين</option>
            <option>أكثر من 3 سنين</option>
           </select> 
          </class>
         </div>
        <?php endif; ?>

        <?php if ($survey["type"] == "ksa_in"): ?>
         <div>
		      <span class="req">عقدك الحالي</span>
			     <class>
			      <label>
             <a>ساري</a>
             <input type="radio" class="con" value="نعم" name="con" required>
            </label>
            <label>
             <a>لا يوجد</a>
             <input type="radio" class="con" value="لا" name="con" required>
            </label>
			     </class>
		     </div>

          <div id="condate" style="display:none">
           <span class="req">عقدك الحالي ينتهي بتاريخ</span>
           <class>
            <input type="date" id="cond" name="condate" required>
           </class>
          </div>
        <?php endif; ?>

        <?php if ($survey["type"] == "ksa_out"): ?>
         <div>
          <span class="req">متى تكون جاهز للسفر؟</span>
          <class>
           <select name="travel" required>
            <option value="none" disabled selected>اختر</option>
            <optgroup label="ــــــــــــــــــــــ"></optgroup>
            <option>جاهز فوراً</option>
            <option>أقل من شهر</option>
            <option>شهر</option>
            <option>شهرين</option>
            <option>3 شهور</option>
            <option>3-6 شهور</option>
            <option>أُخرى</option>
           </select>
          </class>
         </div>
        <?php endif; ?>

         <div>
		      <span class="opt">ملاحظات تود ذكرها</span>
			    <class>
			     <textarea name="notes" placeholder="ملاحظاتك..."></textarea>
			    </class>
		     </div>

       </form>
     <main>
    <!--footer-->
     <footer>
      <p><time></time> جميع الحقوق محفوظة <i class="far fa-copyright"></i></p>
      <a href="https://www.04000.tel" target="_blank"><img src="./assets/images/ehotline.webp" alt="www.04000.tel"></a>
     </footer>
   </div>
 </body>
</html>