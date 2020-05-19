<?php
/*
 * Template name: Page Works(expanded)
 */
get_header();
?>

<main>
  <div class="topBanner" id="topBanner" style="
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

  <div class="works" id="works">
    <div class="works_container">
      <h2 class="allWorks-title" style="color: <?php echo get_theme_mod('top_banner_btn_bg'); ?>;">All works</h2>
      <div class="works_posts">
        <?php
        $postsNumber = 1;
        $postsShow = 0;

        if($postsNumber == 1) {
          $postsShow = 1;
        } else {
          $postsShow = 2;
        }

        $args = array(
          'post_type'      => 'pi_works',
          'posts_per_page' => '256',
        );

        $query = new WP_Query($args);
        if($query->have_posts()) {
          while($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="works_post">
              <div class="works_post_hover">
                <a href="#" class="works_post_hover-btn"><img src="<?php echo get_theme_mod('works_image_hover_button'); ?>" alt="Button Image"></a>
              </div>
              <?php if(has_post_thumbnail()) {
                echo get_the_post_thumbnail(get_the_ID());
              }else {
                echo '<img src="'.PI_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
              }; ?>
            </div>
            <?php
          }

        } else {}

        wp_reset_postdata();

        ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
