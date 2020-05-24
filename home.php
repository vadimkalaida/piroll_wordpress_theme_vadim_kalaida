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

    <div class="works" id="works">
        <div class="works_container">
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
                'posts_per_page' => '16',
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
            <a href="<?php echo home_url( '/works_expanded' ) ?>" class="works-btn" style="color: <?php echo get_theme_mod('works_button_text_color'); ?>;
                    background: <?php echo get_theme_mod('works_button_bg'); ?>;">
              <?php echo get_theme_mod('works_button_text'); ?>
            </a>
        </div>
    </div>

    <div class="workProcess" id="process">
        <div class="workProcess_container">
            <h3 class="workProcess-title" style="color: <?php echo get_theme_mod('worksProcess_title_color'); ?>;"><?php echo get_theme_mod('worksProcess_title'); ?></h3>
            <p class="workProcess-text" style="color: <?php echo get_theme_mod('worksProcess_description_color'); ?>;"><?php echo get_theme_mod('worksProcess_description'); ?></p>
            <iframe class="workProcess-video" src="<?php echo get_theme_mod('worksProcess_video_link'); ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <div class="services" id="services" style="background: <?php echo get_theme_mod('services_bg'); ?>;">
      <div class="services_container">
        <?php
        $args = array(
          'post_type'      => 'pi_services',
          'posts_per_page' => '100',
        );

        $query = new WP_Query($args);
        if($query->have_posts()) {
        while($query->have_posts()) {
        $query->the_post();
        ?>
          <div class="services_post">
            <?php if(has_post_thumbnail()) {
              echo get_the_post_thumbnail(get_the_ID());
            }else {
              echo '<img src="'.PI_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
            }; ?>
              <p class="services_post-title" style="color: <?php echo get_theme_mod('services_item_title_color'); ?>;"><?php echo get_post_meta(get_the_ID(), 'item_title', true); ?></p>
              <p class="services_post-text" style="color: <?php echo get_theme_mod('services_item_text_color'); ?>;"><?php echo get_post_meta(get_the_ID(), 'item_text', true); ?></p>
          </div>
          <?php
        }

        } else {}

        wp_reset_postdata();

        ?>
      </div>
    </div>

    <div class="testimonials" id="testimonials" style="background: <?php echo get_theme_mod('testimonials_bg'); ?>;">
        <div class="testimonials_container">

        </div>
    </div>

    <div class="clients" style="background: <?php echo get_theme_mod('clients_bg'); ?>;">
        <div class="clients_container">
            <div class="clients_posts">
              <?php
              $args = array(
                'post_type'      => 'pi_clients',
                'posts_per_page' => '100',
              );

              $query = new WP_Query($args);
              if($query->have_posts()) {
              while($query->have_posts()) {
              $query->the_post();
              ?>
                <div class="clients_post">
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

    <div class="contact" id="contact" style="background: <?php echo get_theme_mod('contact_bg'); ?>;">
        <div class="contact_container">
            <h3 class="contact-title" style="color: <?php echo get_theme_mod('contact_title_color'); ?>;"><?php echo get_theme_mod('contact_title'); ?></h3>
            <p class="contact-text" style="color: <?php echo get_theme_mod('contact_text_color'); ?>;"><?php echo get_theme_mod('contact_text'); ?></p>
            <div class="contact_form">
<!--              <form>-->
<!--                <div class="contact_form_top">-->
<!--                  <input type="text" name="name" class="contact_form_top-input" id="name" placeholder="Your Name" required>-->
<!--                  <input type="email" name="email" class="contact_form_top-input" id="email" placeholder="Your Email" required>-->
<!--                </div>-->
<!--                <input type="text" name="title" class="contact_form-input" id="title" placeholder="Your Title" required>-->
<!--                <textarea name="comment" class="contact_form-textarea" placeholder="Your Comment" id="comment"></textarea>-->
<!--                <input type="submit" name="submit" class="contact_form-btn" id="submit" value="Send message">-->
<!--              </form>-->
              <?php echo do_shortcode('[contact-form-7 id="11" title="Contact form 1"]')?>
            </div>
        </div>
    </div>
</main>

<?php
  get_footer();
?>
