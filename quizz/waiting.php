<?php
  session_start();
  if(isset($_POST['logout']))
  {
    unset($_SESSION["isLoggedIn"]);
    unset($_SESSION["userData"]);
    session_destroy();
    header("Refresh:0");
    exit;
  }
?>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  require_once $path . '/db_handler/web.php';
  if(!isset($_SESSION['isLoggedIn']))
  {
    $isLoggedIn = false;
  }
  else
  {
    $isLoggedIn = $_SESSION['isLoggedIn'];
  }
?>

<?php
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Waiting To Play</title>';
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
echo 'img[alt="www.000webhost.com"] {';
echo 'display: none !important;';
echo '}';
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
echo '/* Prevent Resizing on Padding */';
echo '* {';
echo '-moz-box-sizing: border-box;';
echo '-webkit-box-sizing: border-box;';
echo 'box-sizing: border-box;';
echo '}';
echo '/* Website Content Holder */';
echo '.contentHolder {';
echo 'padding-top: 60px;';
echo 'padding-bottom: 30px;';
echo 'width: 100%;';
echo 'position: absolute;';
echo '}';
echo '/* Question Content Style */';
echo '.quizzWaitingTitle {';
echo 'background-color: rgb(236, 236, 236);';
echo 'text-align: center;';
echo 'font-weight: 900;';
echo 'font-size: 40px;';
echo 'text-shadow: 0px 2px, 2px 0px, 2px 2px;';
echo 'font-family: "PT Sans";';
echo 'color: rgb(0, 0, 0);';
echo 'padding: 50px;';
echo 'position: fixed;';
echo 'top: 50%;';
echo 'left: 50%;';
echo 'transform: perspective(1px) translateY(-50%) translateX(-50%);';
echo 'border-radius: 50px;';
echo '-webkit-filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 10px #222);';
echo '}';
echo '</style>';
echo '</head>';
?>

<?php
echo '<body>';
echo '<div class="toolbarHolder toolbarShadow unselectable" id="toolbar">';
echo '<div class="toolbarContent">';
echo '<div class="titleToolbar" onclick="goHome();">';
echo 'Quest Mode';
echo '</div>';
echo '<script type="text/javascript">';
echo 'function goHome() {';
echo 'window.location = "../";';
echo '}';
echo '</script>';
echo '</div>';
echo '<div class="toolbarUserSessionHolder">';
echo '<div class="toolbarUserSessionSignUp" onclick="goRegister();">';
echo 'Sign Up';
echo '</div>';
echo '<script type="text/javascript">';
echo 'function goRegister() {';
echo 'window.location = "../signup";';
echo '}';
echo '</script>';
echo '<div class="toolbarUserSessionLogIn" onclick="goLogin();">';
echo 'Log In';
echo '</div>';
echo '<script type="text/javascript">';
echo 'function goLogin() {';
echo 'window.location = "../login";';
echo '}';
echo '</script>';
echo '</div>';
echo '<div class="userLoggedInHolder">';
echo '<img class="userLoggedInPicture" src="https://firebasestorage.googleapis.com/v0/b/zeo-flow.appspot.com/o/ProfilePicturesLowQ%2F6jk6xzpHdrwB4kqok4xFDy2HrfobqKJeWRgOE470158261189.jpeg?alt=media" />';
echo '</div>';
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
echo '<div class="quizzWaitingTitle" id="quizzWaitingTitle">Waiting for others...</div>';
echo '</div>';
echo '<div id="myCookieConsent">';
echo '<a id="cookieButton">Understood</a>';
echo '<div>To help personalise content and provide a safer experience, we use cookies. By clicking on or navigating the site, you agree to allow us to collect information on and off Quest Mode through cookies. Learn more, including about available controls: <a href="/">Cookie Policy</a>.</div>';
echo '</div>';
echo '</body>';
echo '<script>';
echo 'setInterval(function()';
echo '{';
echo 'var content = document.getElementById("quizzWaitingTitle").innerHTML;';
echo 'if(content.substr(content.length - 3) == "...") {';
echo 'document.getElementById("quizzWaitingTitle").innerHTML = content.substr(0, content.length - 3);';
echo '} else {';
echo 'document.getElementById("quizzWaitingTitle").innerHTML += ".";';
echo '}';
echo '}, 1000);';
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