<?php
/*
Template Name: Home Page
Template Post Type: post
*/
$page = get_page_by_title('Home Post', OBJECT, 'post');
$postID = $page->ID;
?>

<section>
  <div class="page-container">
    <div id="player"></div>
    <div class="page-back">
    </div>
    <div class="page-front">
      <p>
        <?php $fieldGroupHome = get_field_objects($postID); ?>
        <?= $fieldGroupHome['first_line_banner']['value'] ?>
        <span><?= $fieldGroupHome['second_line_banner']['value'] ?></span>
      </p>
    </div>
  </div>
</section>
