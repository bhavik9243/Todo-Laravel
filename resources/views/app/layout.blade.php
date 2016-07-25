<html>
  <head>
    <title>Starter Project</title>
    <!-- Responsive Shizz -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0">

    <!-- Normalize HTML5 Reset -->
    <link rel="stylesheet" href="{{ URL::to('css/normalize.css') }}">
    <!-- styles.css Link -->
    <link rel="stylesheet" href="{{ URL::to('css/styles.css') }}">
  </head>

  <body>
      <header id="main_navigation">
         <a href="{{ route('todo') }}" class="name">Do tasks</a>
         <a href="{{ route('pastelink') }}" class="button_link">Paste Link</a>
      </header>
      
      @yield('content')

  </body>
</html>
