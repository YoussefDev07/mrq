<?php
  session_start();
  include "../../includes/php/header.php";
?>
 <!--main-->
  <main>
   <!--head-->
    <div class="head">
     <h1>استبيان العمل الطبي</h1>
     <p>في الإمارات العربية المتحدة</p>
    </div>
   <!--form-->
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" id="form">

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
       <input type="text" name="nationality" maxlength="100" minlength="3" placeholder="إجابتك" autocomplete="off" required>
      </class>
     </div>

     <div>
      <span class="req">مدينة الإقامة الحالية</span>
      <class>
       <input type="text" name="town" maxlength="100" placeholder="إجابتك" autocomplete="off" required>
      </class>
     </div>

     <div>
      <span class="req">التخصص</span>
      <class>
       <input type="text" name="spec" maxlength="150" placeholder="إجابتك" autocomplete="off" required>
      </class>
     </div>

     <div>
      <span class="req">رقم جوال (واتساب)</span>
      <class>
       <input type="tel" name="whatsapp" maxlength="20" minlength="8" placeholder="الرقم" autocomplete="off" required>
      </class>
     </div>

     <div>
      <span class="req">رقم جوال (اتصال)</span>
      <class>
       <input type="tel" name="phone" maxlength="20" minlength="8" placeholder="الرقم" autocomplete="off" required>
      </class>
     </div>

     <div>
      <span class="req">العمر</span>
      <class>
       <button type="button" id="add_age">+</button>
       <input type="number" name="age" min="24" max="65" placeholder="إجابتك" autocomplete="off" required>
       <button type="button" id="remove_age">-</button>
      </class>
     </div>

     <div>
      <span class="req">سنوات الخبرة بعد التخرج</span>
      <class>
       <button type="button" id="add_exp">+</button>
       <input type="number" name="exp" min="0" max="40" placeholder="إجابتك" autocomplete="off" required>
       <button type="button" id="remove_exp">-</button>
      </class>
     </div>

     <div>
      <span>سنوات الخبرة بعد الماجستير</span>
      <class>
       <button type="button" id="add_master">+</button>
       <input type="number" name="master" minlength="1" maxlength="2" placeholder="إجابتك" autocomplete="off">
       <button type="button" id="remove_master">-</button>
      </class>
     </div>

     <div>
      <span>سنوات الخبرة بعد الدكتوراه</span>
      <class>
       <button type="button" id="add_phd">+</button>
       <input type="number" name="phd" minlength="1" maxlength="2" placeholder="إجابتك" autocomplete="off">
       <button type="button" id="remove_phd">-</button>
      </class>
     </div>

     <div>
      <span>سنوات الخبرة بعد الزمالة</span>
      <class>
       <button type="button" id="add_f">+</button>
       <input type="number" name="f" minlength="1" maxlength="2" placeholder="إجابتك" autocomplete="off">
       <button type="button" id="remove_f">-</button>
      </class>
     </div>

     <div>
      <span class="req">هل معك داتا فلو إماراتي؟</span>
      <class>
       <select name="dataflow" required>
        <option value="none" disabled selected>اختر</option>
        <optgroup label="ــــــــــــــــــــ"></optgroup>
        <option>نعم</option>
        <option>لا</option>
        <option>تحت الإجراء</option>
       </select>
      </class>
      </span>
     </div>

     <div>
      <span class="req">هل أنت حاصل على برومتريك إماراتي؟</span>
      <class>
       <select name="pro" id="pro" required>
        <option value="none" disabled selected>اختر</option>
        <optgroup label="ــــــــــــــــــــ"></optgroup>
        <option>نعم</option>
        <option>لا</option>
        <option>تحت الإجراء</option>
       </select>
      </class>
      </span>
     </div>

     <div id="protype" style="display:none">
      <span class="req">ما نوع البرومتريك؟</span>
      <class>
       <input type="text" name="protype" maxlength="255" placeholder="إجابتك" autocomplete="off" required>
      </class>
     </div>

     <div id="procon" style="display:none">
      <span class="req long">هل معك برومتريك سعودي وتود تحويله الى برومتريك إماراتي؟</span>
      <class>
       <label>
        <a>نعم</a>
        <input type="radio" name="procon" value="نعم" required>
       </label>
       <label>
        <a>لا</a>
        <input type="radio" name="procon" value="لا" required>
       </label>
      </class>
     </div>

     <div>
      <span class="req">هل لك خبرة سابقة بالإمارات؟</span>
      <class>
       <label>
        <a>نعم</a>
        <input type="radio" class="uexp" name="uexp" value="نعم" required>
       </label>
       <label>
        <a>لا</a>
        <input type="radio" class="uexp" name="uexp" value="لا" required>
       </label>
      </class>
     </div>

     <div id="dexp" style="display:none">
      <span class="req">ما هي عدد سنوات خبرتك بالإمارات؟</span>
      <class>
       <select name="dexp" required>
        <option value="none" disabled selected>اختر</option>
        <optgroup label="ــــــــــــــــــــ"></optgroup>
        <option>أقل من سنة</option>
        <option>سنة</option>
        <option>سنتين</option>
        <option>3 سنين</option>
        <option>4 سنين</option>
        <option>5 سنين</option>
        <option>أكثر من 5 سنين</option>
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

     <div class="multiple" id="city_true" style="display:none">
      <span class="req">ما هي المدن/المدينة التي ترغب العمل بها؟</span>
      <class>
       <select id="c_true" name="c_true[]" multiple required>
        <option>أبو ظبي</option>
        <option>دبي</option>
        <option>الشارقة</option>
        <option>العين</option>
        <option>عجمان</option>
        <option>رأس الخيمة</option>
       </select>
      </class>
     </div>

     <div>
      <span class="req">متى تكون جاهز للسفر؟</span>
      <class>
       <select name="travel" required>
        <option value="none" disabled selected>اختر</option>
        <optgroup label="ــــــــــ"></optgroup>
        <option>جاهز فوراً</option>
        <option>شهر</option>
        <option>شهرين</option>
        <option>3 شهور</option>
        <option>4 شهور</option>
        <option>5 شهور</option>
        <option>6 شهور أو أكثر</option>
       </select>
      </class>
     </div>

     <div>
      <span class="req">هل كل الأوراق جاهزة؟</span>
      <class>
       <select name="papers" required>
        <option value="none" disabled selected>اختر</option>
        <optgroup label="ـــــــــــــــ"></optgroup>
        <option>نعم</option>
        <option>لا</option>
        <option>جاري التوثيق</option>
       </select>
      </class>
     </div>

     <div>
      <span class="req">هل تم تطعيم كورونا؟</span>
      <class>
       <label>
        <a>نعم</a>
        <input type="radio" name="covid" value="نعم" required>
       </label>
       <label>
        <a>لا</a>
        <input type="radio" name="covid" value="لا" required>
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
		  <span>ملاحظات تود ذكرها</span>
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
    include "./vars.php";
    return "*🔴 استبيان توظيف 🔴*".
    "\n".
    "```للتقدم على وظيفة طبية```".
    "\n".
    "*🇦🇪 بالإمارات العربية المتحدة*".
    "\n🔷🔶🔷🔶🔷🔶🔷🔶\n".
    "⬛ البريد الإلكتروني ⬅️ ".$email.
    "\n\n".
    "⬛ الأسم الثلاثي ⬅️ ".$name.
    "\n\n".
    "🟥 الجنسية ⬅️ ".$country.
    "\n\n".
    "⬛ مدينة الإقامة الحالية ⬅️ ".$town.
    "\n\n".
    "🟥 التخصص ⬅️ ".$spec.
    "\n\n".
    "⬛ رقم جوال (واتس) ⬅️ ".$whatsapp.
    "\n\n".
    "⬛ رقم جوال (اتصال) ⬅️ ".$phone.
    "\n\n".
    "🟥 العمر ⬅️ ".$age.
    "\n\n".
    "⬛ سنوات الخبرة بعد التخرج ⬅️ ".$exp.
    $master.
    $phd.
    $f.
    "\n\n".
    "🟥 هل معك داتا فلو إماراتي؟ ⬅️ ".$dataflow.
    "\n\n".
    "🟥 هل أنت حاصل على برومتريك إماراتي؟ ⬅️ ".$pro.
    $protype.
    $procon.
    "\n\n".
    "🟥 هل لك خبرة سابقة بالإمارات؟ ⬅️ ".$uexp.
    $dexp.
    "\n\n".
    "⬛ هل ترغب بالعمل في مدينة معينة؟ ⬅️ ".$city.
    $c_true.
    "\n\n".
    "🟥 متى تكون جاهز للسفر؟ ⬅️ ".$travel.
    "\n\n".
    "⬛ هل كل الأوراق جاهزة وموثقة؟ ⬅️ ".$papers.
    "\n\n".
    "⬛ هل تم تطعيم كورونا؟ ⬅️ ".$covid.
    "\n\n".
    "⬛ هل تسمح لك وزارة الصحة بإجراء اجازة والسفر؟ ⬅️ ".$allow.
		$notes;
  }
   if (isset($_POST["submit"])) {
     require_once "../../master/connect.php";
     include "./vars.php";

     if (empty($_SESSION["send_to"])) {
       $stmt = $conn -> prepare("INSERT INTO surveys (type, email, name, country, spec, whatsapp, phone, age, message, send_date, send_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
       $stmt -> execute(["uae", $email, $name, $country, $spec, $whatsapp, $phone, $age, msg(), date("Y-m-d"), date("H:i:s")]);

       $mobile = "201559003611";
     }
     else {
       $stmt = $conn -> prepare("INSERT INTO surveys (type, email, name, country, spec, whatsapp, phone, age, message, send_date, send_time, destination) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
       $stmt -> execute(["uae", $email, $name, $country, $spec, $whatsapp, $phone, $age, msg(), date("Y-m-d"), date("H:i:s"), $_SESSION["send_to"]]);

       $mobile = $_SESSION["send_to"];
     }

		 $mrq = str_replace("🟥", "%F0%9F%9F%A5", str_replace("⬅️", "%E2%AC%85%EF%B8%8F", str_replace("⬛", "%E2%AC%9B", str_replace("🔶", "%F0%9F%94%B6", str_replace("🔷", "%F0%9F%94%B7", str_replace("🇦🇪", "%F0%9F%87%A6%F0%9F%87%AA", str_replace("🔴", "%F0%9F%94%B4", str_replace("▪", "%E2%96%AA", str_replace("\n", "%0D%0A", str_replace(" ", "%20", msg()))))))))));

     #js
     print("<script>");
      echo 'const expression = /(iPhone|iPod|iPad)/i;
		  if (expression.test(navigator.platform)) {
	      window.open("whatsapp://send?text='.$mrq.'", "_self");
		  }  else {
	      window.open("https://api.whatsapp.com/send/?phone='.$mobile.'&text='.$mrq.'", "_self");
		  }';
     print("</script>");
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
  <script type="text/javascript" src="../../assets/js/ae.js"></script>
<?php include "../../includes/html/footer.html"; ?>