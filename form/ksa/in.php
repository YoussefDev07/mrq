<?php include "../template/header.html"; ?>
 <!--main-->
  <main>
   <!--head-->
    <div class="head">
     <h1>استبيان العمل الطبي</h1>
     <p>في المملكة العربية السعودية (مقيم داخل المملكة)</p>
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
       <input type="text" name="country" maxlength="100" minlength="3" placeholder="إجابتك" autocomplete="off" required>
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
      <span class="req">رقم جوال (واتس)</span>
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
      <span>سنوات الخبرة بعد الدكتوراة</span>
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
      <span class="req">المهنة بالإقامة</span>
      <class>
       <input type="text" name="work" maxlength="100" placeholder="إجابتك" autocomplete="off" required>
      </class>
     </div>

     <div>
      <span class="req">التصنيف داخل المملكة</span>
      <class>
       <select name="job"  >
        <option value="none">اختر</option>
        <optgroup label="ــــــــــــــــــــ"></optgroup>
        <option>طبيب عام</option>
        <option>مقيم</option>
        <option>اخصائي</option>
        <option>اخصائي اول</option>
        <option>استشاري</option>
        <option>فني</option>
        <option>اخصائي غير طبيب</option>
        <option>صيدلي</option>
        <option>مدير تشغيل</option>
        <option>مدير طبي</option>
        <option>مدير مالي</option>
        <option>مدير تسويق</option>
        <option>طبيب تأمين</option>
        <option>مسؤول تأمين</option>
        <option>مسوق</option>
        <option>استقبال</option>
        <option>علاقات عامة</option>
        <option>محاسب مستوصف</option>
        <option>مهندس اجهزة طبية</option>
        <option>كول سنتر</option>
       </select>
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
        <option value="none">اختر</option>
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
      <span class="req">الوظيفة المتقدم لها؟</span>
      <class>
       <select name="job_submit"  >
        <option value="none">اختر</option>
        <optgroup label="ــــــــــ"></optgroup>
        <option>طبية</option>
        <option>إدارية</option>
       </select>
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
        <option value="none">اختر</option>
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
        <option value="none">اختر</option>
        <optgroup label="ــــــــ"></optgroup>
        <option>نعم</option>
        <option>لا</option>
        <option>نعم لكن شفهية</option>
       </select>
      </class>
     </div>

     <div>
      <span class="req">هل انت مسجل علي منصة قوي؟</span>
      <class>
       <label>
        <a>نعم</a>
        <input type="radio" value="نعم" name="strong" required>
       </label>
       <label>
        <a>لا</a>
        <input type="radio" value="لا" name="strong" required>
       </label>
      </class>
     </div>

     <div>
      <span class="req">الكفالة على</span>
      <class>
       <select name="warr" required>
        <option value="none">اختر</option>
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
    "🟪 الجنسية ⬅️ ".$country.
    "\n\n".
    "🔲 مدينة الإقامة الحالية ⬅️ ".$town.
    "\n\n".
    "🟪 التخصص ⬅️ ".$spec.
    "\n\n".
    "🔲 رقم جوال (واتس) ⬅️ ".$whatsapp.
    "\n\n".
    "🔲 رقم جوال (اتصال) ⬅️ ".$phone.
    "\n\n".
    "🟪 العمر ⬅️ ".$age.
    "\n\n".
    "🔲 سنوات الخبرة بعد التخرج ⬅️ ".$exp.
    $master.
    $phd.
    $f.
    "\n\n".
    "🔲 المهنة بالاقامة ⬅️ ".$work.
    "\n\n".
    "🟪 التصنيف داخل المملكة ⬅️ ".$job.
    "\n\n".
    "🟪 هل الترخيص ساري؟ ⬅️ ".$license.
    $license_true.
    $license_false.
    "\n\n".
    "🔲 عدد سنوات الخبرة داخل المملكة؟ ⬅️ ".$expert_in.
    "\n\n".
    "🔲 عدد سنوات الخبرة خارج المملكة؟ ⬅️ ".$expert_out.
    "\n\n".
    "🔲 الوظيفة المتقدم لها؟ ⬅️ ".$job_submit.
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
    "🔲 هل انت مسجل على منصة قوي؟ ⬅️ ".$strong.
    "\n\n".
    "🟪 الكفالة على ⬅️ ".$warr.
    "\n\n".
    "🔲 هل ترغب في العمل بمدن معينة؟ ⬅️ ".$city.
    $c_true.
		$notes;
  }
   if (isset($_POST["submit"])) {
     include "./vars/in.php";
		 $file = "../logs/$name.txt";
     file_put_contents($file, msg());

		 $mrq = str_replace("🟪", "%F0%9F%9F%AA", str_replace("⬅️", "%E2%AC%85%EF%B8%8F", str_replace("🔲", "%F0%9F%94%B2", str_replace("🔶", "%F0%9F%94%B6", str_replace("🔷", "%F0%9F%94%B7", str_replace("📥", "%F0%9F%93%A5", str_replace("🇸🇦", "%F0%9F%87%B8%F0%9F%87%A6", str_replace("🟣", "%F0%9F%9F%A3", str_replace("\n", "%0D%0A", str_replace(" ", "%20", file_get_contents($file)))))))))));

    #js
    print("<script>");
     echo 'const expression = /(iPhone|iPod|iPad)/i;
		 if (expression.test(navigator.platform)) {
	     window.open("whatsapp://send?text='.$mrq.'", "_self");
		 } else {
	     window.open("https://api.whatsapp.com/send/?phone=201559003611&text='.$mrq.'", "_self");
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
  <script type="text/javascript" src="./sa.js"></script>
<?php include "../template/footer.html"; ?>