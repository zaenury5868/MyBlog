@include('template_blog.head')
<!-- PAGE HEADER -->
@foreach($data as $isi_post)
<div id="post-header" class="page-header">
    <div class="page-header-bg" style="background-image: url({{asset($isi_post->gambar) }});" data-stellar-background-ratio="0.5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="post-category">
                    <a href="#" style="color:white;">{{ $isi_post->category->name }}</a>
                </div>
                <h1>{{ $isi_post->judul }}</h1>
                <ul class="post-meta">
                    <li><a href="#">{{ $isi_post->users->name }}</a></li>
                    <li>{{ $isi_post->created_at->diffForHumans() }}</li>
                    {{-- <li><i class="fa fa-comments"></i> 3</li>
                    <li><i class="fa fa-eye"></i> 807</li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /PAGE HEADER -->
</header>
@endforeach
<!-- /HEADER -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <!-- post share -->
                <div class="section-row">
                    <div class="post-share">
                        <a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
                        <a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
                        <a href="#" ><i class="fa fa-envelope"></i><span>Email</span></a>
                    </div>
                </div>
                <!-- /post share -->

                <!-- post content -->
                <div class="section-row">
                    @foreach($data as $isi_post)
                        {{$isi_post->content}}
                    @endforeach
                </div>
                <!-- /post content -->
            </div>
            @include('template_blog.widget')
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

@include('template_blog.footer')

