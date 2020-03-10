<? php
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Quest Results</title>';
echo '';
echo '<!-- Disable tap highlight on IE -->';
echo '<meta name="msapplication-tap-highlight" content="no">';
echo '';
echo '<!-- Web Application Manifest -->';
echo '<link rel="manifest" href="manifest.json">';
echo '';
echo '<!-- Add to homescreen for Chrome on Android -->';
echo '<meta name="mobile-web-app-capable" content="yes">';
echo '<meta name="application-name" content="ZeoFlow">';
echo '<meta name="theme-color" content="#ffffff">';
echo '';
echo '<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
echo '<link rel="stylesheet" href="../assets/style/cookieConsent.css" type="text/css">';
echo '<link rel="stylesheet" href="../assets/style/material.css" type="text/css">';
echo '<script src="../assets/script/cookieConsent.js" type="text/javascript"></script>';
echo '';
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
echo '';
echo '/* Prevent Resizing on Padding Style */';
echo '* {';
echo '-moz-box-sizing: border-box;';
echo '-webkit-box-sizing: border-box;';
echo 'box-sizing: border-box;';
echo '}';
echo '';
echo '/* Website Content Holder Style */';
echo '.contentHolder {';
echo 'width: 100%;';
echo 'height: 100%;';
echo 'position: absolute;';
echo 'padding-left: 150px;';
echo 'padding-right: 150px;';
echo '}';
echo '';
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
echo 'font-family: 'PT Sans';';
echo 'text-align: center;';
echo 'font-size: 20px;';
echo '}';
echo '.inLeadNickname {';
echo 'font-family: 'PT Sans';';
echo 'text-align: center;';
echo 'font-size: 27px;';
echo 'font-weight: 900;';
echo '}';
echo '.inLeadPoints {';
echo 'font-family: 'PT Sans';';
echo 'text-align: center;';
echo 'font-size: 20px;';
echo 'font-weight: 900;';
echo '}';
echo '.behindExpTitle {';
echo 'font-family: 'PT Sans';';
echo 'text-align: center;';
echo 'font-size: 18px;';
echo 'margin-top: 20px;';
echo '}';
echo '.behindExpContent {';
echo 'font-family: 'PT Sans';';
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
echo 'font-family: 'PT Sans';';
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
echo 'font-family: 'PT Sans';';
echo 'text-shadow: 0px 2px, 2px 0px, 2px 2px;';
echo 'font-weight: 900;';
echo 'font-size: 40px;';
echo 'color: rgb(255, 255, 255);';
echo '';
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
echo '';
echo '</style>';
echo '';
echo '</head>';
echo '<body>';
echo '';
echo '<div class="contentHolder">';
echo '<div class="resultHolder" id="resultHolder">';
echo '<div class="resultOption">';
echo '<div class="resultOptionHolder answerOption1 resultFrame">';
echo '<div class="percentResult" style='height:95%;'>';
echo '</div>';
echo '<div class="percentResultNo">';
echo '5%';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="resultOption">';
echo '<div class="resultOptionHolder answerOption2 resultFrame">';
echo '<div class="percentResult" style='height:75%;'>';
echo '';
echo '</div>';
echo '<div class="percentResultNo">';
echo '25%';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="resultOption">';
echo '<div class="resultOptionHolder answerOption3 resultFrame">';
echo '<div class="percentResult" style='height:70%;'>';
echo '';
echo '</div>';
echo '<div class="percentResultNo">';
echo '30%';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="resultOption">';
echo '<div class="resultOptionHolder answerOption4 resultFrame">';
echo '<div class="percentResult" style='height:60%;'>';
echo '';
echo '</div>';
echo '<div class="percentResultNo">';
echo '40%';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="leadingHolder">';
echo '<div class="leadingSubolder">';
echo '<div class="leadingCentralize">';
echo '<div class="inLeadTitle">';
echo 'Is Leading';
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
echo '';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div id="myCookieConsent">';
echo '<a id="cookieButton">Understood</a>';
echo '<div>To help personalise content and provide a safer experience, we use cookies. By clicking on or navigating the site, you agree to allow us to collect information on and off Quest Mode through cookies. Learn more, including about available controls: <a href="/">Cookie Policy</a>.</div>';
echo '</div>';
echo '';
echo '</body>';
echo '<script>';
echo 'var time = 5;';
echo 'document.getElementById("countdownTime").innerHTML = time + "s";';
echo 'setInterval(function() {';
echo 'time--;';
echo 'if(time == 0)';
echo '{';
echo 'window.open("results.html", "_self");';
echo '}';
echo 'var countdownHolder = document.getElementById("countdownHolder");';
echo 'var countdown = document.getElementById("countdownTime");';
echo 'countdown.innerHTML = time + "s";';
echo '';
echo '}, 1000);';
echo '</script>';
?>