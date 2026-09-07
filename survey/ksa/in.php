<?php
  session_start();
  include "../../includes/php/header.php";
?>
 <!--main-->
  <main>
   <!--head-->
    <div class="head">
     <h1>استبيان العمل الطبي</h1>
     <p>في المملكة العربية السعودية (مقيم داخل المملكة)</p>
    </div>
   <!--form-->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="form">

     <div>
      <span class="req">عنوان البريد الإلكتروني</span>
       <class>
        <input type="text" name="email" placeholder="بريدك الإلكتروني" autocomplete="on" required>
       </class>
     </div>

     <div>
      <span class="req">الاسم الثلاثي</span>
      <class>
       <input type="text" name="name" maxlength="250" minlength="11" placeholder="اسمك الثلاثي" autocomplete="off" required>
      </class>
     </div>

     <div>
      <span class="req">الجنسية</span>
      <class>
       <select name="nationality" required>
        <?php include "../../includes/html/nationalities.html"; ?>
       </select>
      </class>
     </div>

     <div>
      <span class="req">تاريخ الميلاد</span>
      <class>
       <input type="date" name="birth_date" min="1945-01-01" max="<?= date('Y-m-d'); ?>" autocomplete="off" required>
      </class>
     </div>

     <div>
      <span class="req">رقم الجوال (اتصال)</span>
      <class>
       <input type="hidden" name="phone" id="phoneHidden" autocomplete="off">
       <input type="tel" id="phoneNumber" maxlength="18" minlength="6" autocomplete="off" required>
       <input list="tels" id="phoneCode" min="2" max="5" autocomplete="off" value="+966" required>
       <?php include "../../includes/html/countries_codes.html"; ?>
      </class>
     </div>

     <div class="multiple">
      <span class="req">رقم الجوال (واتساب)</span>
      <class>
       <input type="hidden" name="whatsapp" id="whatsappHidden" autocomplete="off">
       <input type="tel" id="whatsappNumber" maxlength="18" minlength="6" autocomplete="off" required disabled>
       <input list="tels" id="whatsappCode" min="2" max="5" autocomplete="off" value="+966" required disabled>
       <?php include "../../includes/html/countries_codes.html"; ?>
       <br>
       <label class="checkbox-container">
        <input type="checkbox" id="anotherNumberForWhatsapp">
        <div class="checkmark"></div>
        استخدام رقم واتساب مختلف
       </label>
      </class>
     </div>

     <div>
      <span class="req">مدينة الإقامة الحالية</span>
      <class>
       <input list="saudicities" name="town" placeholder="إجابتك" autocomplete="off" required>
       <?php include "../../includes/html/saudicities.html"; ?>
      </class>
     </div>

     <div>
      <span class="req">التصنيف داخل المملكة</span>
      <class>
       <select name="job" id="job" required>
        <option value="none" disabled selected>اختر</option>
        <optgroup label="ــــــــــــــــــــ"></optgroup>
        <optgroup label="طبي">
         <option>طبيب عام بشري</option>
         <option>طبيب عام أسنان</option>
         <option>مقيم</option>
         <option>اخصائي</option>
         <option>اخصائي اول</option>
         <option>استشاري</option>
         <option>فني</option>
         <option>اخصائي غير طبيب</option>
         <option>صيدلي</option>
        </optgroup>
        <optgroup label="إداري">
         <option>مدير تنفيذي</option>
         <option>مدير إداري</option>
         <option>مدير تشغيل</option>
         <option>مدير طبي</option>
         <option>مدير مالي</option>
         <option>مدير تسويق</option>
         <option>مدير مبيعات</option>
         <option>طبيب تأمين</option>
         <option>مسؤول تأمين</option>
         <option>مسوق</option>
         <option>استقبال</option>
         <option>علاقات عامة</option>
         <option>محاسب مستوصف</option>
         <option>مهندس اجهزة طبية</option>
         <option>كول سنتر</option>
        </optgroup>
       </select>
      </class>
     </div>

     <div id="spec" style="display:none">
      <span class="req">التخصص</span>
      <class>
       <select name="spec">
        <?php include "../../includes/html/specialties.html"; ?>
       </select>
      </class>
     </div>

     <div>
      <span class="req">المهنة بالإقامة</span>
      <class>
       <input type="text" name="work" maxlength="100" placeholder="إجابتك" autocomplete="off" required>
      </class>
     </div>

     <div>
      <span class="req">تاريخ التخرج</span>
      <class>
       <input type="month" name="exp" min="1960-01" max="<?= date('Y-m'); ?>" autocomplete="off" required>
      </class>
     </div>

     <div class="postgraduate" style="display:none">
      <span class="opt">تاريخ الحصول على الماجستير</span>
      <class>
       <input type="month" name="master" class="postgraduateInput" min="1964-01" max="<?= date('Y-m'); ?>" autocomplete="off">
      </class>
     </div>

     <div class="postgraduate" style="display:none">
      <span class="opt">تاريخ الحصول على الدكتوراه</span>
      <class>
       <input type="month" name="phd" class="postgraduateInput" min="1964-01" max="<?= date('Y-m'); ?>" autocomplete="off">
      </class>
     </div>

     <div class="postgraduate" style="display:none">
      <span class="opt">تاريخ الحصول على الزمالة</span>
      <class>
       <input type="month" name="f" class="postgraduateInput" min="1964-01" max="<?= date('Y-m'); ?>" autocomplete="off">
      </class>
     </div>

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

     <div id="license_false" style="display:none">
      <span class="req">الترخيص منتهي من</span>
      <class>
       <select id="l_false" name="license_false" required>
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

     <div>
      <span class="req">عدد سنوات الخبرة داخل المملكة؟</span>
      <class>
       <button type="button" id="add_expert_in">+</button>
       <input type="number" name="expert_in" min="0" max="40" placeholder="إجابتك" autocomplete="off" required>
       <button type="button" id="remove_expert_in">-</button>
      </class>
     </div>

     <div>
      <span class="req">عدد سنوات الخبرة خارج المملكة؟</span>
      <class>
       <button type="button" id="add_expert_out">+</button>
       <input type="number" name="expert_out" min="0" max="40" placeholder="إجابتك" autocomplete="off" required>
       <button type="button" id="remove_expert_out">-</button>
      </class>
     </div>

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

     <div>
      <span class="req">هل هناك موافقة من الكفيل علي نقل الكفالة؟</span>
      <class>
       <select name="pat" required>
        <option value="none" disabled selected>اختر</option>
        <optgroup label="ــــــــ"></optgroup>
        <option>نعم</option>
        <option>لا</option>
        <option>نعم لكن شفهية</option>
       </select>
      </class>
     </div>

     <div>
      <span class="req">هل انت مسجل علي منصة قوى؟</span>
      <class>
       <label>
        <a>نعم</a>
        <input type="radio" value="نعم" name="qiwa" required>
       </label>
       <label>
        <a>لا</a>
        <input type="radio" value="لا" name="qiwa" required>
       </label>
      </class>
     </div>

     <div>
      <span class="req">الكفالة على</span>
      <class>
       <select name="warr" required>
        <option value="none" disabled selected>اختر</option>
        <optgroup label="ـــــــــــــــــــــــــ"></optgroup>
        <option>وزارة الصحة</option>
        <option>مؤسسة خاصة</option>
        <option>فرد</option>
       </select>
      </class>
     </div>

     <div>
      <span class="req">هل ترغب بالعمل في مدن معينة؟</span>
      <class>
       <label>
        <a>نعم</a>
        <input type="radio" class="c" value="نعم" name="city" required>
       </label>
       <label>
        <a>لا</a>
        <input type="radio" class="c" value="لا" name="city" required>
       </label>
      </class>
     </div>

     <div id="city_true" style="display:none">
      <span class="req">ما هي المدن/المدينة التي ترغب العمل بها؟</span>
      <class>
       <input type="text" id="c_true" name="c_true" placeholder="إجابتك" autocomplete="off" required>
      </class>
     </div>

		 <div>
		  <span class="opt">ملاحظات تود ذكرها</span>
			<class>
			 <textarea name="notes" placeholder="ملاحظاتك..."></textarea>
			</class>
		 </div>

    <!--foot-->
     <section class="foot">
      <!--submit-->
       <button type="submit" name="submit">إرسال</button>
      <!--reset-->
       <strong class="reset">محو الإستبيان <i class="fas fa-times"></i></strong>
     </section>

    </form>
  </main>
 <!--php-->
  <?php
  function msg() {
    include "./vars/in.php";
    return "*🟣 استبيان توظيف 🟣*".
    "\n".
    "```للتقدم على وظيفة طبية```".
    "\n".
    "*🇸🇦 بالمملكة العربية السعودية*".
    "\n".
    "*📥 مقيم داخل المملكة*".
    "\n🔷🔶🔷🔶🔷🔶🔷🔶\n".
    "🔲 البريد الإلكتروني ⬅️ ".$email.
    "\n\n".
    "🔲 الأسم الثلاثي ⬅️ ".$name.
    "\n\n".
    "🟪 الجنسية ⬅️ ".$nationality.
    "\n\n".
    "🟪 العمر ⬅️ {age}".
    "\n\n".
    "🔲 رقم الجوال (اتصال) ⬅️ ".$phone.
    "\n\n".
    "🔲 رقم الجوال (واتس) ⬅️ ".$whatsapp.
    "\n\n".
    "🔲 مدينة الإقامة الحالية ⬅️ ".$town.
    "\n\n".
    "🟪 التصنيف داخل المملكة ⬅️ ".$job.
    $spec.
    "\n\n".
    "🔲 المهنة بالاقامة ⬅️ ".$work.
    "\n\n".
    "🔲 سنوات الخبرة بعد التخرج ⬅️ {exp}".
    $master.
    $phd.
    $f.
    "\n\n".
    "🟪 هل الترخيص ساري؟ ⬅️ ".$license.
    $license_true.
    $license_false.
    "\n\n".
    "🔲 عدد سنوات الخبرة داخل المملكة؟ ⬅️ ".$expert_in.
    "\n\n".
    "🔲 عدد سنوات الخبرة خارج المملكة؟ ⬅️ ".$expert_out.
    "\n\n".
    "🟪 هل الإقامة سارية؟ ⬅️ ".$est.
    $est_true.
    $est_false.
		"\n\n".
		"🟪 عقدك الحالي ⬅️ ".$con.
    $condate.
    "\n\n".
    "🔲 هل هناك موافقة من الكفيل علي نقل الكفالة؟ ⬅️ ".$pat.
    "\n\n".
    "🔲 هل انت مسجل على منصة قوى؟ ⬅️ ".$qiwa.
    "\n\n".
    "🟪 الكفالة على ⬅️ ".$warr.
    "\n\n".
    "🔲 هل ترغب في العمل بمدن معينة؟ ⬅️ ".$city.
    $c_true.
		$notes;
  }
   if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
     require_once "../../master/connect.php";
     include "./vars/in.php";

     $mobile = (isset($_SESSION["send_to"])) ? $_SESSION["send_to"]:null;

     $stmt = $conn -> prepare("INSERT INTO surveys (type, email, name, nationality, birth_date, phone, whatsapp, spec, job, graduation, master, phd, f, message, send_date, send_time, destination) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt -> execute(["ksa_in", $email, $name, $nationality, $birth_date, $phone, $whatsapp, $spec_row, $job, $exp, $master_raw, $phd_raw, $f_raw, msg(), date("Y-m-d"), date("H:i:s"), $mobile]);

     $mrq_search = array("{age}", "{exp}", "{master}", "{phd}", "{f}");
     $mrq_replace = array($age ?? 0, $exp_years ?? 0, $master_years ?? 0, $phd_years ?? 0, $f_years ?? 0);
     $mrq = str_replace($mrq_search, $mrq_replace, msg());
     print("<script>");
     echo "localStorage.setItem('type', 'ksa_in');";
     echo "localStorage.setItem('email', '".$email."');";
     echo "localStorage.setItem('num', '".$mobile."');";
     echo "localStorage.setItem('mrq', ".json_encode($mrq).");";
     echo "localStorage.setItem('msg', `".urlencode($mrq)."`);";
     print("</script>");
     $mrq = urlencode($mrq);

     if (isset($_SESSION["send_to"])) {
      print("<script>");
      echo "location.href = '../send.php?method=whatsapp&msg=$mrq'";
      print("</script>");
     } else {
      print("<script>");
      echo "location.href = '../send.php?msg=$mrq'";
      print("</script>");
     }
   }
  ?>
 <!--remove-->
  <div class="remove" style="display:none">
   <section>
    <p>هل أنت متأكد من محو الإستبيان؟ <i class="fas fa-exclamation-triangle"></i></p>
    <span>
     <button type="button">لا</button>
     <input type="reset" form="form" value="نعم">
    </span>
   </section>
  </div>
 <!--js-->
  <script type="text/javascript" src="../../assets/js/surveys/sa.js"></script>
<?php include "../../includes/html/footer.html"; ?>