@include('layouts_tiket.head')
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('layouts_tiket.sidebar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->

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
@include('layouts_tiket.tail')
