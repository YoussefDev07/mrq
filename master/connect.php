<?php
  date_default_timezone_set("Asia/Riyadh");
  $conn = new PDO("mysql:host=localhost;dbname=mrq;charset=utf8mb4", "root", "");

  $chat_id = 0;
  $bot_token = "";