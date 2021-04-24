<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- META UNTUK GOOGLE MAX:100-140 -->
	<meta name="description" content=""/>

	<!-- META UNTUK FACEBOOK -->
	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:image" content="">
	<meta property="og:url" content="">

	<!-- META UNTUK TWITTER -->
	<meta name="twitter:title" content="">
	<meta name="twitter:description" content="">
	<meta name="twitter:image" content="">
	<meta name="twitter:card" content="">

	<title>Blog</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" />
	<link type="text/css" rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" />
	<link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('public/frontend/css/style.css')}}" />
</head>

<body>
	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">

			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->
                    <ul class="nav-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<ul class="nav-menu">
                        <li><a href="{{url('')}}">beranda</a></li>
						<li class="has-dropdown">
							<a href="#">kategori</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
                                        @foreach ($category_widget as $hasil)
										    <li><a href="{{ route('blog.category', $hasil->slug) }}">{{$hasil->name}}</a></li>
                                        @endforeach
									</ul>
								</div>
							</div>
						</li>
						<li><a href="{{route('blog.list')}}">listpost</a></li>
                        <!-- search & aside toggle -->
                        <div class="nav-btns">
                            <button class="aside-btn"><i class="fa fa-bars"></i></button>
                            <button class="search-btn"><i class="fa fa-search"></i></button>

                                <input type="checkbox" id="btn">
                                <span class="custom-switch-description">Dark Mode</span>

                            <div id="nav-search">
                                <form action="{{route('blog.cari')}}" method="get">
                                    <input class="input" name="cari" placeholder="Masukkan yang anda cari">
                                </form>
                                <button class="nav-close search-close">
                                    <span></span>
                                </button>
                            </div>
                        </div>
                        <!-- /search & aside toggle -->

					</ul>
					<!-- /nav -->
				</div>
			</div>
			<!-- /Main Nav -->

			<!-- Aside Nav -->
			<div id="nav-aside">
				<ul class="nav-aside-menu">
					<li><a href="{{url('')}}">Beranda</a></li>
					<li class="has-dropdown"><a>Kategori</a>
						<ul class="dropdown">
							@foreach ($category_widget as $hasil)
								<li><a href="{{ route('blog.category', $hasil->slug) }}">{{$hasil->name}}</a></li>
                            @endforeach
						</ul>
					</li>
					<li><a href="#">Tentang Saya</a></li>
					<li><a href="contact.html">Kontak</a></li>
					<li><a href="#">Privasi</a></li>
				</ul>
				<button class="nav-close nav-aside-close"><span></span></button>
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	{{-- </header>
	<!-- /HEADER --> --}}
