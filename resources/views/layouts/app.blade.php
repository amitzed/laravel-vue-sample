<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Project</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      @if(Request::is('/'))
        @include('inc.greeting')
      @endif
      <div class="row">
        <div class="col-md-8 col-lg-8">
          @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
          @include('inc.sidebar')
        </div>
      </div>
    </div>

    <div class="footer">
      @include('inc.footer')
    </div>
  </body>
</html>
