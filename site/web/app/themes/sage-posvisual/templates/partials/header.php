<header class="banner">
  <section class="top-header">
    <div class="container">
      <aside class="logo-bg">
        <a class="brand" href="<?= esc_url(home_url('/')); ?>">
          <img class="img-fluid" src="<?php echo IMAGES_URL; ?>/logo.png" alt="<?php bloginfo('name'); ?>"/>
        </a>
      </aside>
      <aside class="contact">
          <a class="phone" href="TEL:03 9583 0691">03 9583 0691</a>
          <ul class="social-media list-unstyled">
            <li><a class="call-us fancybox-media fancybox.iframe callback" href="#"><i class="fa fa-phone"></i></a></li>
            <li><a class="email enquiry enquire-trigger"><i class="fa fa-envelope"></i></a></li>
            <li><a class="location" href="/contact.html#section2"><i class="fa fa-map-marker"></i></a></li>
            <li><a class="facebook" target="_blank" href=" https://www.facebook.com/POS-Visual-Solutions-157569997596675/timeline/"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedIn" target="_blank" href=" https://www.linkedin.com/company/pos-visual-solutions"><i class="fa fa-linkedin"></i></a></li>
          </ul>
      </aside>
    </div>
  </section>

  <nav class="navbar navbar-dark bg-inverse">
    <?php
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu( array(
              'menu'              => 'primary_navigation',
              'theme_location'    => 'primary_navigation',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => 'container',
              'container_id'      => 'bs-example-navbar-collapse-1',
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
      );
    endif;
    ?>
  </nav>
  <?php if(is_front_page()) get_template_part('templates/partials/slider','home');?>

</header>

