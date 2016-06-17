<!DOCTYPE html>
<html>
  <head>
    @include('partials._head')
  </head>

  <body>

    @include('partials._nav')

    @include('partials._paralax')

    <div class="container">
      @yield('content')
    </div>

    @include('partials._footer')

    @include('partials._javascripts')
    @yield('scripts')
  </body>
</html>
