@include('template_blog.head')
@yield('isi')
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            @yield('konten')
            @include('template_blog.widget')
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
@include('template_blog.footer')
