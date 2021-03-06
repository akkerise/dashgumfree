<!DOCTYPE html>
<html lang="en">
<head>
  @include('dashgumfree.layouts.head')
  @yield('head_second')
</head>
<body>
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      @include('dashgumfree.layouts.header')

      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      @include('dashgumfree.layouts.aside')

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      @yield('content')
      <!--main content end-->
      @include('dashgumfree.layouts.footer')
    </section>
    @include('dashgumfree.layouts.footer_script')
    @yield('describe_index')
    @yield('describe_calendar')
    @yield('describe')
  </body>
  </html>
