{{-- <header class="banner">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header> --}}

<header class="header-wrapper">  
  <a href="" class="logo"><img src="@asset('images/logo.png')" alt="Wizards Unite"></a>
<!-- navigatie -->
<div class="container header_container">
  <div class="row">
      <div class="col-12 col-md-6">
          <h1 class="logo">Wizards Unite Fanpage</h1>
      </div>
      <div class="col-12 col-md-6 nav">
          <nav class="nav-main">
              <ul class="navbar-right">
                  <li class="page_item"><a class="nav-item__link active" href="index.html" title="Fans">De Fanclub</a></li>
                  <li class="page_item"><a class="nav-item__link" href="creatures.html" title="Creatures">Magical Creatures</a></li>
                  <li class="page_item"><a class="nav-item__link" href="wordfan.html" title="Contact">Word fan!</a></li>
              </ul>
          </nav>
      </div>
  </div>
</div>
</header>