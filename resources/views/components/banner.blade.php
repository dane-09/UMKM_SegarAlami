 <!-- Banner Start -->
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
        </div>
    </div>
</div>
<!-- Banner End -->
