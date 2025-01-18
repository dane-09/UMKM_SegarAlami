<!-- Features Start -->
@foreach ($aboutus as $index => $item)
<div id=about class="container-xxl py-5" style="background-color: #ffffff;">
    <div class="container">
        <div class="row g-5 align-items-center justify-content-center text-center">
            @if ($index % 2 == 0)
            <!-- Teks di sebelah kiri, gambar di sebelah kanan -->
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title bg-white text-start text-primary pe-3 mx-auto d-inline-block">{{ $item->sub_tagline }}</p>
                <h1 class="mb-4">{{ $item->tagline }}</h1>
                <p class="mb-4">{{ $item->deskripsi }}</p>
                <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="">Explore More</a>
            </div>
            <div class="col-lg-6">
                <div class="rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center bg-primary py-5 px-4 mx-auto" style="max-width: 300px;">
                                <img class="img-fluid mb-4" src="{{ Storage::url($item->gambar) }}" alt="">
                                <h1 class="display-6 text-white" data-toggle="counter-up">22</h1>
                                <span class="fs-5 fw-semi-bold text-secondary"> Tahun Pengalaman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <!-- Gambar di sebelah kiri, teks di sebelah kanan -->
            <div class="col-lg-6">
                <div class="rounded overflow-hidden">
                    <div class="row g-0">
                        <div class="col-sm-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="text-center bg-secondary py-5 px-4 mx-auto" style="max-width: 300px;">
                                <img class="img-fluid mb-4" src="{{ Storage::url($item->gambar) }}" alt="">
                                <h1 class="display-6 text-white" data-toggle="counter-up">2</h1>
                                <span class="fs-5 fw-semi-bold text-white">Cabang</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title bg-white text-start text-primary pe-3 mx-auto d-inline-block">{{ $item->sub_tagline }}</p>
                <h1 class="mb-4">{{ $item->tagline }}</h1>
                <p class="mb-4">{{ $item->deskripsi }}</p>
                <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="">Explore More</a>
            </div>
            @endif
        </div>
    </div>
</div>
@endforeach
<!-- Features End -->
