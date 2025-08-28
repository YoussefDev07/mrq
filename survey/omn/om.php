<?php
  session_start();
  include "../../includes/php/header.php";
?>
 <!--main-->
  <main>
   <!--head-->
    <div class="head">
     <h1>استبيان العمل الطبي</h1>
     <p>في سلطنة عمان</p>
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
      <span>سنوات الخبرة بعد الزمالة المصرية</span>
      <class>
       <button type="button" id="add_e_f">+</button>
       <input type="number" name="e_f" minlength="1" maxlength="2" placeholder="إجابتك" autocomplete="off">
       <button type="button" id="remove_e_f">-</button>
      </class>
     </div>

     <div>
      <span>سنوات الخبرة بعد البورد العربي</span>
      <class>
       <button type="button" id="add_arabic_board">+</button>
       <input type="number" name="arabic_board" minlength="1" maxlength="2" placeholder="إجابتك" autocomplete="off">
       <button type="button" id="remove_arabic_board">-</button>
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
      <span class="req">هل معك بورد أو زمالة أُخرى؟</span>
      <class>
       <label>
        <a>نعم</a>
        <input type="radio" class="board_or_f" name="board_or_f" value="نعم" required>
       </label>
       <label>
        <a>لا</a>
        <input type="radio" class="board_or_f" name="board_or_f" value="لا" required>
       </label>
      </class>
     </div>

     <div id="what_board_or_f" style="display:none">
			<span class="req">ما هي البورد أو الزمالة الأُخرى؟</span>
			<class>
			 <input type="text" name="what_board_or_f" id="what_board_or_f_input" placeholder="إجابتك" autocomplete="off">
			</class>
		 </div>

     <div id="exp_board_or_f" style="display:none">
      <span class="req">سنوات الخبرة بعدها؟</span>
      <class>
       <button type="button" id="add_exp_board_or_f">+</button>
       <input type="number" name="exp_board_or_f" id="exp_board_or_f_input" minlength="1" maxlength="2" placeholder="إجابتك" autocomplete="off">
       <button type="button" id="remove_exp_board_or_f">-</button>
      </class>
     </div> 

     <div>
      <span class="req">هل معك داتا فلو عماني؟</span>
      <class>
       <label>
        <a>نعم</a>
        <input type="radio" class="dataflow" name="dataflow" value="نعم" required>
       </label>
       <label>
        <a>لا</a>
        <input type="radio" class="dataflow" name="dataflow" value="لا" required>
       </label>
      </class>
     </div>

     <div>
      <span class="req">هل معك برومتريك عماني؟</span>
      <class>
       <label>
        <a>نعم</a>
        <input type="radio" class="bromotic" name="bromotic" value="نعم" required>
       </label>
       <label>
        <a>لا</a>
        <input type="radio" class="bromotic" name="bromotic" value="لا" required>
       </label>
      </class>
     </div>

     <div>
      <span class="req">هل معك ترخيص عماني؟</span>
      <class>
       <label>
        <a>نعم</a>
        <input type="radio" class="lic" name="lic" value="نعم" required>
       </label>
       <label>
        <a>لا</a>
        <input type="radio" class="lic" name="lic" value="لا" required>
       </label>
      </class>
     </div>

     <div>
		  <span class="req long">سنوات الخبرة داخل السعودية او الدولة الخليجية الموجود بها بعد الماجستير</span>
			 <class>
			  <select name="exp_master">
				 <option value="none" disabled selected>اختر</option>
				 <optgroup label="ــــــــــــــــــــ"></optgroup>
				 <option>لا يوجد</option>
				 <option>أقل من سنة</option>
				 <option>سنة</option>
				 <option>سنتين</option>
				 <option>3 سنين</option>
				 <option>4 سنين</option>
				 <option>5 سنين</option>
				 <option>6 سنين</option>
				 <option>7 سنين</option>
				 <option>8 سنين</option>
				 <option>9 سنين</option>
				 <option>10 سنين</option>
				 <option>أكثر من 10 سنين</option>
				</select>
			 </class>
		 </div>

		 <div>
			<span class="req">هل مازلت مقيماً بالخليج؟</span>
			<class>
			 <select name="stayed">
				<option value="none" disabled selected>اختر</option>
				<optgroup label="ـــــــــــــــــــــــــــــــــــ"></optgroup>
				 <option>لم أُقيم بالخليج من قبل</option>
				 <option>نعم</option>
				 <option>لا</option>
			 </select>
			</class>
		 </div>

		 <div class="multiple">
		  <span>الدولة\الدول التي قضيت بها خبرة 5 سنين</span>
			<class>
			 <select name="exp5[]" multiple>
				<option>🇸🇦 المملكة العربية السعودية</option>
				<option>🇦🇪 الإمارات العربية المتحدة</option>
				<option>🇰🇼 الكويت</option>
				<option>🇧🇭 البحرين</option>
				<option>🇶🇦 قطر</option>
				<option>🇴🇲 سلطنة عمان</option>
			 </select>
			</class>
		 </div>

     <div>
      <span class="req long">هل قمت بعمل داتا فلو حديثة على شهادة الخبرة الخليجية؟</span>
      <class>
       <label>
        <a>نعم</a>
        <input type="radio" name="newdataflow" value="نعم" required>
       </label>
       <label>
        <a>لا</a>
        <input type="radio" name="newdataflow" value="لا" required>
       </label>
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
    return "*🟠 استبيان توظيف 🟠*".
    "\n".
    "```للتقدم على وظيفة طبية```".
    "\n".
    "*🇴🇲 بسلطنة عمان*".
    "\n🔷🔶🔷🔶🔷🔶🔷🔶\n".
    "🔲 البريد الإلكتروني ⬅️ ".$email.
    "\n\n".
    "🔲 الأسم الثلاثي ⬅️ ".$name.
    "\n\n".
    "🟧 الجنسية ⬅️ ".$country.
    "\n\n".
    "🔲 مدينة الإقامة الحالية ⬅️ ".$town.
    "\n\n".
    "🟧 التخصص ⬅️ ".$spec.
    "\n\n".
    "🔲 رقم جوال (واتس) ⬅️ ".$whatsapp.
    "\n\n".
    "🔲 رقم جوال (اتصال) ⬅️ ".$phone.
    "\n\n".
    "🟧 العمر ⬅️ ".$age.
    "\n\n".
    "🔲 سنوات الخبرة بعد التخرج ⬅️ ".$exp.
    $master.
		$e_f.
		$arabic_board.
		$phd.
		"\n\n".
    "🟧 هل معك بورد أو زمالة أُخرى؟ ⬅️ ".$board_or_f.
		$what_board_or_f.
		$exp_board_or_f.
		"\n\n".
		"🟧 هل معك داتا فلو عماني؟ ⬅️ ".$dataflow.
		"\n\n".
		"🟧 هل معك برومتريك عماني؟ ⬅️ ".$bromotic.
		"\n\n".
		"🟧 معك ترخيص عماني؟ ⬅️ ".$lic.
		"\n\n".
		"🟧 عدد سنوات الخبرة داخل السعودية او الدولة الخليجية الموجود بها بعد الماجستير ⬅️ ".$exp_master.
		"\n\n".
		"🔲 هل مازلت مقيماً بالخليج؟ ⬅️ ".$stayed.
		$exp5.
		"\n\n".
		"🟧 هل قمت بعمل داتا فلو حديثة على شهادة الخبرة الخليجية؟ ⬅️ ".$newdataflow.
		"\n\n".
		"🟧 عقدك الحالي ⬅️ ".$con.
    $condate.
		"\n\n".
		"🔲 هل ترغب في العمل بمدن معينة؟ ⬅️ ".$city.
    $c_true.
		$notes;
  }
   if (isset($_POST["submit"])) {
     require_once "../../master/connect.php";
     include "./vars.php";

     if (empty($_SESSION["send_to"])) {
       $stmt = $conn -> prepare("INSERT INTO surveys (type, email, name, country, spec, whatsapp, phone, age, message, send_date, send_time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
       $stmt -> execute(["omn", $email, $name, $country, $spec, $whatsapp, $phone, $age, msg(), date("Y-m-d"), date("H:i:s")]);

       $mobile = "201559003611";
     }
     else {
       $stmt = $conn -> prepare("INSERT INTO surveys (type, email, name, country, spec, whatsapp, phone, age, message, send_date, send_time, destination) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
       $stmt -> execute(["omn", $email, $name, $country, $spec, $whatsapp, $phone, $age, msg(), date("Y-m-d"), date("H:i:s"), $_SESSION["send_to"]]);

       $mobile = $_SESSION["send_to"];
     }

		 $mrq = str_replace("🟧", "%F0%9F%9F%A7", str_replace("⬅️", "%E2%AC%85%EF%B8%8F", str_replace("🔲", "%F0%9F%94%B2", str_replace("🔶", "%F0%9F%94%B6", str_replace("🔷", "%F0%9F%94%B7", str_replace("🇴🇲", "%F0%9F%87%B4%F0%9F%87%B2", str_replace("🇸🇦", "%F0%9F%87%B8%F0%9F%87%A6", str_replace("🇦🇪", "%F0%9F%87%A6%F0%9F%87%AA", str_replace("🇰🇼", "%F0%9F%87%B0%F0%9F%87%BC", str_replace("🇧🇭", "%F0%9F%87%A7%F0%9F%87%AD", str_replace("🇶🇦", "%F0%9F%87%B6%F0%9F%87%A6", str_replace("🟠", "%F0%9F%9F%A0", str_replace("▫️", "%E2%96%AB%EF%B8%8F", str_replace("\n", "%0D%0A", str_replace(" ", "%20", msg())))))))))))))));

     #js
     print("<script>");
      echo 'const expression = /(iPhone|iPod|iPad)/i;
		  if (expression.test(navigator.platform)) {
	      window.open("whatsapp://send?text='.$mrq.'", "_self")
		  } else {
	      window.open("https://api.whatsapp.com/send/?phone='.$mobile.'&text='.$mrq.'", "_self")
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
  <script type="text/javascript" src="../../assets/js/om.js"></script>
<?php include "../../includes/html/footer.html"; ?>