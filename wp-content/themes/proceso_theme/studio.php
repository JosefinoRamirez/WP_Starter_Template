<?php
/*
Template Name: Studio Page
Template Post Type: post
*/
$page = get_page_by_title('Studio Post', OBJECT, 'post');
$postID = $page->ID;
?>

<section class="studio">
  <?php $fieldGroupHome = get_field_objects($postID ); ?>
  <h1>
    <?= $fieldGroupHome['studio_title']['value'] ?>
  </h1>
  <p>
    <?= $fieldGroupHome['studio_text']['value'] ?>

  </p>
</section>
