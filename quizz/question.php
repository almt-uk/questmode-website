<?php
  session_start();
  if(isset($_SESSION["quizzSessionID"]))
  {
    header("Location: ../",  true);
    exit;
  }

  $quizzSessionID = $_SESSION["quizzSessionID"];

  $currentQuestion = $_SESSION["currentQuestion"];

  $quizzData = $_SESSION["quizzData"];
  $quizz_id = $_SESSION["quizzData"]["quizz_id"];
  $title = $_SESSION["quizzData"]["title"];

  $questionRowsData = $_SESSION["questionRowsData"];

  $questionData = $questionRowsData[$currentQuestion];
  $question_id = $questionData["question_id"];
  $experience = $questionData["experience"];
  $content = $questionData["content"];
  $image = $questionData["image"];
  $quizz_id = $questionData["quizz_id"];
  $time_question = $questionData["time_question"];
  $time_answer = $questionData["time_answer"];
  $time_results = $questionData["time_results"];
  $questionAnswersData = $questionData["questionAnswersData"];
  
  $answerDetails1 = $questionAnswersData[0];
  $answer_id1 = $questionOneDetails["answer_id"];
  $question_id1 = $questionOneDetails["question_id"];
  $content1 = $questionOneDetails["content"];
  $is_right1 = $questionOneDetails["is_right"];
  $order_id1 = $questionOneDetails["order_id"];
  
  $answerDetails2 = $questionAnswersData[1];
  $answer_id2 = $questionOneDetails["answer_id"];
  $question_id2 = $questionOneDetails["question_id"];
  $content2 = $questionOneDetails["content"];
  $is_right2 = $questionOneDetails["is_right"];
  $order_id2 = $questionOneDetails["order_id"];
  
  $answerDetails3 = $questionAnswersData[2];
  $answer_id3 = $questionOneDetails["answer_id"];
  $question_id3 = $questionOneDetails["question_id"];
  $content3 = $questionOneDetails["content"];
  $is_right3 = $questionOneDetails["is_right"];
  $order_id3 = $questionOneDetails["order_id"];
  
  $answerDetails4 = $questionAnswersData[3];
  $answer_id4 = $questionOneDetails["answer_id"];
  $question_id4 = $questionOneDetails["question_id"];
  $content4 = $questionOneDetails["content"];
  $is_right4 = $questionOneDetails["is_right"];
  $order_id4 = $questionOneDetails["order_id"];
  
?>

<?php
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Quest Question</title>';
echo '<!-- Disable tap highlight on IE -->';
echo '<meta name="msapplication-tap-highlight" content="no">';
echo '<!-- Web Application Manifest -->';
echo '<link rel="manifest" href="manifest.json">';
echo '<!-- Add to homescreen for Chrome on Android -->';
echo '<meta name="mobile-web-app-capable" content="yes">';
echo '<meta name="application-name" content="ZeoFlow">';
echo '<meta name="theme-color" content="#ffffff">';
echo '<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
echo '<link rel="stylesheet" href="../assets/style/cookieConsent.css" type="text/css">';
echo '<link rel="stylesheet" href="../assets/style/material.css" type="text/css">';
echo '<script src="../assets/script/cookieConsent.js" type="text/javascript"></script>';
echo '<style>';
echo 'img[alt="www.000webhost.com"] {';
echo 'display: none !important;';
echo '}';
echo '/* Body Style Style */';
echo 'body {';
echo 'margin: 0;';
echo 'background-color: #f5f5f5;';
echo '}';
echo '.unselectable {';
echo '-webkit-user-select: none; /* Safari */';
echo '-moz-user-select: none; /* Firefox */';
echo '-ms-user-select: none; /* IE10+/Edge */';
echo 'user-select: none; /* Standard */';
echo '}';
echo 'a {';
echo 'text-decoration:none';
echo '}';
echo '/* Prevent Resizing on Padding Style */';
echo '* {';
echo '-moz-box-sizing: border-box;';
echo '-webkit-box-sizing: border-box;';
echo 'box-sizing: border-box;';
echo '}';
echo '/* Website Content Holder Style */';
echo '.contentHolder {';
echo 'width: 100%;';
echo 'height: 100%;';
echo 'position: absolute;';
echo '}';
echo '/* Question Content Style */';
echo '.questionContent {';
echo 'background-color: rgb(236, 236, 236);';
echo 'text-align: center;';
echo 'font-weight: 900;';
echo 'font-size: 50px;';
echo 'text-shadow: 0px 2px, 2px 0px, 2px 2px;';
echo 'font-family: "PT Sans";';
echo 'color: rgb(0, 0, 0);';
echo 'padding: 50px;';
echo 'position: relative;';
echo 'top: 50%;';
echo 'transform: perspective(1px) translateY(-50%);';
echo 'margin-left: 100px;';
echo 'margin-right: 100px;';
echo 'border-radius: 50px;';
echo '-webkit-filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 10px #222);';
echo '}';
echo '/* Countdown Style */';
echo '.countdownHolder {';
echo 'width: 90px;';
echo 'height: 90px;';
echo 'border-radius: 50%;';
echo 'background-color: rgb(0, 0, 0);';
echo '-webkit-filter: drop-shadow(0px 0px 5px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 5px #222);';
echo 'position: relative;';
echo 'left: 50%;';
echo 'top: 30px;';
echo 'transform: translateX(-50%);';
echo 'z-index: 1;';
echo '}';
echo '.countdownTime {';
echo 'text-align: center;';
echo 'position: relative;';
echo 'top: 50%;';
echo 'transform: perspective(1px) translateY(-50%);';
echo 'font-family: "PT Sans";';
echo 'text-shadow: 0px 2px, 2px 0px, 2px 2px;';
echo 'font-weight: 900;';
echo 'font-size: 40px;';
echo 'color: rgb(255, 255, 255);';
echo '}';
echo '</style>';
?>

<?php
echo '</head>';
echo '<body>';
echo '<div class="contentHolder unselectable">';
echo '<div class="questionContent">';
echo 'Where is the University of Northampton located?';
echo '</div>';
echo '</div>';
echo '<div class="countdownHolder unselectable" id="countdownHolder">';
echo '<div class="countdownTime" id="countdownTime">';
echo '</div>';
echo '</div>';
echo '<div id="myCookieConsent">';
echo '<a id="cookieButton">Understood</a>';
echo '<div>To help personalise content and provide a safer experience, we use cookies. By clicking on or navigating the site, you agree to allow us to collect information on and off Quest Mode through cookies. Learn more, including about available controls: <a href="/">Cookie Policy</a>.</div>';
echo '</div>';
echo '</body>';
echo '<script>';
echo 'var time = 5;';
echo 'document.getElementById("countdownTime").innerHTML = time + "s";';
echo 'setInterval(function() {';
echo 'time--;';
echo 'if(time == 0)';
echo '{';
echo 'window.location = "../pick_answer";';
echo '}';
echo 'var countdownHolder = document.getElementById("countdownHolder");';
echo 'var countdown = document.getElementById("countdownTime");';
echo 'countdown.innerHTML = time + "s";';
echo '}, 1000);';
echo '</script>';
?>