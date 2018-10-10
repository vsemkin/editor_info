<!DOCTYPE html>

<?php
require '../common.php';

if(!isset($_COOKIE['lang'])) {
    exit(header('Location: /langselect.php'));

}

include_once './page/header.php';
flush(); ?>

<body>
  <video class="fadeinvideo" id="bgvid" playsinline autoplay muted loop>
    <source id="source" src="">
  </video>
  <div class="dim"></div>

  <?php include_once './page/page_header.php'; ?>
  <?php include_once './page/shared.php'; ?>

  <div class="wrapper">
        <div style="display: block;">
          <p style="text-transform: uppercase; font-size:24px;"><?php echo $lang2['404_ERR']; ?></p>
          <br />
          <a href="/" class="btn404"><img src="/app/assets/images/home.jpg" height="50px"></img></a>
        </div>
  </div>

  <?php include_once './page/page_footer.php'; ?>
</body>

<?php
flush();
include_once './page/scripts.php'; ?>

</html>
