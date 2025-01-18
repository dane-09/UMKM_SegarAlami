  <!-- Product Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3"> Products</p>
            <h1 class="mb-5">Produk Alami Segar untuk Gaya Hidup Sehat</h1>
        </div>
        <div class="row gx-4">
            @foreach ($product as $item)
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="{{ Storage::url($item->gambar) }}" alt="">
                        <div class="product-overlay">
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5" href="">{{$item->tagline}}</a>
                        <span class="text-primary me-1">{{$item->deskripsi}}</span>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Product End -->
