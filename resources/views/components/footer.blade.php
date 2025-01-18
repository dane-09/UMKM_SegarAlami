 <!-- Footer Start -->
 <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            @foreach ($contact as $item)
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Our Office</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{$item->lokasi}}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{$item->no}}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{$item->email}}</p>
            </div>
            @endforeach

            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Quick Links</h5>
                <a href="{{'/'}}" class="btn btn-link ">Home</a>
                <a href="{{'/abouts'}}" class="btn btn-link">About</a>
                <a href="{{'/services'}}" class="btn btn-link">Services</a>
                <a href="{{'/products'}}" class="btn btn-link">Products</a>
                <a href="{{'/contacts'}}" class="btn btn-link">Contacts</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Jam Operasional</h5>
                <p class="mb-1">Senin - Sabtu</p>
                <h6 class="text-light">05:30 pm - 00:00 am</h6>
                <p class="mb-1">Minggu</p>
                <h6 class="text-light">Tutup</h6>
            </div>

        </div>
    </div>
</div>
<!-- Footer End -->
