<header class="banner">
  <div class="container">
    <nav class="navbar is-tillman center-navbar-content" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="brand brand-logo" href="{{ home_url('/') }}">
        <i class="fas fa-wifi tillman-connection"></i>
        <span class="navbar-company-name">{{ get_bloginfo('name', 'display') }}</span>
        </a>
      </div>
      <div class="navbar-menu">
        <div class="navbar-end">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </div>
      </div>
    </nav>
  </div>
</header>
