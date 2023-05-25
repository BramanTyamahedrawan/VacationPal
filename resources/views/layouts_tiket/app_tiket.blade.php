@include('layouts_tiket.head')
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('layouts_tiket.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('layouts_tiket.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('booking')
                @yield('detail')
                @yield('lunas')
                @yield('bayar_ditempat')
                @yield('batal')
                @include('layouts_admin.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    @include('layouts_tiket.tail')
