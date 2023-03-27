@include('layouts_admin.head')
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('layouts_admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('layouts_admin.navbar')
            <!-- partial -->
            <div class="main-panel">
                {{-- dashboard --}}
                @yield('content')
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('layouts_admin.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
@include('layouts_admin.tail')
