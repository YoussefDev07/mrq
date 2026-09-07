<?php
  session_start();
  include "../../includes/php/header.php";
?>
 <!--main-->
  <main>
   <!--head-->
    <div class="head">
     <h1>استبيان العمل الطبي</h1>
     <p>في المملكة العربية السعودية (خارج المملكة)</p>
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
       <input type="text" name="town" maxlength="100" placeholder="إجابتك" autocomplete="off" required>
      </class>
     </div>

     <div>
      <span class="req">التصنيف</span>
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
       <select name="spec" class="required">
        <?php include "../../includes/html/specialties.html"; ?>
       </select>
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

     <div class="postgraduate" style="display:none">
      <span class="req">هل معك داتا فلو؟</span>
      <class>
       <select name="dataflow" class="required">
        <option value="none" disabled selected>اختر</option>
        <optgroup label="ــــــــــــــــــــ"></optgroup>
        <option>نعم</option>
        <option>لا</option>
        <option>تحت الإجراء</option>
       </select>
      </class>
      </span>
     </div>

     <div id="dataflowTrue" style="display:none">
      <span class="req">تاريخ الحصول على الداتا فلو</span>
      <class>
       <input type="month" name="dataflow_date" id="df" class="postgraduateInput" min="1964-01" max="<?= date('Y-m'); ?>" autocomplete="off">
      </class>
     </div>

     <div class="postgraduate" style="display:none">
      <span class="req">هل أنت حاصل على برومتريك؟</span>
      <class>
       <select name="prometric" class="required">
        <option value="none" disabled selected>اختر</option>
        <optgroup label="ــــــــــــــــــــ"></optgroup>
        <option>نعم</option>
        <option>لا</option>
        <option>تحت الإجراء</option>
       </select>
      </class>
      </span>
     </div>

     <div id="prometricTrue" style="display:none">
      <span class="req">تاريخ الحصول على برومتريك</span>
      <class>
       <input type="month" name="prometric_date" id="pro" class="postgraduateInput" min="1964-01" max="<?= date('Y-m'); ?>" autocomplete="off">
      </class>
     </div>

     <div>
      <span class="req">هل لك خبرة سابقة بالمملكة؟</span>
      <class>
       <label>
        <a>نعم</a>
        <input type="radio" class="kdexp" name="kdexp" value="نعم" required>
       </label>
       <label>
        <a>لا</a>
        <input type="radio" class="kdexp" name="kdexp" value="لا" required>
       </label>
      </class>
     </div>

     <div id="expert_in_sa_true" style="display:none">
      <span class="req">كم سنة خبرة في المملكة؟</span>
      <class>
       <button type="button" id="add_expert_in_sa">+</button>
       <input type="number" id="kdexp_true" name="expert_in_sa" min="0" max="40" placeholder="إجابتك" autocomplete="off">
       <button type="button" id="remove_expert_in_sa">-</button>
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

     <div>
      <span class="req">هل كل الأوراق جاهزة وموثقة؟</span>
      <class>
       <label>
        <a>نعم</a>
        <input type="radio" name="papers" value="نعم" required>
       </label>
       <label>
        <a>لا</a>
        <input type="radio" name="papers" value="لا" required>
       </label>
      </class>
     </div>

     <div>
      <span class="req long">هل تسمح لك وزارة الصحة بإجراء اجازة والسفر؟</span>
      <class>
       <label>
        <a>نعم</a>
        <input type="radio" name="allow" value="نعم" required>
       </label>
       <label>
        <a>لا</a>
        <input type="radio" name="allow" value="لا" required>
       </label>
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
    include "./vars/out.php";
    return "*🔵 استبيان توظيف 🔵*".
    "\n".
    "```للتقدم على وظيفة طبية```".
    "\n".
    "*🇸🇦 بالمملكة العربية السعودية*".
    "\n".
    "*📤 خارج المملكة*".
    "\n🔷🔶🔷🔶🔷🔶🔷🔶\n".
    "🔲 البريد الإلكتروني ⬅️ ".$email.
    "\n\n".
    "🔲 الأسم الثلاثي ⬅️ ".$name.
    "\n\n".
    "🟦 الجنسية ⬅️ ".$nationality.
    "\n\n".
    "🟦 العمر ⬅️ {age}".
    "\n\n".
    "🔲 رقم جوال (اتصال) ⬅️ ".$phone.
    "\n\n".
    "🔲 رقم جوال (واتس) ⬅️ ".$whatsapp.
    "\n\n".
    "🔲 مدينة الإقامة الحالية ⬅️ ".$town.
    "\n\n".
    "🟦 التصنيف ⬅️ ".$job.
    $spec.
    "\n\n".
    "🔲 سنوات الخبرة بعد التخرج ⬅️ {exp}".
    $master.
    $phd.
    $f.
    $dataflow.
    $dataflow_date.
    $prometric.
    $prometric_date.
    "\n\n".
    "🔲 هل لك خبرة سابقة بالمملكة؟ ⬅️ ".$kdexp.
    $expert_in_sa.
    "\n\n".
    "🔲 هل ترغب بالعمل في مدينة معينة بالمملكة؟ ⬅️ ".$city.
    $c_true.
    "\n\n".
    "🔲 متى تكون جاهز للسفر؟ ⬅️ ".$travel.
    "\n\n".
    "🔲 هل كل الأوراق جاهزة وموثقة؟ ⬅️ ".$papers.
    "\n\n".
    "🔲 هل تسمح لك وزارة الصحة بإجراء اجازة والسفر؟ ⬅️ ".$allow.
		$notes;
  }
   if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
     require_once "../../master/connect.php";
     include "./vars/out.php";

     $mobile = (isset($_SESSION["send_to"])) ? $_SESSION["send_to"]:null;

     $stmt = $conn -> prepare("INSERT INTO surveys (type, email, name, nationality, birth_date, phone, whatsapp, spec, job, graduation, master, phd, f, dataflow, prometric, message, send_date, send_time, destination) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
     $stmt -> execute(["ksa_out", $email, $name, $nationality, $birth_date, $phone, $whatsapp, $spec, $job, $exp, $master_raw, $phd_raw, $f_raw, $dataflow_raw, $prometric_raw, msg(), date("Y-m-d"), date("H:i:s"), $mobile]);

     $mrq_search = array("{age}", "{exp}", "{master}", "{phd}", "{f}", "{dataflow}", "{prometric}");
     $mrq_replace = array($age ?? 0, $exp_years ?? 0, $master_years ?? 0, $phd_years ?? 0, $f_years ?? 0, $dataflow_years ?? 0, $prometric_years ?? 0);
     $mrq = str_replace($mrq_search, $mrq_replace, msg());
     print("<script>");
     echo "localStorage.setItem('type', 'ksa_out');";
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