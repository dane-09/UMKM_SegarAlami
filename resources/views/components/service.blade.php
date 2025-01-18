 <!-- Service Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Services</p>
            <h1 class="mb-5">Melayani Kebutuhan Sehat dengan Sepenuh Hati</h1>
        </div>
        <div class="row gy-5 gx-4">
            @foreach ($service as $item)
            <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex h-100">
                    <div class="service-img">
                        <img class="img-fluid" src="{{ Storage::url($item->gambar_deskripsi) }}" alt="">
                    </div>
                    <div class="service-text p-5 pt-0">
                        <div class="service-icon">
                            <img class="img-fluid rounded-circle w-100" src="{{ Storage::url($item->gambar) }}" alt="">
                        </div>
                        <h5 class="mb-3">{{$item->tagline}}</h4>
                        <p class="mb-4">{{$item->deskripsi}}</p>

                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Service End -->
