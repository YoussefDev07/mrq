<?php
  session_start();

  if (empty($_GET["msg"])) {
    header("Location:../index.php");
    exit();
  }

  require_once "../master/connect.php";
  $url = "https://api.telegram.org/bot".$bot_token."/sendMessage?chat_id=".$chat_id."&text=".urlencode($_GET["msg"]);

  if (isset($_GET["method"])) {
    sleep(6);
    if ($_GET["method"] == "whatsapp") {
      $mobile = $_SESSION["send_to"];

      print("<script>");
      echo 'const expression = /(iPhone|iPod|iPad)/i;
		  if (expression.test(navigator.platform)) {
	      window.open("whatsapp://send?text='.urlencode($_GET["msg"]).'", "_self")
		  } else {
	      window.open("https://api.whatsapp.com/send/?phone='.$mobile.'&text='.urlencode($_GET["msg"]).'", "_self")
		  }';
      print("</script>");
    }
  }
?>
<html lang="ar" dir="rtl">
 <head>
  <!--meta-->
   <meta charset = "utf-8"/>
   <meta name = "viewport" content="width=device-width, initial-scale=1.0"/>
   <meta name = "theme-color" content = "#422464"/>
   <meta name = "color-scheme" content = "light"/>
   <meta name = "author" content = "Youssef Ibrahim"/>
   <meta name = "google" content = "notranslate"/>
   <meta name = "robots" content = "none"/>
   <meta name = "twitter:card" content = "summary"/>
   <meta property = "og:type" content = "website"/>
   <meta property="og:site_name" content="mrq"/>
   <meta property="og:locale" content="ar"/>
   <meta property="og:title" content="Kawader Medical"/>
   <meta property="og:description" content="تم إرسال النموذج بنجاح"/>
   <meta property="og:image" content="../assets/images/icon.png"/>
   <meta property="og:image:alt" content="Icon"/>
  <!--links-->
   <link rel="me" href="https://youssefdev.42web.io"/>
   <link rel="icon" type="image/png" href="../assets/images/icon.png"/>
   <link rel="stylesheet" type="text/css" href="../assets/css/style.css"/>
   <link rel="stylesheet" media="all" href="../assets/libs/css/fontawesome.css"/>
  <!--style-->
   <style>
    html {
      overflow: hidden !important;
    }

    body {
      min-height: 100vh;
      padding: 20px;
      background-color: var(--text);
      display: flex;
      align-items: center;
      justify-content: center;
    }
   </style>
  <!--title-->
   <title>تم إرسال النموذج بنجاح</title>
  <!--script-->
   <script src="../assets/libs/js/jquery.js"></script>
   <noscript>لضمان عمل الصفحة بالشكل الصحيح، الرجاء تفعيل الجافا سكريبت (JavaScript)</noscript>
 </head>
 <body>
  <?php if (empty($_GET["method"])): ?>
   <!--success-->
    <div class="success-card">
     <div class="icon-container">
      <i class="fas fa-check"></i>
     </div>
     <h6>تم إرسال النموذج بنجاح!</h6>
     <p>نشكرك على تواصلك معنا. لقد تم استلام بياناتك بنجاح، وسيقوم فريقنا بمراجعتها والرد عليك في أقرب وقت ممكن.</p>
     <a href="/">الذهاب إلى الصفحة الرئيسية</a>
    </div>
  <?php endif; ?>
  <!--hiddenframe-->
   <iframe class="hidden-frame" src="<?= $url; ?>"></iframe>
  <!--script-->
   <script>
    if (localStorage.getItem("theme") == "old") {
     $(`<link rel="stylesheet" href="../assets/css/theme.css"/>`).insertAfter(`link[href="../assets/css/style.css"]`);
     $(`link[rel="icon"]`).attr("href", "../assets/images/theme-icon.png");
     $(".success-card h6").css("color", "var(--text)");
     $(".success-card a").css("background-color", "var(--text)");
    }
   </script>
 </body>
</html>