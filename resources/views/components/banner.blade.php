 <!-- Banner Start -->
<<<<<<< HEAD
 <div class="container-fluid banner my-5 py-5" data-parallax="scroll" data-image-src="{{asset('assets/img/sus.jpg')}}">
    <div class="container py-5">
        <div class="row g-5">
            @foreach ($banner as $item)
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-4">
                        <img class="img-fluid rounded" src="{{ Storage::url($item->gambar) }}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <h2 class="text-white mb-3">{{$item->tagline}}</h2>
                        <p class="text-white mb-4">{{$item->deskripsi}}</p>
                    </div>
                </div>
            </div>
            @endforeach
=======
 <div class="container-fluid banner my-5 py-5" data-parallax="scroll" data-image-src="{{asset('assets/img/banner.jpg')}}">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-4">
                        <img class="img-fluid rounded" src="{{asset('assets/img/banner-1.jpg')}}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <h2 class="text-white mb-3">We Sell Best Dairy Products</h2>
                        <p class="text-white mb-4">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a class="btn btn-secondary rounded-pill py-2 px-4" href="">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="row g-4 align-items-center">
                    <div class="col-sm-4">
                        <img class="img-fluid rounded" src="{{asset('assets/img/banner-2.jpg')}}" alt="">
                    </div>
                    <div class="col-sm-8">
                        <h2 class="text-white mb-3">We Deliver Fresh Mild Worldwide</h2>
                        <p class="text-white mb-4">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a class="btn btn-secondary rounded-pill py-2 px-4" href="">Read More</a>
                    </div>
                </div>
            </div>
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
        </div>
    </div>
</div>
<!-- Banner End -->
