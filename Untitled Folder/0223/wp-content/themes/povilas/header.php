<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">

    <script src="https://use.fontawesome.com/f97b0d4a22.js"></script>
	<?php wp_head(); ?>
  </head>
  <body>
    <header>
      <div class="container">
          <h1> <a href=" <?php echo get_home_url(); ?>"><?php bloginfo('name') ?></a> </h1>
        <p><?php bloginfo('description') ?></p>
      </div>
    </header>
    <nav>
      <div class="container">
		  <?php header_navigation(); ?>


      </div>
    </nav>
    <main>
      <div class="container">
