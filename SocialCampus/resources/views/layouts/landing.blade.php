<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
  <head>
    @include('partials._head')
  </head>
  <body class="main-bg">
    @include('partials._messages')
    @yield('content')
    @include('partials._footer')
    @include('partials._scripts')
  </body>
</html>
