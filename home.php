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
  
  <div class="about" style="background: <?php echo get_theme_mod('about_bg'); ?>">
    <div class="about_container">
      <h3 class="about-title" style="color: <?php echo get_theme_mod('about_title_color'); ?>"><?php echo get_theme_mod('about_title'); ?></h3>
      <p class="about-text" style="color: <?php echo get_theme_mod('about_text_color'); ?>"><?php echo get_theme_mod('about_text'); ?></p>
      <img class="about-img" src="<?php echo get_theme_mod('about_sign_image'); ?>" alt="Signature">
    </div>
  </div>
  
</main>

<?php
  get_footer();
?>
