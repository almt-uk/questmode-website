<?php
  session_start();
  if(isset($_SESSION["quizzSessionID"]))
  {
    header("Location: ../",  true);
    exit;
  }

  $answerChose = $_SESSION["answerChose"];
  $_SESSION["answerChose"] = -1;

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
  
  $path = $_SERVER['DOCUMENT_ROOT'];
  require_once $path . '/db_handler/web.php';
  $db = new DbHandlerWeb();
  $db->initializeAPI("xtoAkWqVGp4nDtW6tZL1AaJUCl9I3tYcqjfTBhSu", "PHZ7dh4vHtbJoF7kD2RtZQUxi3opTFeXvpa0Jp7R");

  $answer_order = 1;
  $no_answers_1 = $db->getPlayersByAnswerChose($question_id, $answer_order)["no_answers"];  
  $answer_order = 2;
  $no_answers_2 = $db->getPlayersByAnswerChose($question_id, $answer_order)["no_answers"];  
  $answer_order = 3;
  $no_answers_3 = $db->getPlayersByAnswerChose($question_id, $answer_order)["no_answers"];  
  $answer_order = 4;
  $no_answers_4 = $db->getPlayersByAnswerChose($question_id, $answer_order)["no_answers"];

  $total_answers = $no_answers_1 + $no_answers_2 + $no_answers_3 + $no_answers_4;

  $percent1 = $no_answers_1 * 100 / $total_answers;
  $percent2 = $no_answers_2 * 100 / $total_answers;
  $percent3 = $no_answers_3 * 100 / $total_answers;
  $percent4 = $no_answers_4 * 100 / $total_answers;
  
?>

<?php
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Quest Results</title>';
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
echo '.hideElement {';
echo 'display: none;';
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
echo 'padding-left: 150px;';
echo 'padding-right: 150px;';
echo '}';
echo '/* Answer Content Style */';
echo '/* Leading Board Style */';
echo '.leadingHolder {';
echo 'float: left;';
echo 'width: 28%;';
echo 'height: 100%;';
echo 'padding: 10px;';
echo '}';
echo '.leadingSubolder {';
echo 'height: 100%;';
echo 'width: 100%;';
echo 'border-radius: 20px;';
echo 'background-color: #ececec;';
echo '-webkit-filter: drop-shadow(0px 0px 3px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 3px #222);';
echo 'padding-top: 10px;';
echo '}';
echo '.leadingCentralize {';
echo 'position: relative;';
echo 'top: 50%;';
echo 'transform: translateY(-50%);';
echo '}';
echo '.inLeadTitle {';
echo 'font-family: "PT Sans";';
echo 'text-align: center;';
echo 'font-size: 20px;';
echo '}';
echo '.inLeadNickname {';
echo 'font-family: "PT Sans";';
echo 'text-align: center;';
echo 'font-size: 27px;';
echo 'font-weight: 900;';
echo '}';
echo '.inLeadPoints {';
echo 'font-family: "PT Sans";';
echo 'text-align: center;';
echo 'font-size: 20px;';
echo 'font-weight: 900;';
echo '}';
echo '.behindExpTitle {';
echo 'font-family: "PT Sans";';
echo 'text-align: center;';
echo 'font-size: 18px;';
echo 'margin-top: 20px;';
echo '}';
echo '.behindExpContent {';
echo 'font-family: "PT Sans";';
echo 'text-align: center;';
echo 'font-size: 20px;';
echo 'font-weight: 900;';
echo '}';
echo '/* Result Style */';
echo '.resultHolder {';
echo 'position: relative;';
echo 'top: 50%;';
echo 'left: 50%;';
echo 'transform: perspective(1px) translateY(-60%) translateX(-50%);';
echo 'height: 60vh;';
echo '}';
echo '.resultOption {';
echo 'float: left;';
echo 'width: 18%;';
echo 'height: 100%;';
echo 'padding: 10px;';
echo '}';
echo '.resultOptionHolder {';
echo 'height: 100%;';
echo 'width: 100%;';
echo 'border-radius: 20px;';
echo '-webkit-filter: drop-shadow(0px 0px 3px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 3px #222);';
echo '}';
echo '.resultFrame {';
echo '-moz-box-shadow: inset 0 0 10px #000000;';
echo '-webkit-box-shadow: inset 0 0 10px #000000;';
echo 'box-shadow: inset 0 0 10px #000000;';
echo 'border: 20px solid rgba(0, 0, 0, 0.418);';
echo '}';
echo '.resultGood {';
echo '-moz-box-shadow: inset 0 0 10px #000000;';
echo '-webkit-box-shadow: inset 0 0 10px #000000;';
echo 'box-shadow: inset 0 0 10px #000000;';
echo 'border: 20px solid rgba(1, 245, 74, 0.829);';
echo '}';
echo '.resultWrong {';
echo '-moz-box-shadow: inset 0 0 10px #000000;';
echo '-webkit-box-shadow: inset 0 0 10px #000000;';
echo 'box-shadow: inset 0 0 10px #000000;';
echo 'border: 20px solid rgba(241, 24, 24, 0.8);';
echo '}';
echo '.percentResult {';
echo '-webkit-filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 10px #222);';
echo 'background-color: #00000059;';
echo 'width: 100%;';
echo '}';
echo '.percentResultNo {';
echo 'position: fixed;';
echo 'top: 10px;';
echo 'left: 50%;';
echo 'transform: perspective(1px) translateX(-50%);';
echo 'font-family: "PT Sans";';
echo 'color: rgba(0, 0, 0, 0.5);';
echo 'font-weight: 900;';
echo 'font-size: 40px;';
echo 'text-align: center;';
echo 'text-shadow: 2px 0 rgba(0, 0, 0, 0.5);';
echo 'letter-spacing: -2px;';
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
echo 'top: 10%;';
echo 'left: 36%;';
echo 'transform: perspective(1px) translateX(-50%);';
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
echo '/* Answers Subholder Style */';
echo '.answerOption1 {';
echo 'background-color: #E91E63;';
echo '}';
echo '.answerOption2 {';
echo 'background-color: #9C27B0;';
echo '}';
echo '.answerOption3 {';
echo 'background-color: #3F51B5;';
echo '}';
echo '.answerOption4 {';
echo 'background-color: #FF9800;';
echo '}';
echo '</style>';
echo '</head>';
?>

<?php
echo '<body>';
echo '<div class="contentHolder">';
echo '<div class="resultHolder" id="resultHolder">';
echo '<div class="resultOption">';
echo '<div class="resultOptionHolder answerOption1 resultFrame"';
if($is_right1)
{
echo ' resultGood';
}
else if($answerChose)
{
echo ' resultWrong';
}
echo '>';
echo '<div class="percentResult" style="height:' . 100-$percent1 . '%;">';
echo '</div>';
echo '<div class="percentResultNo">';
echo $percent1 . '%';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="resultOption">';
echo '<div class="resultOptionHolder answerOption2 resultFrame"';
if($is_right2)
{
echo ' resultGood';
}
else if($answerChose)
{
echo ' resultWrong';
}
echo '>';
echo '<div class="percentResult" style="height:' . 100-$percent2 . '%;">';
echo '</div>';
echo '<div class="percentResultNo">';
echo $percent2 . '%';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="resultOption">';
echo '<div class="resultOptionHolder answerOption3 resultFrame"';
if($is_right3)
{
echo ' resultGood';
}
else if($answerChose)
{
echo ' resultWrong';
}
echo '>';
echo '<div class="percentResult" style="height:' . 100-$percent3 . '%;">';
echo '</div>';
echo '<div class="percentResultNo">';
echo $percent3 . '%';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="resultOption">';
echo '<div class="resultOptionHolder answerOption4 resultFrame"';
if($is_right4)
{
echo ' resultGood';
}
else if($answerChose)
{
echo ' resultWrong';
}
echo '>';
echo '<div class="percentResult" style="height:' . 100-$percent4 . '%;">';
echo '</div>';
echo '<div class="percentResultNo">';
echo $percent4 . '%';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="leadingHolder">';
echo '<div class="leadingSubolder">';
echo '<div class="leadingCentralize">';
echo '<div class="inLeadTitle">';
echo 'Is Leading *DEMO*';
echo '</div>';
echo '<div class="inLeadNickname">';
echo 'RootRice';
echo '</div>';
echo '<div class="inLeadPoints">';
echo '18733 EXP';
echo '</div>';
echo '<div class="behindExpTitle">';
echo 'is leading by';
echo '</div>';
echo '<div class="behindExpContent">';
echo '3927 EXP';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="countdownHolder" id="countdownHolder">';
echo '<div class="countdownTime" id="countdownTime">';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div id="myCookieConsent">';
echo '<a id="cookieButton">Understood</a>';
echo '<div>To help personalise content and provide a safer experience, we use cookies. By clicking on or navigating the site, you agree to allow us to collect information on and off Quest Mode through cookies. Learn more, including about available controls: <a href="/">Cookie Policy</a>.</div>';
echo '</div>';
echo '</body>';
echo '<script>';
echo 'var time = ' . $time_results . ';';
echo 'document.getElementById("countdownTime").innerHTML = time + "s";';
echo 'setInterval(function() {';
echo 'time--;';
echo 'if(time == 0)';
echo '{';
echo 'window.location = "../results";';
echo '}';
echo 'var countdownHolder = document.getElementById("countdownHolder");';
echo 'var countdown = document.getElementById("countdownTime");';
echo 'countdown.innerHTML = time + "s";';
echo '}, 1000);';
echo '</script>';
?>