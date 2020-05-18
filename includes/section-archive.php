<div class="row">

<?php
if (have_posts()) :
  while (have_posts()):
    the_post();
  ?>
  
    <div class="card mb-3 col-lg-7 col-sm-12">
      <div class="card-body">

        <?php if(has_post_thumbnail()): ?>
            <!-- This has a featured image -->
            <div>
              <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="center mb-3 img-fluid img-thumbnail">
            </div>
      <?php endif; ?>
     

    <h1> <?php the_title(); ?>   </h1>

    <?php
    the_excerpt();//cut of some portion of text
    ?>
    <div class="">
      <a href="<?php the_permalink(); ?>" class="text-light btn btn-dark text-center"> Read More </a>
    </div>
    
  </div>
  
</div>

  <?php endwhile;
 else:
endif;
?>
<div class="col-lg-4 col-sm-12 border border-dark p-3 ml-5 widget">

  <?php if(is_active_sidebar('blog-sidebar')) :?>
  <?php dynamic_sidebar('blog-sidebar'); ?>

  <?php endif; ?>
</div>

</div>
