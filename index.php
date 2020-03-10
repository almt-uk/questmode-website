<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  require_once $path . '/db_handler/web.php';
  if(!isset($_COOKIE['isLoggedIn']) || !$_COOKIE['isLoggedIn'])
  {
    echo "not logged in";
    $isLoggedIn = false;
  }
  else
  {
    $isLoggedIn = true;
  }
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Quest Mode">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quest Mode</title>
    <meta property="og:title" content="Quest Mode">
    <meta property="og:description" content="Quest Mode">
    <meta property="og:url" content="questmode.000webhostapp.com/">
    <meta property="og:site_name" content="Quest Mode">
    <meta name="keywords" content="quest mode, almt, hackathon">
  
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
  
    <!-- Web Application Manifest -->
    <link rel="manifest" href=" <?php echo $path . "/"; ?>manifest.json">
  
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="ZeoFlow">
    <meta name="theme-color" content="#ffffff">

</head>