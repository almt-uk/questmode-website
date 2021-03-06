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
echo '<title>Quest Mode</title>';
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
echo '<link rel="stylesheet" href="assets/style/cookieConsent.css" type="text/css">';
echo '<link rel="stylesheet" href="assets/style/material.css" type="text/css">';
echo '<link rel="stylesheet" href="assets/style/toolbar.css" type="text/css">';
echo '<script src="assets/script/cookieConsent.js" type="text/javascript"></script>';
echo '<style>';
echo 'img[alt="www.000webhost.com"] {';
echo 'display: none !important;';
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
echo '';
echo '/* Prevent Resizing on Padding */';
echo '* {';
echo '-moz-box-sizing: border-box;';
echo '-webkit-box-sizing: border-box;';
echo 'box-sizing: border-box;';
echo '}';
echo '';
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
echo 'width: 70%;';
echo '}';
echo '.leftSubolder {';
echo 'margin: 20px;';
echo 'padding: 10px;';
echo '}';
echo '';
echo '.rightHolder {';
echo 'float: left;';
echo 'width: 30%;';
echo 'margin-top: -30px;';
echo '}';
echo '.rightSubolder {';
echo 'margin-left: 20px;';
echo 'margin-right: 30px;';
echo '}';
echo '';
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
echo '';
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
?>

<?php
echo '<body>';
echo '<div class="toolbarHolder toolbarShadow unselectable" id="toolbar">';
echo '<div class="toolbarContent">';
echo '<div class="titleToolbar">';
echo 'Quest Mode';
echo '</div>';
echo '</div>';
if(!$isLoggedIn)
{
echo '<div class="toolbarUserSessionHolder">';
echo '<div class="toolbarUserSessionSignUp" onclick="goRegister();">';
echo 'Sign Up';
echo '</div>';
echo '<script type="text/javascript">';
echo 'function goRegister() {';
echo 'window.location = "/signup";';
echo '}';
echo '</script>';
echo '<div class="toolbarUserSessionLogIn" onclick="goLogin();">';
echo 'Log In';
echo '</div>';
echo '<script type="text/javascript">';
echo 'function goLogin() {';
echo 'window.location = "/login";';
echo '}';
echo '</script>';
echo '</div>';
}
else
{
echo '<div class="userLoggedInHolder">';
echo '<img class="userLoggedInPicture" src="https://firebasestorage.googleapis.com/v0/b/zeo-flow.appspot.com/o/ProfilePicturesLowQ%2F6jk6xzpHdrwB4kqok4xFDy2HrfobqKJeWRgOE470158261189.jpeg?alt=media" />';
echo '</div>';
}
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
if($isLoggedIn)
{
if(isset($_SESSION["userData"]))
{
$userData = json_decode($_SESSION["userData"]);
if(!$userData->is_teacher)
{
echo '<div class="userLoggedInOptionsItem" onclick="goJoinQuizz();">';
echo 'Join Quizz';
echo '</div>';
echo '<script type="text/javascript">';
echo 'function goJoinQuizz() {';
echo 'window.location = "/quizz/join";';
echo '}';
echo '</script>';
}
}
}
echo '<div class="userLoggedInOptionsItem">';
echo 'Help & Support';
echo '</div>';
echo '<div class="userLoggedInOptionsItem" onclick="logout()">';
echo 'Log Out';
echo '</div>';
echo '<script>';
echo 'function logout() {';
echo '$.ajax({';
echo 'type: "post",';
echo 'data: {';
echo 'ajax: 1,';
echo 'logout: true';
echo '},';
echo 'success: function(response){';
echo 'location.reload(true);';
echo '}';
echo '});';
echo '}';
echo '</script>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="contentHolder">';
echo '<div class="contentSubholder">';
echo '<div class="leftHolder">';
echo '<div class="leftSubolder">';
echo '';
echo '</div>';
echo '</div>';
echo '<div class="rightHolder unselectable">';
echo '<div class="rightSubolder">';
if($isLoggedIn)
{
if(isset($_SESSION["userData"]))
{
$userData = json_decode($_SESSION["userData"]);
if(!$userData->is_teacher)
{
echo '<div class="quizzJoinHolder">';
echo '<div class="quizzJoinTitle">';
echo 'Join Quizz';
echo '</div>';
echo '<div class="quizzJoinSubtitle">';
echo 'In case that you have a quizz code from your teacher, join it faster - no registration needed!';
echo '</div>';
echo '<div class="quizzJoinBtn" onclick="goJoinQuizz();">';
echo 'Join';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="quizzJoinHolder">';
echo '<div class="quizzJoinTitle">';
echo 'University Rankings by Year';
echo '</div>';
echo '<div class="quizzJoinSubtitle">';
echo '1. Name 14355 (LVL 54)';
echo '</div>';
echo '<div class="quizzJoinSubtitle">';
echo '2. Name 14355 (LVL 52)';
echo '</div>';
echo '<div class="quizzJoinSubtitle">';
echo '3. Name 14355 (LVL 23)';
echo '</div>';
echo '<div class="quizzJoinSubtitle">';
echo '...';
echo '</div>';
echo '<div class="quizzJoinSubtitle">';
echo '47. Name 143474575 (LVL 14)';
echo '</div>';
echo '</div>';
}
else
{
echo '<div class="quizzJoinHolder">';
echo '<div class="quizzJoinTitle">';
echo 'Manage Classes';
echo '</div>';
echo '<div class="quizzJoinSubtitle">';
echo 'Add students to your classes, create quizzes for classes and view statistics for them.';
echo '</div>';
echo '<div class="quizzJoinBtn" onclick="goTeacherManage();">';
echo 'Manage';
echo '</div>';
echo '<script type="text/javascript">';
echo 'function goTeacherManage() {';
echo 'window.location = "/teacher/manage";';
echo '}';
echo '</script>';
echo '</div>';
echo '';
echo '<div class="quizzJoinHolder">';
echo '<div class="quizzJoinTitle">';
echo 'Create Quizz';
echo '</div>';
echo '<div class="quizzJoinSubtitle">';
echo 'Create a quizz for your students.';
echo '</div>';
echo '<div class="quizzJoinBtn" onclick="goCreateQuizz();">';
echo 'Create';
echo '</div>';
echo '<script type="text/javascript">';
echo 'function goCreateQuizz() {';
echo 'window.location = "/teacher/quizz/create";';
echo '}';
echo '</script>';
echo '</div>';
}
}
}
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