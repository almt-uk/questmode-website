<?php
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Create Class | Quest Mode</title>';
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
echo '<link rel="stylesheet" href="../assets/style/toolbar.css" type="text/css">';
echo '<script src="../assets/script/cookieConsent.js" type="text/javascript"></script>';
echo '<style>';
echo '/* colors */';
echo ':root {';
echo '--pure-material-primary-rgb: 85, 8, 194;';
echo '--pure-material-onsurface-rgb: 0, 0, 0;';
echo '}';
echo '/* Body Style */';
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
echo '/* Prevent Resizing on Padding */';
echo '* {';
echo '-moz-box-sizing: border-box;';
echo '-webkit-box-sizing: border-box;';
echo 'box-sizing: border-box;';
echo '}';
echo '/* Website Content Holder */';
echo '.contentHolder {';
echo 'padding-top: 90px;';
echo 'padding-bottom: 30px;';
echo 'width: 100%;';
echo 'position: absolute;';
echo '}';
echo '.contentleftSubolder {';
echo 'padding-left: 160px;';
echo 'padding-right: 160px;';
echo '}';
echo '.leftHolder {';
echo 'float: left;';
echo 'width: 30%;';
echo 'margin-top: -30px;';
echo '}';
echo '.leftSubolder {';
echo 'margin-left: 30px;';
echo 'margin-right: 15px;';
echo '}';
echo '.rightHolder {';
echo 'position: fixed;';
echo 'float: left;';
echo 'margin-left: 30%;';
echo 'width: 70%;';
echo 'height: 100%;';
echo 'top: 0;';
echo 'padding-top: 90px;';
echo 'padding-bottom: 30px;';
echo 'padding-right: 40px;';
echo '}';
echo '.rightSubolder {';
echo 'border-radius: 20px;';
echo 'margin-left: 15px;';
echo 'height: 100%;';
echo 'width: 100%;';
echo 'padding: 20px;';
echo 'background-color: #f1f1f1;';
echo '-webkit-filter: drop-shadow(0px 0px 3px rgba(0, 0, 0, 0.5));';
echo 'filter: drop-shadow(0px 0px 3px rgb(92, 92, 92));';
echo '}';
echo '/* width */';
echo '.rightSubolder::-webkit-scrollbar {';
echo 'width: 10px;';
echo '}';
echo '/* Track */';
echo '.rightSubolder::-webkit-scrollbar-track {';
echo 'background: #e6e6e6;';
echo '}';
echo '/* Handle */';
echo '.rightSubolder::-webkit-scrollbar-thumb {';
echo 'background: #888;';
echo '}';
echo '/* Handle on hover */';
echo '.rightSubolder::-webkit-scrollbar-thumb:hover {';
echo 'background: #555;';
echo '}';
echo '/* Join Game By Code */';
echo '.quizzJoinHolder {';
echo 'width: 100%;';
echo 'padding: 20px;';
echo 'margin-top: 30px;';
echo 'padding-top: 14px;';
echo 'background-color: #f1f1f1;';
echo 'border-radius: 20px;';
echo '-webkit-filter: drop-shadow(0px 0px 3px rgba(0, 0, 0, 0.5));';
echo 'filter: drop-shadow(0px 0px 3px rgb(92, 92, 92));';
echo '}';
echo '.quizzJoinHolder:hover {';
echo '-webkit-filter: drop-shadow(0px 0px 5px rgba(0, 0, 0, 0.5));';
echo 'filter: drop-shadow(0px 0px 5px rgb(102, 102, 102));';
echo '}';
echo '.quizzJoinTitle {';
echo 'text-align: center;';
echo 'font-weight: 900;';
echo 'font-size: 18px;';
echo 'font-family: "PT Sans";';
echo 'color: rgb(0, 0, 0);';
echo '}';
echo '.quizzJoinSubtitle {';
echo 'padding-top: 10px;';
echo 'font-size: 16px;';
echo 'font-family: "PT Sans";';
echo 'color: rgb(0, 0, 0);';
echo '}';
echo '.quizzJoinBtn {';
echo 'width: fit-content;';
echo 'margin-top: 20px;';
echo 'padding-top: 6px;';
echo 'margin-bottom: 4px;';
echo 'padding-bottom: 6px;';
echo 'font-weight: 900;';
echo 'font-size: 16px;';
echo 'padding-left: 30px;';
echo 'padding-right: 30px;';
echo 'font-family: "PT Sans";';
echo 'color: rgb(255, 255, 255);';
echo 'border-radius: 5px;';
echo 'background-color: #1a008d;';
echo '-webkit-filter: drop-shadow(0px 0px 4px #1a008dc0);';
echo 'filter: drop-shadow(0px 0px 4px #1a008dbe);';
echo '-moz-box-shadow: inset 0 0 10px #00000083;';
echo '-webkit-box-shadow: inset 0 0 10px #00000083;';
echo 'box-shadow: inset 0 0 10px #00000083;';
echo 'margin-left: 50%;';
echo 'transform: translate(-50%, 0%);';
echo '}';
echo '.quizzJoinBtn:hover {';
echo 'transform: translate(-50%, 0%) scale(0.95);';
echo 'background-color: #3b00df;';
echo '-webkit-filter: drop-shadow(0px 0px 6px #1a008dc0);';
echo 'filter: drop-shadow(0px 0px 6px #1a008dbe);';
echo '-moz-box-shadow: inset 0 0 10px #00000083;';
echo '-webkit-box-shadow: inset 0 0 10px #00000083;';
echo 'box-shadow: inset 0 0 10px #00000083;';
echo 'cursor: pointer;';
echo '}';
echo '</style>';
echo '</head>';
echo '<body>';
echo '<div class="toolbarHolder toolbarShadow unselectable" id="toolbar">';
echo '<div class="toolbarContent">';
echo '<div class="titleToolbar" onclick="window.open('../index.html', '_self');">';
echo 'Quest Mode';
echo '</div>';
echo '</div>';
echo '<!-- <div class="userLoggedInHolder">';
echo '<img class="userLoggedInPicture" src="https://firebasestorage.googleapis.com/v0/b/zeo-flow.appspot.com/o/ProfilePicturesLowQ%2F6jk6xzpHdrwB4kqok4xFDy2HrfobqKJeWRgOE470158261189.jpeg?alt=media" />';
echo '</div> -->';
echo '</div>';
echo '<div class="userLoggedInDetails hideElement" id="userLoggedInDetails">';
echo '<div class="userLoggedInDetailsHolder unselectable">';
echo '<div class="userLoggedInCover">';
echo '<img class="userLoggedInPicture2" src="https://firebasestorage.googleapis.com/v0/b/zeo-flow.appspot.com/o/ProfilePicturesLowQ%2F6jk6xzpHdrwB4kqok4xFDy2HrfobqKJeWRgOE470158261189.jpeg?alt=media" />';
echo '<div class="userLoggedInProfileHolder">';
echo '<div class="userLoggedInArcShape"></div>';
echo '<div class="userLoggedInProfileDetails">';
echo '<div class="userLoggedInViewProfile">';
echo 'View Profile';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="profileHolder">';
echo '<div class="userLoggedInOptions">';
echo '<div class="userLoggedInOptionsItem" onclick="window.open('join_quizz.html', '_self');">';
echo 'Join Quizz';
echo '</div>';
echo '<div class="userLoggedInOptionsItem">';
echo 'Help & Support';
echo '</div>';
echo '<div class="userLoggedInOptionsItem">';
echo 'Log Out';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="contentHolder unselectable">';
echo '<div class="contentSubholder">';
echo '<div class="leftHolder">';
echo '<div class="leftSubolder">';
echo '</div>';
echo '</div>';
echo '<div class="rightHolder unselectable">';
echo '<div class="rightSubolder">';
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
echo 'var classStatsHolder = document.getElementById("classStatsHolder");';
echo 'var studentStatsHolder = document.getElementById("studentStatsHolder");';
echo 'var addStudentHolder = document.getElementById("addStudentHolder");';
echo 'function classStats()';
echo '{';
echo 'if(classStatsHolder.classList.contains("hideElement"))';
echo '{';
echo 'classStatsHolder.classList.remove("hideElement");';
echo '}';
echo 'if(!addStudentHolder.classList.contains("hideElement"))';
echo '{';
echo 'addStudentHolder.classList.add("hideElement");';
echo '}';
echo 'if(!studentStatsHolder.classList.contains("hideElement"))';
echo '{';
echo 'studentStatsHolder.classList.add("hideElement");';
echo '}';
echo '}';
echo 'function studentStats(studentId = 0)';
echo '{';
echo 'if(!classStatsHolder.classList.contains("hideElement"))';
echo '{';
echo 'classStatsHolder.classList.add("hideElement");';
echo '}';
echo 'if(!addStudentHolder.classList.contains("hideElement"))';
echo '{';
echo 'addStudentHolder.classList.add("hideElement");';
echo '}';
echo 'if(studentStatsHolder.classList.contains("hideElement"))';
echo '{';
echo 'studentStatsHolder.classList.remove("hideElement");';
echo '}';
echo '}';
echo 'function addStudent()';
echo '{';
echo 'if(!classStatsHolder.classList.contains("hideElement"))';
echo '{';
echo 'classStatsHolder.classList.add("hideElement");';
echo '}';
echo 'if(addStudentHolder.classList.contains("hideElement"))';
echo '{';
echo 'addStudentHolder.classList.remove("hideElement");';
echo '}';
echo 'if(!studentStatsHolder.classList.contains("hideElement"))';
echo '{';
echo 'studentStatsHolder.classList.add("hideElement");';
echo '}';
echo '}';
echo 'function addStudentJS()';
echo '{';
echo 'if(document.getElementById("quizzCode").value.length != 0)';
echo '{';
echo 'alert(document.getElementById("quizzCode").value);';
echo 'document.getElementById("quizzCode").value = "";';
echo '}';
echo '}';
echo '$("#quizzCode").keyup(function (e) {';
echo 'if (e.keyCode === 13) {';
echo 'addStudentJS();';
echo '}';
echo '});';
echo '</script>';
echo '<script>';
echo 'document.body.addEventListener("click", function (evt) {';
echo 'var userLoggedInDetails = document.getElementById("userLoggedInDetails");';
echo 'if(userLoggedInDetails != null)';
echo '{';
echo 'if(evt.target.classList.contains("userLoggedInPicture")) {';
echo 'if (userLoggedInDetails.classList.contains("hideElement")) {';
echo 'userLoggedInDetails.classList.remove("hideElement");';
echo '} else {';
echo 'userLoggedInDetails.classList.add("hideElement");';
echo '}';
echo '} else {';
echo 'userLoggedInDetails.classList.add("hideElement");';
echo '}';
echo '}';
echo '});';
echo '</script>';
?>