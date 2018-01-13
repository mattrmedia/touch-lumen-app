<!DOCTYPE html>
<html lang="en">
  <head>
    <title>4.0 Passive</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/bundle.js"></script>
  </head>
  <body>
    <div id="app">
      <div class="wrapper">
        <header class="header">
          @include('header')
        </header>
        <section class="content">
          @yield('content')
        </section>
        <footer class="footer">
          @include('footer')
        </footer>
        @include('modal')
        @include('header-menu')
      </div>
    </div>
  </body>
</html>
