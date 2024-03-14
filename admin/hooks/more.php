<?php
 require_once "../../master/connect.php";

 $msg = (isset($_GET["msg"])) ? $_GET["msg"]:null;
 $survey = $conn -> query("SELECT name, message FROM surveys WHERE id = '$msg'") -> fetchAll(PDO::FETCH_BOTH);
 if (empty($msg) || empty($survey[0][0])) {
   header("location:../surveys.php");
 }
?>
<html lang="ar" type="text/html">
 <head>
  <!--meta-->
   <meta charset = "utf-8"/>
   <meta name = "viewport" content = "width=device-width, initial-scale=1.0"/>
   <meta name = "theme-color" content = "#185a50"/>
   <meta name = "color-scheme" content = "light"/>
   <meta name = "author" content = "Youssef Dev"/>
   <meta name = "owner" content = "أشرف يوسف داوود"/>
   <meta name = "copyright" content = "Kawader Medical"/>
   <meta name = "google" content = "notranslate"/>
   <meta name = "robots" content = "none"/>
  <!--link-->
   <link rel="canonical" href="http://localhost/www/mrq/admin/surveys.php"/>
   <link rel="icon" type="image/png" href="../../assets/images/icon.png"/>
   <link rel="stylesheet" href="../../assets/libs/css/toastr.css"/>
   <link rel="stylesheet" type="text/css" href="../../assets/css/style.css"/>
   <link rel="stylesheet" media="all" href="../../assets/libs/css/fontawesome.css"/>
  <!--title-->
   <title>إستبيان الطبيب: <?php echo $survey[0]["name"]; ?></title>
  <!--script-->
   <script src="../../assets/libs/js/jquery.js"></script>
   <script src="../../assets/libs/js/toastr.js"></script>
   <script src="../../assets/js/more.js"></script>
   <noscript>لفتح الإستبيان (JavaScript) الرجاء فتح الجافا سكريبت</noscript>
 </head>
 <body role="frozen-page">
  <!--top-buttons-->
   <div class="top-buttons">
    <button type="button" id="topCopy">نسخ الرسالة <i class="fas fa-copy"></i></button>
    <button type="button" id="topBack">رجوع <i class="fas fa-arrow-right"></i></button>
   </div>
  <!--message-->
   <textarea class="message" id="message" readonly><?php echo $survey[0]["message"]; ?></textarea>
 </body>
</html>