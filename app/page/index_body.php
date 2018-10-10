            <h2 class="text"><?php echo $lang['HDR_ESSENTIALS']; ?></h2>
            <div class="divider"></div>

            <div class="link-wrapper">
              <p><?php echo $lang['HDR_STARTING']; ?>:</p>
              <a class="animlink" href="#vegas_guides"><?php echo $lang['STR_TUTS']; ?></a>
              <a class="animlink" href="#ytpmv_guides"><?php echo $lang['STR_GUIDS']; ?></a>
              <a class="animlink" href="/app/assets/torrents/vegas_plugins.torrent"><?php echo $lang['STR_PLUGS']; ?></a>

              <p><?php echo $lang['HDR_SPLIT']; ?>:</p>
              <a class="animlink" href="#split_soft"><?php echo $lang['SPLIT_SOFT']; ?></a>
              <a class="animlink" href="#howtosplit"><?php echo $lang['SPLIT_HOW']; ?></a>

              <p><?php echo $lang['HDR_MODULES']; ?>:</p>
              <a class="animlink" href="#console_music"><?php echo $lang['MOD_MUSIC']; ?></a>
              <a class="animlink" href="#keygen_music"><?php echo $lang['MOD_KEYGEN']; ?></a>
              <a class="animlink" href="#midi"><?php echo $lang['MOD_MIDI']; ?></a>

              <p><?php echo $lang['HDR_ADDONS']; ?>:</p>
              <a class="animlink" href="http://forest.watch.impress.co.jp/library/software/vocalshift/" target="_blank">vocal_shifter</a>
              <a class="animlink" href="http://utau.wikia.com/wiki/UTAU_wiki:Downloading_and_Installing_UTAU" target="_blank">utau</a>
              <a class="animlink" href="http://aviutl.info/intro/" target="_blank">aviutl</a>
              <br />
              <?php
              $dir_open = opendir('./app/assets/torrents/');

              while(false !== ($filename = readdir($dir_open))){
                  if($filename != "." && $filename != ".."){
                      $link = "<a class='animlink' href='/app/assets/torrents/$filename'> $filename </a><br />";
                      echo $link;
                  }
              }
              closedir($dir_open);
              ?>

              </div>

        