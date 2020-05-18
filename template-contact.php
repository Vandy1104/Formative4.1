<?php
/*
Template Name: Contact
*/
?>


<?php get_header(); ?>


<section class="container page-wrap m-auto">

  <div class="row">
<div class="col-lg-9 ">
      <h1 class="mt-5 text-info"> <?php the_title(); ?>   </h1>

      <?php //get_template_part('includes/section','content'); ?>

      <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Name">
      </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Mesage</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="">
      <a href="<?php the_permalink(); ?>" class="text-light btn btn-info text-center my-2"> Send </a>
    </div>
</form>

</div>
<div class="col-lg-3 widget pl-5 mt-5">

  <?php if(is_active_sidebar('page-sidebar')) :?>
    <?php dynamic_sidebar('page-sidebar'); ?>

  <?php endif; ?>
</div>
</section>


<?php get_footer(); ?>