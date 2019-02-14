<header
  class="torque-header">

  <div class="header-background-color"></div>

  <div class="row torque-header-content-wrapper torque-navigation-toggle">

    <div class="torque-header-logo-wrapper">
      <?php get_template_part( 'parts/shared/logo', 'white'); ?>
    </div>

    <div class="torque-header-burger-menu-wrapper">
      <?php get_template_part( 'parts/elements/element', 'burger-menu-squeeze'); ?>
    </div>

  </div>

  <div class="torque-navigation-toggle mega-menu-wrapper">
    <div class="mega-menu-overlay" ></div>

    <?php get_template_part( 'parts/shared/mega-menu' ); ?>
  </div>

</header>
