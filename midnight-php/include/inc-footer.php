<footer class="section footer" id="footer">
  <div class="container">
    <div class="social-media">
      <?php if ($instagramurl != "") { ?>
        <a href="<?php echo $instagramurl; ?>" target="_blank" class="social-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-instagram">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M4 8a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />
            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
            <path d="M16.5 7.5v.01" />
          </svg>
        </a>
      <?php } ?>
      <?php if ($facebookurl != "") { ?>
        <a rel="nofollow" aria-label="Social Link" href="<?php echo $facebookurl; ?>" target="_blank" class="social-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-facebook">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
          </svg>
        </a>
      <?php } ?>
      <?php if ($twitterurl != "") { ?>
        <a href="<?php echo $twitterurl; ?>" target="_blank" class="social-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-x">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M4 4l11.733 16h4.267l-11.733 -16z" />
            <path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" />
          </svg>
        </a>
      <?php } ?>
      <?php if ($linkedinurl != "") { ?>
        <a href="<?php echo $linkedinurl; ?>" target="_blank" class="social-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-linkedin">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M8 11v5" />
            <path d="M8 8v.01" />
            <path d="M12 16v-5" />
            <path d="M16 16v-3a2 2 0 1 0 -4 0" />
            <path d="M3 7a4 4 0 0 1 4 -4h10a4 4 0 0 1 4 4v10a4 4 0 0 1 -4 4h-10a4 4 0 0 1 -4 -4z" />
          </svg>
        </a>
      <?php } ?>
      <?php if ($youtubeurl != "") { ?>
        <a rel="nofollow" aria-label="Social Link" href="<?php echo $youtubeurl; ?>" target="_blank" class="social-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-youtube">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M2 8a4 4 0 0 1 4 -4h12a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-12a4 4 0 0 1 -4 -4v-8z" />
            <path d="M10 9l5 3l-5 3z" />
          </svg>
        </a>
      <?php } ?>
    </div>
    <div class="copyright-bar">
      <div class="columns is-multiline is-vcentered row-copyright">
        <div class="column is-12-mobile is-12-tablet is-8-desktop is-8-widescreen col-copyright">
          <div class="copyright-detail dark">
            <small>&copy; <?php echo date("Y"); ?> <?php echo $copyrighttext; ?> by <?php echo $copyrightname; ?></small>
            <small class="copyright-line">|</small>
            <small>Powered by <a href='<?php echo $poweredbylink . $utmsource; ?>' class='powered-by-text' target="_blank"><?php echo $poweredby; ?></a></small>
          </div>
        </div>
        <div class="column is-12-mobile is-12-tablet is-4-desktop is-4-widescreen col-copyright">
          <ul class="footer-menu dark">
            <li>
              <small><a href="<?php echo $siteurl; ?>privacy-policy/">Privacy Policy</a></small>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<button class="scroll-to-top">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up">
    <polyline points="18 15 12 9 6 15"></polyline>
  </svg>
</button>