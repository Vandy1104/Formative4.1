<?php get_header(); ?>

<section class="page-wrap">
<div class="container">

  <section class="row">
   <h1> Search results </h1><br>
    <div class="col-lg-9">

      <h1> <?php echo single_cat_title(); ?> </h1>
      <?php get_template_part('includes/section','archive'); ?>
      <!-- Pagination Method 1 -->
   <?php previous_posts_link();  ?>
   <?php next_posts_link();  ?>

   </div>
</section>
</div>
</section>
<?php get_footer(); ?>