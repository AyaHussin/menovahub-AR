<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <!-- Mata &  Favicons -->
    @include('layouts.meta')

    <!--  Main Style header -->
    @include('layouts.style')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class=" d-flex align-items-center">
        @include('layouts.header')
    </header>
    <!-- End Header -->



    <main id="main">
        @yield('content')
    </main>
    <!-- ======= Footer & preloader ======= -->
        @include('layouts.footer')
    <!-- End Footer -->

    <!-- Vendor Scripts -->
  @include('layouts.footer-scripts')


</body>

</html>
