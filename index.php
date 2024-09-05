<?php
  session_start();

  if (isset($_GET["st"])) {
    $phone_number = $_GET["st"];
    if (strlen(strval($phone_number)) > 6 && strlen(strval($phone_number)) < 17) {
      $_SESSION["send_to"] = $phone_number;
    }
  }
?>
<html lang="ar" type="text/html">
 <head>
  <!--meta-->
   <meta charset = "utf-8"/>
   <meta name = "keywords" content = "توظيف طبي، توظيف طبيب، توظيف أطباء، توظيف اطباء، توظيف دكتور، توظيف طبيب في السعودية، توظيف دكتور في السعودية، توظيف طبيب في الإمارات، توظيف دكتور في الإمارات، توظيف طبيب في عمان، توظيف دكتور في عمان، توظيف طبي في المانيا، توظيف طبي 2024، توظيف طبيب، 2024، توظيف أطباء 2024، توظيف اطباء 2024، توظيف دكتور 2024"/>
   <meta name = "theme-color" content = "#185a50"/>
   <meta name = "color-scheme" content = "light"/>
   <meta name = "author" content = "Youssef Dev"/>
   <meta name = "owner" content = "أشرف يوسف داوود"/>
   <meta name = "copyright" content = "Kawader Medical"/>
   <meta name = "google" content = "notranslate"/>
   <meta name = "robots" content = "all"/>
   <meta name = "title" content = "استبيان توظيف للتقدم على وظيفة طبية"/>
   <meta name = "description" content = "في المانيا والسعودية والإمارات وعمان"/>
   <meta name = "twitter:card" content = "summary"/>
   <meta name = "twitter:url" content = "file:///C:/xampp/htdocs/www/mrq/home.html"/>
   <meta name = "twitter:title" content = "استبيان توظيف للتقدم على وظيفة طبية"/>
   <meta name = "twitter:description" content = "في المانيا والسعودية والإمارات وعمان"/>
   <meta name = "twitter:image" content = "./assets/images/icon.png"/>
   <meta name = "twitter:image:alt" content = "Icon"/>
   <meta name = "twitter:creator" content = "@YoussefDev7"/>
   <meta name = "twitter:creator:id" content = "1427454968232022016"/>
   <meta property = "og:type" content = "website"/>
   <meta property = "og:url" content = "/"/>
   <meta property = "og:site_name" content = "Medical Recruitment Questionnaire (GER - KSA - UAE - OMN)"/>
   <meta property = "og:title" content = "استبيان توظيف للتقدم على وظيفة طبية"/>
   <meta property = "og:description" content = "في المانيا والسعودية والإمارات وعمان"/>
   <meta property = "og:image" content = "./assets/images/icon.png"/>
   <meta property = "og:image:alt" content = "Icon"/>
   <meta property = "fb:admins" content = "100090928069955"/>
  <!--link-->
   <link rel="canonical" href="file:///C:/xampp/htdocs/www/mrq/home.html"/>
   <link rel="icon" type="image/png" href="./assets/images/icon.png"/>
   <link rel="stylesheet" type="text/css" href="./assets/css/style.css"/>
   <link rel="stylesheet" media="all" href="./assets/libs/css/fontawesome.css"/>
  <!--title-->
   <title>استبيان العمل الطبي</title>
  <!--script-->
   <script src="./assets/libs/js/jquery.js"></script>
   <script type="application/javascript" src="./assets/js/script.js" async></script>
   <noscript>لفتح الإستبيان (JavaScript) الرجاء فتح الجافا سكريبت</noscript>
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
      <!--time-->
       <nav class="time">
        <span id="time"></span>
       </nav>
      <!--switch-->
       <button type="button" title="تغيير المظهر" class="switch"></button>
     </header>
    <!--main-->
     <main>
      <!--slidebar-->
       <section class="slidebar">
        <p>استبيان توظيف للتقدم على وظيفة طبية</p>
        <button type="button">بدء الاستبيان</button>
       </section>
     </main>
    <!--footer-->
     <footer>
      <p><date></date> جميع الحقوق محفوظة <i class="far fa-copyright"></i></p>
     </footer>
   </div>
 </body>
</html>