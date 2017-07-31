<?php
/*
Template Name: Team Page
Template Post Type: post
*/

$page = get_page_by_title('Team Post', OBJECT, 'post');
$postID = $page->ID;
?>

<h2>EQUIPO</h2>

<section class="">
  <div class="team-container">
    <?php if( have_rows('team_mates', $postID) ):?>
    <div class="owl-carousel owl-theme team-slider">
      <?php while ( have_rows('team_mates', $postID) ) : the_row();
        //vars

        $img = get_sub_field('mate_img');
        $name = get_sub_field('mate_name');
        $last_name = get_sub_field('mate_last_name');
        $job = get_sub_field('mate_job');
        $info = get_sub_field('mate_info');

      ?>
      <div class="item">
        <div class="mate">
          <img src="<?php echo $img['url']; ?>" alt="">
          <figcaption>
            <p>
              <?= $job; ?>
            </p>
            <p>
              <?= $info; ?>
            </p>
          </figcaption>
          <p class="name"><?= $name; ?> <span><?= $last_name; ?></span></p>
        </div>
      </div>
    <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
