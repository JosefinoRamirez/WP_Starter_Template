<?php
/*
Template Name: Cases Page
Template Post Type: post
*/

$page = get_page_by_title('Cases Post', OBJECT, 'post');
$postID = $page->ID;
?>


<?php if( have_rows('case', $postID) ): ?>

<div class="owl-carousel owl-theme cases-slider">
    <?php while( have_rows('case', $postID) ): the_row();
        // vars
        $image_top = get_sub_field('case_image_top')['url'];
        $title_top = get_sub_field('case_title_top');
        $info_top = get_sub_field('case_info_top');
        $image_bottom = get_sub_field('case_image_bottom')['url'];
        $title_bottom = get_sub_field('case_title_bottom');
        $info_bottom = get_sub_field('case_info_bottom');

        // var_dump($fieldGroupHome['case']['value']['case_title_top']);
        // die();

    ?>

    <div class="item">
        <section class="cases">
          <div class="cases-top">
            <div class="case">
              <img src="<?php echo $image_top; ?>" alt="">
              <div class="info">
                <p>
                  <?php echo $title_top; ?>
                  <span><?php echo $info_top; ?></span>
                </p>
                <a href="#">ver más</a>
              </div>
            </div>
          </div>
          <div class="cases-bottom">
              <div class="case">
                <img src="<?php echo $image_bottom; ?>" alt="">
                <div class="info">
                  <p>
                    <?php echo $title_bottom; ?>
                    <span><?php echo $info_bottom; ?></span>
                  </p>
                  <a href="#">ver más</a>
                </div>
              </div>
          </div>
        </section>
    </div>

    <?php endwhile; ?>

</div>

<?php endif; ?>
