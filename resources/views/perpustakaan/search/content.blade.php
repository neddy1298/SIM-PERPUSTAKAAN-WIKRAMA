@extends('perpustakaan.app', ['activePage' => 'Search'])

@section('header')

    @include('perpustakaan.search.header')

@endsection

@section('content')

    <!-- Start Faculty Area -->
    <section class="faculty-area section-gap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h1>Ebook Search Result</h1>
                        <p>
                            About {{$ebook_s->count()}} Ebook results
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center">
                @foreach ($ebook_s as $ebook_s)
                    <div class="col-lg-4 col-md-6 col-sm-12 single-faculty">
                        <div class="thumb d-flex justify-content-center">
                            <img class="img-fluid" src="{{ asset('asset') }}/upload/ebook/{{ $ebook_s->cover }}" alt=""
                                 width="200px">
                        </div>
                        <div class="meta-text text-justify">
                            <h4 class="text-center">{{ $ebook_s->judul }}</h4>
                            <p class=" mt-4 mb-4 text-left designation">Pengarang: {{ $ebook_s->pengarang }} <br>
                                Penerbit:
                                {{ $ebook_s->penerbit }}</p>
                            <div class="info wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
                                {!! substr($ebook_s->deskripsi, 0,200) !!} ...


                            </div>

                            <div class="align-items-center justify-content-center d-flex">
                                <a href="{{ route('perpustakaan_e-book_detail', $ebook_s->id) }}"
                                   class="primary-btn text-white">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h1>E-Tube Search Result</h1>
                        <p>
                            About {{$etube_s->count()}} E-Tubes results
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center">
                @foreach ($etube_s as $etube_s)
                    <div class="col-lg-4 col-md-6 col-sm-12 single-faculty">
                        <div class="thumb d-flex justify-content-center">
                            <img class="img-fluid" src="https://img.youtube.com/vi/{{ $etube_s->link }}/mqdefault.jpg
                    ">
                        </div>
                        <div class="meta-text text-justify">
                            <h4 class="text-center">{{ $etube_s->judul }}</h4>
                            <p class=" mt-4 mb-4 text-left designation">Author: {{ $etube_s->author }} <br>
                                Tanggal: {{ date('d M, Y', strtotime($etube_s->created_at)) }}</p>
                            <div class="info wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
                                {!! substr($etube_s->deskripsi, 0,200) !!} ...
                            </div>
                            <div class="align-items-center justify-content-center d-flex">
                                <a href="/perpustakaan/video/{{$etube_s->id }}" class="primary-btn text-white">View
                                    More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <hr>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h1>Blog Search Result</h1>
                        <p>
                            About {{$artikel_s->count()}} Blog results
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center d-flex align-items-center">
                @foreach ($artikel_s as $artikel_s)
                    <div class="col-lg-4 col-md-6 col-sm-12 single-faculty">
                        <div class="thumb d-flex justify-content-center">
                            <img class="img-fluid" src="{{ asset('asset') }}/upload/ebook/{{ $artikel_s->cover }}"
                                 alt=""
                                 width="200px">
                        </div>
                        <div class="meta-text text-justify">
                            <h4 class="text-center">{{ $artikel_s->judul }}</h4>
                            <p class=" mt-4 mb-4 text-left designation">Pengarang: {{ $artikel_s->author }} <br>
                                Tanggal:
                                {{ date('d M, Y', strtotime($artikel_s->created_at)) }}</p>
                            <div class="info wow fadeIn" data-wow-duration="1s" data-wow-delay=".1s">
                                {!! substr($artikel_s->deskripsi, 0,200) !!} ...


                            </div>

                            <div class="align-items-center justify-content-center d-flex">
                                <a href="{{ route('perpustakaan_blog_detail',$artikel_s->id) }}"
                                   class="primary-btn text-white">View More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
