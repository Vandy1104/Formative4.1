<?php

//Hook1: customize-register to define new Cutomizer panels, settings, controls
function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here


   // Background Colour
   $wp_customize->add_setting( 'Community org_backgroundColour' , array(
       'default'   => '#ffffff',
       'transport' => 'refresh',
   ) );


   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'Community org_backgroundColourControl', array(
   	'label'      => __( 'Background Colour', 'Community org Theme' ),
    'description' => 'Change the background Colour',
   	'section'    => 'colors',
   	'settings'   => 'Community org_backgroundColour',
   ) ) );

   // Header and Footer Community org_backgroundColour // Background Colour
   $wp_customize->add_setting( 'Community org_headerFooterColour' , array(
    'default'   => '#000000',
    'transport' => 'refresh',
) );


$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'Community org_headerFooterColourControl', array(
    'label'      => __( 'Header and Footer Colour', 'Community org Theme' ),
 'description' => 'Change the Header and Footer Colour',
    'section'    => 'colors',
    'settings'   => 'Community org_headerFooterColour',
) ) );

// Footer Message
$wp_customize->add_section( 'Community org_footerSection' , array(
    'title'      => __( 'Footer Text', 'Community org Theme' ),
    'priority'   => 30,
));

$wp_customize->add_setting( 'Community org_footerMessage' , array(
    'default'   => 'copyright@2020',
    'transport' => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'Community org_footerMessageControl', array(
  'label'      => __( 'Footer Text', 'Community org Theme' ),
  'section'    => 'Community org_footerSection',
  'settings'   => 'Community org_footerMessage',
) ) );

 // Site Title Text
 $wp_customize->add_section( 'Community org_siteTitleTextSection' , array(
    'title'      => __( 'Site Title Text', 'Community org Theme' ),
    'priority'   => 30,
));

$wp_customize->add_setting( 'Community org_siteTitleText' , array(
    'default'   => 'WIA',
    'transport' => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'Community org_siteTitleTextControl', array(
  'label'      => __( 'Site Title Text', 'Community org Theme' ),
  'section'    => 'Community org_siteTitleTextSection',
  'settings'   => 'Community org_siteTitleText',
) ) );

// header image

$wp_customize->add_section( 'Community org_frontPageImage' , array(
    'title'      => __( 'Front Page Header Image', 'Community org Theme' ),
    'priority'   => 30,
) );

$wp_customize->add_setting( 'Community org_frontPageImageSetting' , array(
    'default'   => '',
    'transport' => 'refresh',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'Community org_frontPageImageControl', array(
  'label'      => __( 'Front Page Header Image', 'Community org Theme' ),
  'section'    => 'Community org_frontPageImage',
  'settings'   => 'Community org_frontPageImageSetting',
) ) );


   }

   add_action( 'customize_register', 'mytheme_customize_register' );

   
//Hook2: wp_head to output custom-generated CSS
function mytheme_customize_css()
{
  ?>
   <style type="text/css">
   body {
           background-color: <?php echo get_theme_mod('Community org_backgroundColour','#ffffff'); ?>!important;
        }
  .myTheme{
            background-color: <?php echo get_theme_mod('Community org_headerFooterColour', '#000000'); ?>!important ;
          }


 </style>
   <?php
}
add_action( 'wp_head', 'mytheme_customize_css');