<div class="col-lg-4 sidebar-widgets">
    <div class="widget-wrap">
    <!-- 						<div class="single-sidebar-widget search-widget">
							<form class="search-form" action="#">
								<input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<div class="single-sidebar-widget user-info-widget">
							<img src="{{ asset('perpus/img/blog/user-info.png')}}" alt="">
							<a href="#"><h4>Charlie Barber</h4></a>
							<p>
								Senior blog writer
							</p>
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
							<p>
								Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot
								camp when you can get. Boot camps have itssuppor ters andits detractors.
							</p>
						</div> -->
        <div class="single-sidebar-widget popular-post-widget">
            <h4 class="popular-title">Latest Blog</h4>
            <div class="popular-post-list">
                @foreach ($artikelViews as $artikelView)
                    <div class="single-post-list d-flex flex-row align-items-center">
                        <div class="item">
                            {{-- <img class="avatar avatar-sm rounded-rounded"
                                src="{{ asset('asset')}}/upload/artikel/{{ $artikelView->cover }}" alt=""> --}}
                            <img src="{{ asset('asset')}}/upload/artikel/{{ $artikelView->cover }}" class=""
                                 style="margin-right: 7px" width="80px">
                        </div>
                        <div class="details">
                            <a href="{{ route('perpustakaan_blog_detail',$artikelView->id) }}">
                                <h6>{{ $artikelView->judul }}</h6>
                            </a>
                            <p>{{ $artikelView->created_at->formatLocalized('%d %B, %Y') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <hr>
            <h4 class="popular-title">Latest E-Book</h4>
            <div class="single-sidebar-widget ads-widget">
                <div class="row">
                    <div class="col-md-12  img-fluid" align="center">
                        <!-- <h1 class="text-center">Buku</h1>	 -->
                        <div class="large-12 columns">
                            <div class="owl-carousel owl-theme grab" style="margin-top: -20px">
                                @foreach ($CarouselebookViews as $CarouselebookView)

                                    <div class="item cours"><br>
                                        <a href="{{ route('perpustakaan_e-book_detail', $CarouselebookView->id) }}">
                                            <img src="{{asset('asset')}}/upload/ebook/{{ $CarouselebookView->cover}}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            <div class="single-sidebar-widget post-category-widget">
                <h4 class="category-title">Post Catgories</h4>
                <ul class="cat-list">
                    @foreach ($kategoriViews as $kategori)
                        <li>
                            <a href="#" class="d-flex justify-content-between">
                                <p>{{ $kategori->nama_kategori }}</p>
                                {{-- <p>37</p> --}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
