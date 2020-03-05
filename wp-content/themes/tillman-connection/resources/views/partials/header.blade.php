<header class="banner">
  <div class="container">
    <nav class="navbar is-tillman center-navbar-content" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="brand brand-logo" href="{{ home_url('/') }}">
          <i class="fas fa-wifi is-size-3 is-size-4-touch tillman-connection"></i>
          <span class="navbar-company-name is-size-4 is-size-5-touch">{{ get_bloginfo('name', 'display') }}</span>
        </a>
        <a role="button" class="navbar-burger tillman-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div id="navMenu" class="navbar-menu">
        <div class="navbar-end">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </div>
      </div>
    </nav>
  </div>
</header>
