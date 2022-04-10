<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name') ?></title>

  <!-- Icon CDN -->
  <script type="module" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule="" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<?php
  $home_link = get_home_url();
?>

<body>
  <div class="header-container">
    <!-- Logo + Name -->
    <a class="header-logo" href='<?php echo $home_link; ?>' >
        <img class="logo" src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png" />
        <div class="header-logo-text">Teach 2 Reach</div>
    </a>
    <nav class="site-nav">
      <ion-icon class="menu-toggle" name="menu-outline" size="large"></ion-icon>
      <div class="menu-wrapper">
          <!-- Navigation -->
        <?php
        $args = array(
          "theme_location" => "primary",
          "menu" => "Navigation",         // Same name as menu we registered in register-settings.php
          "menu_class" => "nav"
        );
        wp_nav_menu($args);
        ?>
      </div>
    </nav>
  </div>

  <!-- body tag is closed in ./footer.php -->