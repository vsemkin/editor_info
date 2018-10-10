<?php
/*
*  YTPMV HUB
*  Copyright 2016 | sykhro, z-bata, +tek
*  common.php
*/

session_start();

if (isSet($_GET['lang'])) {
    $lang = $_GET['lang'];

    // register the session and set the cookie
    $_SESSION['lang'] = $lang;
    setcookie('lang', $lang, time() + (3600 * 24 * 30));
} else if (isSet($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else if (isSet($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
}

switch ($lang) {
    case 'it':
        $lang_file = 'it.php';
        break;
    
    case 'ru':
        $lang_file = 'ru.php';
        break;
        
    case 'fr':
        $lang_file = 'fr.php';
        break;
        
    case 'pl':
        $lang_file = 'pl.php';
        break;

    case 'en':
        $lang_file = 'en.php';
        break;

    default:
        $lang_file = 'en.php';

}

include_once 'app/lang/' . $lang_file;
?>
