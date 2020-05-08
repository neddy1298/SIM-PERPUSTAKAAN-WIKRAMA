@extends('perpustakaan.app', ['activePage' => 'E-Learning'])

@section('header')

    @include('perpustakaan.e-learning.e-book.detail.header')

@endsection

@section('content')

    <!-- Start post-content Area -->
    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">


                    <!-- Start Content -->


                    <div class="single-post row">
                        <div class="col-lg-12" style="margin-bottom: 10px">
                            <!--
                                <div class="feature-img" align="center" >
                                    <img class="img-fluid" src="img/blog/feature-img1.jpg" alt="">

                                </div> -->
                            <style>
                                .fonte {
                                    color: #3E3E3E;
                                    letter-spacing: 0.8px;
                                    line-height: 1.2;;
                                    font-family: Quicksand, sans-serif !important;
                                    font-weight: 300 !important;
                                }

                                .tipe {
                                    font-size: .8em;
                                    color: #a2a2a2;
                                }
                            </style>
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="text-center shadow rounded img-responsive"
                                         src="{{ asset('asset') }}/upload/ebook/{{ $book->cover }}" width="210px"
                                         alt=""><br>
                                    <p class="text-center" style="font-size: 14px;margin-top:10px;"><a href="">Download
                                            E-Book <i class=" fa fa-download"></i></a></p>
                                </div>
                                <div class="col-md-8" style="padding-top: 1%;">
                                    <br>
                                    <span class="tipe">Reguler <i class="fa fa-question-circle"></i></span>
                                    <h2 class="fonte">{!! $book->judul !!}</h2>
                                    <p style="font-size: 15.5px;padding-top: 1.5%;  letter-spacing: 0.3px;">Disusun Oleh
                                        :
                                        <a href="" style="color: #3498db">{{ $book->pengarang }}</a></p>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-top: 3%;">
                                <li class="nav-item">
                                    <a class="nav-link active" id="informasi-tab" data-toggle="tab" href="#informasi"
                                       role="tab" aria-controls="informasi" aria-selected="true">Deskripsi Buku</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tugas-tab" data-toggle="tab" href="#tugas" role="tab"
                                       aria-controls="tugas" aria-selected="false">Detail</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="informasi" role="tabpanel"
                                     aria-labelledby="informasi-tab">
                                    <br>
                                    {!! $book->deskripsi !!}
                                </div>
                                <div class="tab-pane fade" id="tugas" role="tabpanel" aria-labelledby="tugas-tab">
                                    <div class="row " style="margin-top: 3%;">
                                        <div class="col-md-3">
                                            <p>Judul</p>
                                            <p>Jumlah Halaman</p>
                                            <p>Tahun Terbit</p>
                                            <p>ISBN</p>
                                            <p>Bahasa</p>
                                            <p>Penerbit</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p style="font-weight: 600">{!! $book->judul !!}</p>
                                            <p style="font-weight: 600">{{ $book->jumlah_halaman}}</p>
                                            <p style="font-weight: 600">{{ $book->tahun_terbit }}</p>
                                            <p style="font-weight: 600">{{ $book->isbn }}</p>
                                            <p style="font-weight: 600">Indonesia</p>
                                            <p style="font-weight: 600">{{ $book->penerbit }}</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- End Content -->


                    <div class="navigation-area">
                        <div class="row">

                        </div>
                    </div>

                </div>
                @include('perpustakaan.navbar.sidebar')
            </div>
        </div>
    </section>
    <!-- End post-content Area -->
@endsection
