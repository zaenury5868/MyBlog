@include('template_blog.head')
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <!-- post content -->
                <div class="section-row">
                    @foreach($data as $list_post)
                    <div class="post post-row">
						<a class="post-img" href="{{ route('blog.isi', $list_post->slug ) }} "><img src="{{ asset($list_post->gambar)}}" alt="{{ $list_post->judul }}"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="#">{{ $list_post->category->name }}</a>
							</div>
							<h3 class="post-title"><a href="#">{{ $list_post->judul }}</a></h3>
							<ul class="post-meta">
								<li><a href="#">{{ $list_post->users->name }}</a></li>
								<li>{{ $list_post->created_at }}</li>
							</ul>
						</div>
					</div>
                    @endforeach
                    <center>{{$data->links()}}</center>
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

