<!DOCTYPE html>

<?php
require 'common.php';

if(!isset($_COOKIE['lang'])) {
    exit(header('Location: /langselect.php'));

}
include_once './app/page/header.php';
flush(); ?>

<body>
  <video class="fadeinvideo" id="bgvid" playsinline autoplay muted loop>
    <source id="source" src="">
  </video>
  <div class="dim"></div>

  <?php include_once './app/page/page_header.php'; ?>
  <?php include_once './app/page/shared.php'; ?>

  <div class="wrapper">
      <div class="row">
        <div class="col"><?php include_once './app/page/credits.php'; ?></div>
        <div class="col"><?php include_once './app/page/form.php'; ?></div>
      </div>
  </div>

  <?php include_once './app/page/page_footer.php'; ?>
</body>

<?php
flush();
include_once './app/page/scripts.php'; 
?>
<script src="https://www.google.com/recaptcha/api.js?hl=<?php echo $_COOKIE['lang']  // our language codes are identical to Google's, 'cause we're the cool guys
?>"></script>;

</html>
