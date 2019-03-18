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
    <footer id="footer" class="page-footer font-small blue pt-4">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
          <!-- Content -->
          <h5 class="text-uppercase">Test Project</h5>
          <p>Want to Know More?</p>
        </div>
        <!-- Grid column -->
        <hr class="clearfix w-100 d-md-none pb-3">
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
            <!-- Links -->
            <h5 class="text-uppercase">Partners</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#!">IBM</a>
              </li>
              <li>
                <a href="#!">Apple</a>
              </li>
              <li>
                <a href="#!">Cause Labs</a>
              </li>
              <li>
                <a href="#!">Amazon</a>
              </li>
            </ul>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">
            <!-- Links -->
            <h5 class="text-uppercase">Articles</h5>
            <ul class="list-unstyled">
              <li>
                <a href="#!">Medium</a>
              </li>
              <li>
                <a href="#!">Forbes</a>
              </li>
              <li>
                <a href="#!">NY Times</a>
              </li>
              <li>
                <a href="#!">LinkedIn</a>
              </li>
            </ul>
          </div>
          <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <!-- Footer Links -->
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="https://amitzaman.com/"> AZ</a>
    </div>
    <!-- Copyright -->
  </footer>
  </body>
</html>
