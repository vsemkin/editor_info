<!DOCTYPE html>

<?php
require 'common.php';

if(isset($_COOKIE['lang'])) {
    header('Location: /index.php'); // *shrug*
    exit();
}

include_once './app/page/header.php';
flush(); ?>

<body>
    <!-- stylistic choice for language select not to have video background -->
    <div class="dim"></div>
	<div class="wrapper" style="margin-top: 25em; width: 100%;">
        <a href="/?lang=en" class="big-btn animlink">english</a>
        <a href="/?lang=ru" class="big-btn animlink">русский</a>
        <a href="/?lang=br" class="big-btn animlink">português</a>
        <a href="/?lang=fr" class="big-btn animlink">français</a>
        <a href="/?lang=it" class="big-btn animlink">italiano</a>
        <a href="/?lang=es" class="big-btn animlink">español</a>
        <a href="/?lang=de" class="big-btn animlink">deutsch</a>
        <a href="/?lang=pl" class="big-btn animlink">polski</a>
        <a href="/?lang=ua" class="big-btn animlink">українська</a>
        <a href="/?lang=jp" class="big-btn animlink">日本語</a>
   </div> 
</body>

<?php
flush();
include_once './app/page/scripts.php'; ?>

</html>