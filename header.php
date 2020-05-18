<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php wp_head(); ?>
</head>
<body>


<header class="container">

<!-- logo -->

<div class="">
<?php
wp_nav_menu(
  array(
  'theme_location' => 'top-menu',
 //  'menu' => 'Top Bar',
  'menu_class' => 'top-bar'
  )
);


?>

</div>

</header>