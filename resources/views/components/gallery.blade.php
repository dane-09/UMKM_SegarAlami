<!-- Gallery Start -->
<div class="container-xxl py-5 px-0">
    <div class="row g-0">
        @foreach ($gallery as $index => $item)
            @if ($index % 2 == 0)
            <!-- Kolom Baru -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ ($index / 2) * 0.2 }}s">
                <div class="row g-0">
            @endif

                    <!-- Elemen Gambar -->
                    <div class="col-12">
                        <a class="d-block" href="{{ Storage::url($item->gambar) }}" data-lightbox="gallery">
                            <img class="img-fluid" src="{{ Storage::url($item->gambar) }}" alt="Gallery {{ $loop->iteration }}">
                        </a>
                    </div>

            @if ($index % 2 == 1 || $loop->last)
                </div>
            </div>
            @endif
        @endforeach
    </div>
</div>
<!-- Gallery End -->
