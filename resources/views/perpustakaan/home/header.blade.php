<style>
    .cours {
        width: 150px;
        height: 230px;
        margin: 0px;
    }

    !important
    ;
</style>
<section class="home-banner-area relative">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-8 col-md-12">
                <h1 class="wow fadeIn" data-wow-duration="4s">PERPUSTAKAAN <br> SMK WIKRAMA BOGOR</h1>
                <p class="text-white">
                    Melayani dengan Hati dan Teknologi
                </p>

                <div class="input-wrap">
                    <form action="/perpustakaan/search" method="GET" class="form-box d-flex justify-content-between">
                        <input type="text" placeholder="Search Judul" class="form-control" name="judul">
                        <input type="submit" class="btn search-btn" value="Search">
                    </form>
                </div>
                <h4 class="text-white">Top Lesson</h4>

                <div class="courses pt-20">
                    @foreach($kategoriViews as $kategoriView)
                        <a href="#" data-wow-duration="1s" data-wow-delay=".{{ $a++}}s"
                           class="primary-btn transparent mr-10 mb-10 wow fadeInDown">
                            {{ $kategoriView->nama_kategori }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="rocket-img">
        <img src="{{ asset('perpus/img/rocket.png')}}" alt="">
    </div>
</section>
<!-- End Banner Area -->
