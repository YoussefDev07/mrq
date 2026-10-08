<?php
  require_once "./master/connect.php";
  require_once "./includes/php/surveys_list.php";
?>
<html lang="ar" type="text/html">
 <head>
  <!--meta-->
   <meta charset="utf-8"/>
   <meta name="viewport" content="width=device-width, initial-scale=0.8"/>
   <meta name="theme-color" content="#422464"/>
   <meta name="color-scheme" content="light"/>
   <meta name="author" content="Youssef Ibrahim"/>
   <meta name="google" content="notranslate"/>
   <meta name="robots" content="none"/>
   <meta name="description" content="استبيانات التوظيف الطبي"/>
  <!--link-->
   <link rel="icon" type="image/png" href="./assets/images/icon.png"/>
   <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
   <link rel="stylesheet" type="text/css" href="./assets/css/surveys-list.css"/>
   <link rel="stylesheet" media="all" href="./assets/libs/css/fontawesome.css"/>
   <link rel="stylesheet" href="./assets/libs/css/toastr.css"/>
  <!--title-->
   <title>استبيانات الكوادر الطبية</title>
  <!--script-->
   <script src="./assets/libs/js/jquery.js"></script>
   <script src="./assets/libs/js/toastr.js"></script>
   <script type="text/javascript" src="./assets/js/script.js" defer></script>
   <script type="text/javascript" src="./assets/js/surveysList.js" defer></script>
   <noscript>لفتح الصفحة بالشكل الصحيح، الرجاء تفعيل الجافا سكريبت (JavaScript)</noscript>
 </head>
 <body>
  <!--loading-->
   <div id="loading">
    <!--load-->
     <embed class="load" src="./assets/svg/load.svg"></embed>
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
       <button type="button" title="تغيير المظهر" class="switch"></button>
     </header>
    <!--main-->
     <main class="surveys-main">
      <!--head-->
       <div class="surveys-head">
        <h1>استبيانات الكوادر الطبية</h1>
       </div>
      <!--toolbar-->
       <section class="surveys-toolbar">
        <span class="summary">إجمالي الاستبيانات: <?= $total; ?> | الصفحة <?= $page; ?> من <?= $total_pages; ?></span>
        <div class="toolbar-buttons">
         <button type="button" id="filterToolbar"><i class="fas fa-filter"></i> تصفية</button>
        </div>
       </section>
      <!--surveys-->
       <?php if (!empty($surveys)): ?>
        <section class="surveys-grid">
         <?php foreach ($surveys as $survey): ?>
          <?php
            $survey_data = array(
              "msg" => isset($survey["msg"]) ? $survey["msg"]:$survey["message"]
            );
            $message = survey_public_message($survey_data["msg"]);
            $age = (isset($survey["birth_date"])) ? survey_age($survey["birth_date"]):$survey["age"];
            $experience = survey_experience($survey["graduation"]);
          ?>
          <article class="survey-card">
           <div class="survey-card-head">
            <span class="name"><?= survey_escape($survey["name"]); ?></span>
            <span class="id">#<?= (int) $survey["id"]; ?></span>
           </div>
           <div class="survey-card-meta">
            <span><strong>المكان:</strong><?= survey_escape(survey_type_label($survey["type"])); ?></span>
            <span><strong>نوع الوظيفة:</strong><?= survey_escape(survey_job_type_label($survey["job_type"])); ?></span>
            <span><strong>الوظيفة:</strong><?= survey_escape($survey["job"]); ?></span>
            <?php if (!empty($survey["spec"])): ?>
             <span><strong>التخصص:</strong><?= survey_escape($survey["spec"]); ?></span>
            <?php endif; ?>
            <span><strong>الجنسية:</strong><?= survey_escape($survey["nationality"]); ?></span>
            <span><strong>العمر:</strong><?= ($age === null) ? 'غير محدد' : $age . ' سنة'; ?></span>
            <span><strong>الخبرة:</strong><?= ($experience === null) ? 'غير محدد' : $experience . ' سنة'; ?></span>
            <?php if (!empty($survey["town"])): ?>
             <span><strong>مدينة الاقامة:</strong><?= survey_escape($survey["town"]); ?></span>
            <?php endif; ?>
           </div>
           <textarea class="survey-message"><?= survey_escape($message); ?></textarea>
           <div class="survey-actions">
             <button type="button" class="show-message"><i class="fas fa-envelope-open-text"></i> الرسالة كاملة</button>
             <button type="button" class="copyID" data-id="<?= (int) $survey["id"]; ?>"><i class="far fa-copy"></i> نسخ المعرّف</button>
           </div>
          </article>
         <?php endforeach; ?>
        </section>
       <?php else: ?>
        <div class="surveys-empty">لا توجد استبيانات مطابقة لخيارات التصفية.</div>
       <?php endif; ?>
      <!--pagination-->
       <?php if ($total_pages > 1): ?>
        <nav class="pagination" aria-label="صفحات الاستبيانات">
         <?php if ($page > 1): ?>
          <a href="?page=1<?= $pagination_query; ?>" title="الأولى"><i class="fas fa-angle-double-right"></i></a>
          <a href="?page=<?= $page - 1; ?><?= $pagination_query; ?>" title="السابقة"><i class="fas fa-angle-right"></i></a>
         <?php endif; ?>
         <?php
           $start_page = max(1, $page - 2);
           $end_page = min($total_pages, $page + 2);
           for ($i = $start_page; $i <= $end_page; $i++):
         ?>
          <?php if ($i == $page): ?>
           <span class="active"><?= $i; ?></span>
          <?php else: ?>
           <a href="?page=<?= $i; ?><?= $pagination_query; ?>"><?= $i; ?></a>
          <?php endif; ?>
         <?php endfor; ?>
         <?php if ($page < $total_pages): ?>
          <a href="?page=<?= $page + 1; ?><?= $pagination_query; ?>" title="التالية"><i class="fas fa-angle-left"></i></a>
          <a href="?page=<?= $total_pages; ?><?= $pagination_query; ?>" title="الأخيرة"><i class="fas fa-angle-double-left"></i></a>
         <?php endif; ?>
        </nav>
       <?php endif; ?>
     </main>
    <!--footer-->
     <footer>
      <p><time></time> جميع الحقوق محفوظة <i class="far fa-copyright"></i></p>
      <a href="https://www.04000.tel" target="_blank"><img src="./assets/images/ehotline.webp" alt="www.04000.tel"></a>
     </footer>
   </div>
  <!--filter-->
   <div class="filter-box" id="filterBox">
    <span>
     <button type="button" id="closeFilter"><i class="fas fa-times"></i></button>
     <h3>تصفية الاستبيانات</h3>
     <form method="get" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <input type="text" name="q" autocomplete="off" placeholder="بحث بالاسم أو رقم الاستبيان" value="<?= survey_escape($filters['q']); ?>">
      <select name="type">
       <option value="">كل أماكن التقديم</option>
       <option value="ksa_in" <?= ($filters['type'] == 'ksa_in') ? 'selected' : ''; ?>>مقيم داخل المملكة</option>
       <option value="ksa_out" <?= ($filters['type'] == 'ksa_out') ? 'selected' : ''; ?>>خارج المملكة</option>
      </select>
      <select name="job_type">
       <option value="">كل الفئات</option>
       <option value="طبي" <?= ($filters['job_type'] == 'طبي') ? 'selected' : ''; ?>>طبي</option>
       <option value="إداري" <?= ($filters['job_type'] == 'إداري') ? 'selected' : ''; ?>>إداري</option>
      </select>
      <select name="job">
       <option value="">كل الوظائف</option>
       <?php foreach ($filter_jobs as $value): ?>
        <option value="<?= survey_escape($value); ?>" <?= ($filters['job'] === $value) ? 'selected' : ''; ?>><?= survey_escape($value); ?></option>
       <?php endforeach; ?>
      </select>
      <select name="spec">
       <option value="">كل التخصصات</option>
       <?php include "./includes/html/specialties.html"; ?>
      </select>
      <select name="nationality">
       <option value="">كل الجنسيات</option>
       <?php include "./includes/html/nationalities.html"; ?>
      </select>
      <input type="text" name="town" list="saudicities" autocomplete="off" placeholder="مدينة الإقامة" value="<?= survey_escape($filters['town']); ?>" >
      <?php include "./includes/html/saudicities.html"; ?>
      <div class="age">
       <label>العمر</label>
       <div class="age-inputs">
        <input type="number" id="fromAge" name="from_age" min="0" max="100" value="<?= survey_escape($filters['from_age']); ?>" placeholder="من" autocomplete="off">
        <input type="number" id="toAge" name="to_age" min="0" max="100" value="<?= survey_escape($filters['to_age']); ?>" placeholder="إلى" autocomplete="off">
       </div>
      </div>
      <div class="age">
       <label>سنوات الخبرة</label>
       <div class="age-inputs">
        <input type="number" id="fromExp" name="from_exp" min="0" max="60" value="<?= survey_escape($filters['from_exp']); ?>" placeholder="من" autocomplete="off">
        <input type="number" id="toExp" name="to_exp" min="0" max="60" value="<?= survey_escape($filters['to_exp']); ?>" placeholder="إلى" autocomplete="off">
       </div>
      </div>
      <input type="submit" id="submitFilter" value="تطبيق">
      <a href="./surveys.php" id="resetFilter">محو التصفية</a>
     </form>
    </span>
   </div>
  <!--message-->
   <div class="survey-message-box" id="messageBox">
    <span>
     <button type="button" class="survey-message-close" id="closeMessage"><i class="fas fa-times"></i></button>
     <h3 id="messageTitle">الرسالة كاملة</h3>
     <textarea id="messageText" readonly></textarea>
     <div class="survey-message-actions">
      <button type="button" id="copyMessage"><i class="fas fa-copy"></i> نسخ الرسالة</button>
     </div>
    </span>
   </div>
 </body>
</html>