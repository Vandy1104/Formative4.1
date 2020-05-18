<div class="bg-light">
  <div class="row">
  <div class="col-lg-8 col-sm-12 text-dark">
    <?php if(has_post_thumbnail()): ?>
        This has a featured image
        <div>
          <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="mb-3 img-fluid img-thumbnail">
        </div>
  <?php endif; ?>
<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
?>


<?php
    the_content();
    // the_author();
?>

<?php  echo get_the_date('l, h:i:s d/m/Y');  ?>

<?php
  $categories = get_the_category();
  foreach($categories as $cat):?>

  <a class="text-light" href="<?php echo get_category_link($cat->term_id); ?>">
    <?php echo $cat->name; //go and add single_cat_title() in archive ?>
  </a>
<?php endforeach; ?>

</div>
<div class="col-lg-3 widget border border-info p-3">

  <?php if(is_active_sidebar('page-sidebar')) :?>
    <?php dynamic_sidebar('page-sidebar'); ?>

  <?php endif; ?>
</div>
</div>
<?php
  $fname = get_the_author_meta('first_name');
  $lname = get_the_author_meta('last_name');
  ?>
  <p class="text-primary font-italic"> <?php echo 'Posted by ' . $fname . ' ' . $lname; ?> </p>
  <?php
    $tags = get_the_tags();
    ?>
      <p class="text-danger "> Tags:
        <?php
        echo ' ';
    if($tags):
    foreach($tags as $tag):?>

      <a class="text-dark mr-5" href="<?php echo get_tag_link($tag -> term_id);  ?>">
        <?php echo  $tag -> name; ?>
      </a>

<?php endforeach;
else:
endif;
?>
</p>

<?php
  $categories = get_the_category();
  ?>
    <p class="text-danger"> Categories:
      <?php
      echo ' ';
  foreach($categories as $cat):?>

  <a class="text-dark mr-3" href="<?php echo get_category_link($cat->term_id); ?>">
    <?php echo $cat->name; //go and add single_cat_title() in archive ?>
  </a>
<?php endforeach; ?>
</p>

<?php //comments_template();?>
<!-- /to get multiple parts of a page add this in single.php -->

<?php

  endwhile;
 else:
endif;

?>
</div>
