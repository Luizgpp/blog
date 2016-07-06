<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content white">
  <li><a href="{{ route('posts.index') }}">Posts</a></li>
  <li class="divider"></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav class="brown darken-1">
  <div class="nav-wrapper">
    <ul class="right hide-on-med-and-down">
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">MENU<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
    <a href="/" class="brand-logo center">Blog</a>
    <ul class="left hide-on-med-and-down">
      <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>
      <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog</a></li>
      <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About</a></li>
      <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
      <!-- Dropdown Trigger -->
    </ul>
  </div>
</nav>
