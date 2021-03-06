<!-- Dropdown Structure -->
@if (Auth::check())

  <ul id="dropdown1" class="dropdown-content white">
    <li><a href="{{ route('posts.index') }}">Posts</a></li>
    <li><a href="{{ route('categories.index')}}">Categorias</a></li>
    <li><a href="{{ route('tags.index')}}">Tags</a></li>
    <li class="divider"></li>
    <li class="divider"></li>
    <li><a href="{{ route('logout') }}">Logout</a></li>
  </ul>

@endif

<nav class="brown darken-1">
  <div class="nav-wrapper">
    @if ( Auth::check() )

      <ul class="right">
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>

    @else

      <ul class="right" >
        <li class="{{ Request::is('auth/login') ? "active" : "" }}"><a href="{{ route('login') }}">Login</a></li>
      </ul>

    @endif
    <a href="/" class="brand-logo center">Blog</a>
    <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    <ul class="left hide-on-med-and-down">
      <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
      <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>
      <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
      <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
      <!-- Dropdown Trigger -->
    </ul>
    <ul class="side-nav brown darken-1" id="mobile">
      <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
      <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>
      <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
      <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
      <!-- Dropdown Trigger -->
    </ul>
  </div>
</nav>
