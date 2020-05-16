<?php
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
  
  <div class="about" id="about" style="background: <?php echo get_theme_mod('about_bg'); ?>">
    <div class="about_container">
      <h3 class="about-title" style="color: <?php echo get_theme_mod('about_title_color'); ?>"><?php echo get_theme_mod('about_title'); ?></h3>
      <p class="about-text" style="color: <?php echo get_theme_mod('about_text_color'); ?>"><?php echo get_theme_mod('about_text'); ?></p>
      <img class="about-img" src="<?php echo get_theme_mod('about_sign_image'); ?>" alt="Signature">
    </div>
  </div>
    
  <div class="skills" id="skills">
      <div class="skills_container">
          <div class="skills_left">
              <div class="skills_left_container">
                  <h3 class="skills-title" style="color: <?php echo get_theme_mod('skills_title_color'); ?>;"><?php echo get_theme_mod('skills_title'); ?></h3>
                  <div class="skills_posts">
                    <?php
                    $args = array(
                      'post_type'      => 'pi_skills',
                      'posts_per_page' => '30',
                    );

                    $query = new WP_Query($args);
                    if($query->have_posts()) {
                    while($query->have_posts()) {
                    $query->the_post();
                    ?>

                      <div class="skills_post">
                          <p class="skills_post-text" style="color: <?php echo get_theme_mod('skills_item_title_color'); ?>;">
                              <?php echo get_post_meta(get_the_ID(), 'skill_title_', true); ?>
                              <span><?php echo get_post_meta(get_the_ID(), 'skill_percent', true); ?>%</span>
                          </p>
                        <div class="skills_post_bar">
                          <div class="skills_post_colorBar" style="width: <?php echo get_post_meta(get_the_ID(), 'skill_percent', true); ?>%;
                            background: <?php echo get_theme_mod('skills_bar_color'); ?>;"></div>
                        </div>
                      </div>

                      <?php
                    }

                    } else {}

                    wp_reset_postdata();

                    ?>
                  </div>
              </div>
          </div>
          <div class="skills_right" style="
              background: url('<?php echo get_theme_mod('skills_img'); ?>');
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
              ">
          </div>
      </div>  
  </div>

    <div class="numbers" style="background: <?php echo get_theme_mod('numbers_bg'); ?>">
        <div class="numbers_container">
          <?php
          $args = array(
            'post_type'      => 'pi_numbers',
            'posts_per_page' => '40',
          );

          $query = new WP_Query($args);
          if($query->have_posts()) {
          while($query->have_posts()) {
          $query->the_post();
          ?>
            <div class="numbers_post">
              <?php if(has_post_thumbnail()) {
                echo get_the_post_thumbnail(get_the_ID());
              }else {
                echo '<img src="'.PI_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
              }; ?>
                <div class="numbers_post_text">
                    <div class="numbers_post-number" style="color: <?php echo get_theme_mod('numbers_color'); ?>;"><?php echo get_post_meta(get_the_ID(), 'number', true); ?></div>
                    <div class="numbers_post-title" style="color: <?php echo get_theme_mod('numbers_titles_color'); ?>;"><?php echo get_post_meta(get_the_ID(), 'numbers_item_tittle', true); ?></div>
                </div>
            </div>
            <?php
          }

          } else {}

          wp_reset_postdata();

          ?>
        </div>
    </div>
</main>

<?php
  get_footer();
?>
