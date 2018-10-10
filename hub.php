<!DOCTYPE html>

<?php
include 'common.php';
include './app/page/header.php';
flush(); ?>

<body class="fadein">
    <section class="big-background">

        <div class="pattern"></div>
        <div class="big-background-container">
            <h2 class="text"><?php echo $lang['HDR_ESSENTIALS']; ?></h2>
            <div class="divider"></div>
            <div class="dividerhidding"></div>

            <div class="link-wrapper">
              <p><?php echo $lang['HDR_STARTING']; ?>:</p>
              <a href="vegas_guides.php"><?php echo $lang['STR_TUTS']; ?></a>
              <a href="ytpmv_guides.php"><?php echo $lang['STR_GUIDS']; ?></a>
              <a href="vegas_plugins.torrent"><?php echo $lang['STR_PLUGS']; ?></a>

              <p><?php echo $lang['HDR_SPLIT']; ?>:</p>
              <a href="split_soft.php"><?php echo $lang['SPLIT_SOFT']; ?></a>
              <a href="howtosplit.php"><?php echo $lang['SPLIT_HOW']; ?></a>

              <p><?php echo $lang['HDR_MODULES']; ?>:</p>
              <a href="console_music"><?php echo $lang['MOD_MUSIC']; ?></a>
              <a href="keygen_music.php"><?php echo $lang['MOD_KEYGEN']; ?></a>
              <a href="midis.php"><?php echo $lang['MOD_MIDI']; ?></a>

              <p><?php echo $lang['HDR_ADDONS']; ?>:</p>
              <?php
              $dir_open = opendir('./app/assets/torrents/');

              while(false !== ($filename = readdir($dir_open))){
                  if($filename != "." && $filename != ".."){
                      $link = "<a href='/app/assets/torrents/$filename'> $filename </a><br />";
                      echo $link;
                  }
              }
              closedir($dir_open);
              ?>

              </div>

            </a>
        </div>
    </section>
</body>
<?php
flush();
include './app/page/scripts.php'; ?>
</html>
