<?php
  get_header();
?>

<main>
  <div class="topBanner" style="
          background: url('<?php echo get_theme_mod('top_banner_bg'); ?>');
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          ">
    <div class="topBanner_container">
      <div class="topBanner_right">
        <h2 class="topBanner-title"><?php echo get_theme_mod('top_banner_title'); ?></h2>
        <p class="topBanner-text"><?php echo get_theme_mod('top_banner_text'); ?></p>
        <button class="topBanner-btn" style="background: <?php echo get_theme_mod('top_banner_btn_bg'); ?>; color: <?php echo get_theme_mod('top_banner_btn_text_color'); ?>">
          <?php echo get_theme_mod('top_banner_btn_text'); ?>
        </button>
      </div>
      
    </div>
  </div>
</main>

<?php
  get_footer();
?>
