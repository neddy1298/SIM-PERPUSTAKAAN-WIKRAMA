@extends('perpustakaan.app', ['activePage' => 'Blog'])

@section('header')

    @include('perpustakaan.blog.header')

@endsection

@section('content')

    <!-- Start top-category-widget Area -->
    @include('perpustakaan.e-learning.topMenu',['selectedMenu' => 'Blog'])
    <!-- End top-category-widget Area -->

    <!-- Start post-content Area -->
    <section class="post-content-area">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 posts-list">
                    @foreach($artikels as $artikel)
                        <div class="single-post row">
                            <div class="col-lg-3  col-md-3 meta-details">
                                <ul class="tags">
                                    <li>tags: <a class="badge" href="#">{{$artikel->nama_kategori}}</a></li>
                                </ul>
                                <div class="user-details row">
                                    <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{$artikel->author}}</a>
                                        <span
                                            class="lnr lnr-user"></span></p>
                                    <p class="date col-lg-12 col-md-12 col-6"><a
                                            href="#">{{$artikel->created_at->format('d M, Y')}}</a> <span
                                            class="lnr lnr-calendar-full"></span></p>
                                    <p class="view col-lg-12 col-md-12 col-6"><a href="#">{{ $artikel->views }}
                                            Views</a> <span
                                            class="lnr lnr-eye"></span></p>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-9 ">
                                <div class="feature-img">
                                    <img class="img-fluid"
                                         src="{{ asset('asset') }}/upload/artikel/{{ $artikel->cover }}"
                                         alt="">
                                </div>
                                <a class="posts-title" href="{{ route('perpustakaan_blog_detail',$artikel->id) }}">
                                    <h3>{{ substr($artikel->judul, 0 ,70)}}</h3>
                                </a>
                                <div class="excert">
                                    {!! substr ($artikel->deskripsi, 0, 250) !!} ...

                                </div>

                                <a href="{{ route('perpustakaan_blog_detail',$artikel->id) }}" class="primary-btn">View
                                    More</a>
                            </div>
                        </div>
                    @endforeach

                    <nav aria-label="artikels">
                        <ul class="pagination justify-content-end mb-0">
                            {{ $artikels->links("perpustakaan.pagination.default") }}
                        </ul>
                    </nav>
                </div>
                @include('perpustakaan.navbar.sidebar')
            </div>
        </div>
    </section>
    <!-- End post-content Area -->
@endsection
