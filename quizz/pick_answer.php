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

  $path = $_SERVER['DOCUMENT_ROOT'];
  if(isset($_POST['pick_answer']) && $_POST['pick_answer']) {
    if(isset($_POST['answer'])) {
        $answer=$_POST['answer'];
        require_once $path . '/db_handler/web.php';
        $db = new DbHandlerWeb();
        $db->initializeAPI("xtoAkWqVGp4nDtW6tZL1AaJUCl9I3tYcqjfTBhSu", "PHZ7dh4vHtbJoF7kD2RtZQUxi3opTFeXvpa0Jp7R");
        if($answer == 1)
        {
            $answer_id = $answer_id1;
        }
        else if($answer == 2)
        {
            $answer_id = $answer_id2;
        }
        else if($answer == 3)
        {
            $answer_id = $answer_id3;
        }
        else if($answer == 4)
        {
            $answer_id = $answer_id4;
        }
        $db->answerQuestion($quizz_session_id, $answer_id, $question_id);
        $_SESSION["answerChose"] = $answer;
        exit;
    } else {
        exit;
    }
  }
  
?>

<?php
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Quest Pick Answer</title>';
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
echo '}';
echo '/* Answer Content Style */';
echo '/* Answer Image Style */';
echo '.imageHolder {';
echo 'margin-left: 10%;';
echo 'margin-right: 10%;';
echo 'margin-top: 5vh;';
echo '}';
echo '.imageQuestion {';
echo 'height: 40vh;';
echo 'margin-left: 50%;';
echo 'border-radius: 20px;';
echo 'transform: translate(-50%, 0%);';
echo '-webkit-filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 10px #222);';
echo 'border: 10px solid rgb(34, 34, 34);';
echo '}';
echo '/* Answers Style */';
echo '.cuntentSubholder {';
echo 'margin-top: 5vh;';
echo 'margin-bottom: 5vh;';
echo 'margin-left: 10%;';
echo 'margin-right: 10%;';
echo 'height: 45vh;';
echo 'border-radius: 20px;';
echo 'background-color: rgb(231, 231, 231);';
echo '-webkit-filter: drop-shadow(0px 0px 2px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 2px #222);';
echo '}';
echo '/* Countdown Style */';
echo '.countdownHolder {';
echo 'width: 90px;';
echo 'height: 90px;';
echo 'border-radius: 50%;';
echo 'background-color: rgb(21, 68, 199);';
echo '-webkit-filter: drop-shadow(0px 0px 5px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 5px #222);';
echo 'position: relative;';
echo 'top: 50%;';
echo 'left: 50%;';
echo 'transform: perspective(1px) translateY(-50%) translateX(-50%);';
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
echo '.countdownTimeOut {';
echo 'background-color: rgb(241, 28, 67);';
echo '}';
echo '/* Answers Subholder Style */';
echo '.ananswersSubhlder {';
echo 'position: fixed;';
echo 'top: 0;';
echo 'width: 100%;';
echo 'height: 100%;';
echo 'padding: 10px;';
echo '}';
echo '.rowAnswer {';
echo 'height: 50%;';
echo 'width: 100%;';
echo '}';
echo '.answerHolder {';
echo 'width: 50%;';
echo 'height: 100%;';
echo 'float: left;';
echo 'padding: 10px;';
echo '}';
echo '.answerContentHolder {';
echo 'width: 100%;';
echo 'height: 100%;';
echo 'border-radius: 20px;';
echo '-webkit-filter: drop-shadow(0px 0px 2px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 2px #222);';
echo '}';
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
echo '.answerChose {';
echo '-webkit-filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 10px #222);';
echo 'transform: scale(0.95);';
echo 'border: 10px solid rgba(5, 5, 5, 0.6);';
echo '-moz-box-shadow: inset 0 0 10px #00000083;';
echo '-webkit-box-shadow: inset 0 0 10px #00000083;';
echo 'box-shadow: inset 0 0 10px #00000083;';
echo '}';
echo '.answerOption1:hover, .answerOption2:hover, .answerOption3:hover, .answerOption4:hover {';
echo '-webkit-filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 10px #222);';
echo 'cursor: pointer;';
echo 'transform: scale(0.95);';
echo '}';
echo '.answerTextContent {';
echo 'text-align: center;';
echo 'position: relative;';
echo 'top: 50%;';
echo 'transform: perspective(1px) translateY(-50%);';
echo 'font-family: "PT Sans";';
echo 'font-weight: 900;';
echo 'font-size: 30px;';
echo 'color: rgba(0, 0, 0);';
echo '}';
echo '</style>';
echo '</head>';
?>

<?php
echo '<body>';
echo '<div class="contentHolder">';
echo '<div class="imageHolder" id="imageHolder">';
echo '<img class="imageQuestion" src="' . $image . '" />';
echo '</div>';
echo '<div class="cuntentSubholder unselectable">';
echo '<div class="countdownHolder" id="countdownHolder">';
echo '<div class="countdownTime" id="countdownTime">';
echo '</div>';
echo '</div>';
echo '<div class="ananswersSubhlder">';
echo '<div class="rowAnswer">';
echo '<div class="answerHolder">';
echo '<div class="answerContentHolder answerOption1" id="answerOption1" onclick="answer(1)">';
echo '<div class="answerTextContent">';
echo $content1;
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="answerHolder">';
echo '<div class="answerContentHolder answerOption2" id="answerOption2" onclick="answer(2)">';
echo '<div class="answerTextContent">';
echo $content2;
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="rowAnswer">';
echo '<div class="answerHolder">';
echo '<div class="answerContentHolder answerOption3" id="answerOption3" onclick="answer(3)">';
echo '<div class="answerTextContent">';
echo $content3;
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="answerHolder">';
echo '<div class="answerContentHolder answerOption4" id="answerOption4" onclick="answer(4)">';
echo '<div class="answerTextContent">';
echo $content4;
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div id="myCookieConsent">';
echo '<a id="cookieButton">Understood</a>';
echo '<div>To help personalise content and provide a safer experience, we use cookies. By clicking on or navigating the site, you agree to allow us to collect information on and off Quest Mode through cookies. Learn more, including about available controls: <a href="/">Cookie Policy</a>.</div>';
echo '</div>';
echo '</body>';
echo '<script>';
echo 'var time = ' . $time_answer . ';';
echo 'var choice = 0;';
echo 'document.getElementById("countdownTime").innerHTML = time + "s";';
echo 'setInterval(function() {';
echo 'time--;';
echo 'var countdownHolder = document.getElementById("countdownHolder");';
echo 'var countdown = document.getElementById("countdownTime");';
echo 'if(time <= 3)';
echo '{';
echo 'if(!countdownHolder.classList.contains("countdownTimeOut"))';
echo '{';
echo 'countdownHolder.classList.add("countdownTimeOut");';
echo '}';
echo '}';
echo 'if(time == 0)';
echo '{';
echo 'window.location = "../quizz/results";';
echo '}';
echo 'countdown.innerHTML = time + "s";';
echo '}, 1000);';
echo 'function answer(answer = 0)';
echo '{';
echo 'var countdownHolder = document.getElementById("answerOption" + answer);';
echo 'if(!countdownHolder.classList.contains("answerChose") && choice == 0)';
echo '{';
echo 'countdownHolder.classList.add("answerChose");';
echo '}';
echo 'choice = answer;';
echo '$.ajax({';
echo 'type: "post",';
echo 'data: {';
echo 'pick_answer: true,';
echo 'answer: choice';
echo '},';
echo 'success: function(response){';
echo '';
echo '}';
echo '});';
echo '}';
echo '</script>';
?>