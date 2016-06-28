<!DOCTYPE html>
<html>
  <head>
    @include('partials._head')
  </head>

  <body>

    @include('partials._nav')

    @yield('paralax')

    <div class="container">
      @include('partials._messages')
      @yield('content')
    </div>

    @include('partials._footer')

    @include('partials._javascripts')
    @yield('scripts')
  </body>
</html>
