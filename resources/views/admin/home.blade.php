<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.include.css')
    
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.include.sidebar')
     
      <!-- partial -->
      
        <!-- partial:partials/_navbar.html -->
       @include('admin.include.navbar')
        <!-- partial -->
        @yield('content')
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.include.script')
    
  </body>
</html>

