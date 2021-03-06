<?php
  session_start();
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'])
  {
    if(isset($_SESSION["userData"]))
    {
        $userData = json_decode($_SESSION["userData"]);
        if($userData->is_teacher)
        {
            header("Location: /",  true);
            exit;
        }
    }
  }
?>

<?php
  if(isset($_POST['logout']))
  {
    unset($_SESSION["isLoggedIn"]);
    unset($_SESSION["userData"]);
    session_destroy();
    header("Refresh:0");
    exit;
  }

  $path = $_SERVER['DOCUMENT_ROOT'];
  if(isset($_POST['joinQuizz']) && $_POST['joinQuizz']) {
    if(isset($_POST['quizzCode']) && isset($_POST['quizzNickname'])) {
        $quizzCode=$_POST['quizzCode'];
        $quizzNickname=$_POST['quizzNickname'];
        require_once $path . '/db_handler/web.php';
        $db = new DbHandlerWeb();
        $db->initializeAPI("xtoAkWqVGp4nDtW6tZL1AaJUCl9I3tYcqjfTBhSu", "PHZ7dh4vHtbJoF7kD2RtZQUxi3opTFeXvpa0Jp7R");
        $joinQuizz = $db->joinQuizz($quizzCode, $quizzNickname);
        if(!$joinQuizz["error"])
        {
          $_SESSION["questionRowsData"] = $joinQuizz["questionRowsData"];
          $_SESSION["quizzSessionID"] = $joinQuizz["session_id"];
          $_SESSION["quizzData"] = $joinQuizz["quizzData"];
          $_SESSION["currentQuestion"] = 0;
          header("Location: ../../quizz/wait");
          exit;
        }
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
echo '<title>Join Quest</title>';
echo '<!-- Disable tap highlight on IE -->';
echo '<!-- Web Application Manifest -->';
echo '<link rel="manifest" href="manifest.json">';
echo '<!-- Add to homescreen for Chrome on Android -->';
echo '<meta name="mobile-web-app-capable" content="yes">';
echo '<meta name="application-name" content="Quest Mode">';
echo '<meta name="theme-color" content="#ffffff">';
echo '<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
echo '<link rel="stylesheet" href="../../assets/style/cookieConsent.css" type="text/css">';
echo '<link rel="stylesheet" href="../../assets/style/material.css" type="text/css">';
echo '<link rel="stylesheet" href="../../assets/style/toolbar.css" type="text/css">';
echo '<script src="../../assets/script/cookieConsent.js" type="text/javascript"></script>';
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
echo 'padding-top: 90px;';
echo 'padding-bottom: 30px;';
echo 'width: 100%;';
echo 'position: absolute;';
echo '}';
echo '/* Question Content Style */';
echo '.quizzCodeHolder {';
echo 'background-color: rgb(236, 236, 236);';
echo 'font-family: "PT Sans";';
echo 'color: rgb(0, 0, 0);';
echo 'padding: 30px;';
echo 'position: fixed;';
echo 'top: 50%;';
echo 'left: 50%;';
echo 'transform: translateY(-50%) translateX(-50%);';
echo 'border-radius: 20px;';
echo '-webkit-filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 10px #222);';
echo '}';
echo '.quizzCodeTitle {';
echo 'text-align: center;';
echo 'font-weight: 900;';
echo 'font-size: 25px;';
echo 'font-family: "PT Sans";';
echo 'color: rgb(0, 0, 0);';
echo '}';
echo '.codeHolder {';
echo 'margin-top: 10px;';
echo 'text-align: center;';
echo 'font-weight: 900;';
echo 'font-size: 17px;';
echo 'color: rgb(0, 0, 0);';
echo '}';
echo '.nicknameHolder {';
echo 'margin-top: 10px;';
echo 'text-align: center;';
echo 'font-weight: 900;';
echo 'font-size: 17px;';
echo 'color: rgb(0, 0, 0);';
echo '}';
echo '.inputHolder {';
echo 'font-weight: 900;';
echo 'font-size: 18px;';
echo 'font-family: "PT Sans";';
echo '}';
echo '.quizzCodeBtn {';
echo 'width: fit-content;';
echo 'margin-top: 15px;';
echo 'padding-top: 6px;';
echo 'padding-bottom: 6px;';
echo 'font-weight: 900;';
echo 'font-size: 16px;';
echo 'padding-left: 24px;';
echo 'padding-right: 24px;';
echo 'font-family: "PT Sans";';
echo 'color: rgb(255, 255, 255);';
echo 'background-color: #2b00a0;';
echo 'border-radius: 5px;';
echo 'background-color: #2b00a0;';
echo '-webkit-filter: drop-shadow(0px 0px 4px #2b00a0c0);';
echo 'filter: drop-shadow(0px 0px 4px #2b00a0be);';
echo '-moz-box-shadow: inset 0 0 10px #00000083;';
echo '-webkit-box-shadow: inset 0 0 10px #00000083;';
echo 'box-shadow: inset 0 0 10px #00000083;';
echo 'margin-left: 50%;';
echo 'transform: translate(-50%, 0%);';
echo '}';
echo '.quizzCodeBtn:hover {';
echo 'transform: translate(-50%, 0%) scale(0.95);';
echo 'background-color: #3b00df;';
echo '-webkit-filter: drop-shadow(0px 0px 6px #1a008dc0);';
echo 'filter: drop-shadow(0px 0px 6px #1a008dbe);';
echo '-moz-box-shadow: inset 0 0 10px #00000083;';
echo '-webkit-box-shadow: inset 0 0 10px #00000083;';
echo 'cursor: pointer;';
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
echo 'window.location = "/";';
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
echo '<div class="userLoggedInOptionsItem" onclick="goJoinQuizz();">';
echo 'Join Quizz';
echo '</div>';
echo '<script type="text/javascript">';
echo 'function goJoinQuizz() {';
echo 'window.location = "/quizz/join";';
echo '}';
echo '</script>';
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
echo '<div class="contentHolder unselectable">';
echo '<div class="quizzCodeHolder">';
echo '<div class="quizzCodeTitle">';
echo 'Enter Quizz Code';
echo '</div>';
echo '<div class="inputHolder">';
echo '<label class="pure-material-textfield-outlined codeHolder">';
echo '<input class="inputHolder" id="quizzCode" placeholder=" " type="text" required>';
echo '<span>Code</span>';
echo '</label>';
echo '</div>';
echo '<div class="inputHolder">';
echo '<label class="pure-material-textfield-outlined nicknameHolder">';
echo '<input class="inputHolder" id="quizzNickname" placeholder=" " type="text" required>';
echo '<span>Nickname</span>';
echo '</label>';
echo '</div>';
echo '<div class="quizzCodeBtn" onclick="checkData();">';
echo 'Join Quizz';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div id="myCookieConsent">';
echo '<a id="cookieButton">Understood</a>';
echo '<div>To help personalise content and provide a safer experience, we use cookies. By clicking on or navigating the site, you agree to allow us to collect information on and off Quest Mode through cookies. Learn more, including about available controls: <a href="/">Cookie Policy</a>.</div>';
echo '</div>';
echo '</body>';
echo '<script>';
echo 'function checkData()';
echo '{';
echo 'if(document.getElementById("quizzCode").value.length != 0';
echo '&& document.getElementById("quizzNickname").value.length != 0)';
echo '{';
echo '$.ajax({';
echo 'type: "post",';
echo 'data: {';
echo 'joinQuizz: true,';
echo 'quizzCode: document.getElementById("quizzCode").value,';
echo 'quizzNickname: document.getElementById("quizzNickname").value';
echo '},';
echo 'success: function(response){';
echo 'document.getElementById("quizzCode").value = "";';
echo 'document.getElementById("quizzNickname").value = "";';
echo 'window.location = "/quizz/wait";';
echo '}';
echo '});';
echo '}';
echo '}';
echo '$("#quizzNickname").keyup(function (e) {';
echo 'if (e.keyCode === 13) {';
echo 'checkData();';
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