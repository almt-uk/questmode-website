<?php
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="description" content="Log In to your ZeoFlow Account.">';
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
echo '<body>';
echo '<div class="contentHolder">';
echo '<div class="imageHolder" id="imageHolder">';
echo '<img class="imageQuestion" src="https://i0.wp.com/uniserveducation.com/wp-content/uploads/2016/01/Northampton.jpg?fit=900%2C505&ssl=1" />';
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
echo 'London';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="answerHolder">';
echo '<div class="answerContentHolder answerOption2" id="answerOption2" onclick="answer(2)">';
echo '<div class="answerTextContent">';
echo 'Northampton';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="rowAnswer">';
echo '<div class="answerHolder">';
echo '<div class="answerContentHolder answerOption3" id="answerOption3" onclick="answer(3)">';
echo '<div class="answerTextContent">';
echo 'Birmingham';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="answerHolder">';
echo '<div class="answerContentHolder answerOption4" id="answerOption4" onclick="answer(4)">';
echo '<div class="answerTextContent">';
echo 'Bexford';
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
echo 'var time = 12;';
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
echo 'window.open("answer_result.html", "_self");';
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
echo '}';
echo '</script>';
?>