<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <link rel="shortcut icon" href=<?php echo get_site_icon_url(); ?> type="image/x-icon">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body>
  <nav class="nav">
    <div class="container">
      <div class="logo">
        <a href="#">
<?php
$logo = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $logo , 'full' );
$image_url = $image[0]; ?>
            <img id="logo-image" src="<?php echo $image_url; ?>" alt="" width="100">
            </a>
            </div>
<?php
wp_nav_menu( array(
    'theme_location'  => 'my-custom-menu',
    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container'       => 'div',
    'container_class' => 'main_list',
    'container_id'    => 'mainListDiv',
    'menu_class'      => 'navlinks',
    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
    'walker'          => new WP_Bootstrap_Navwalker(),
) );
?>
      <span class="navTrigger">
        <i></i>
        <i></i>
        <i></i>
      </span>
    </div>
  </nav>
<!--
по факту тут конец навбара
-->
<!--
      <section class="home">
      </section>
      <div style="height: 1000px">

            <h2 class="myH2">What is this ?</h2>
            <p class="myP">This is a responsive fixed navbar animated on scroll</p>
            <p class="myP">I took inspiration from  ABDO STEIF (<a href="https://codepen.io/abdosteif/pen/bRoyMb?editors=1100">https://codepen.io/abdosteif/pen/bRoyMb?editors=1100</a>)
            and Dicson <a href="https://codepen.io/dicson/pen/waKPgQ">(https://codepen.io/dicson/pen/waKPgQ)</a></p>
            <p class="myP">I HOPE YOU FIND THIS USEFULL</p>
            <p class="myP">Albi</p>
                <p class="myP">

                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione facere animi impedit rem labore sint repellendus ipsa sapiente voluptatem aut excepturi quo itaque, ab earum cumque. Voluptatem beatae id inventore quod voluptate qui deserunt, quis placeat, tempora ex totam, dolore sequi harum eos voluptatibus animi labore officiis minus laboriosam
            </p>
      </div>-->

  <!-- Jquery needed -->
  <!--
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="js/scripts.js"></script> -->

  <!-- Function used to shrink nav bar removing paddings and adding black background -->
