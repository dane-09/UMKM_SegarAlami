<div class="container mt-5">
    <!-- Judul Halaman -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Dashboard</h2>
        <p class="text-muted">Kelola website Anda dengan mudah menggunakan opsi di bawah ini</p>
        <hr class="w-50 mx-auto">
    </div>

    <div class="row">
        <!-- Kartu Aksi -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <i class="bi bi-box-seam display-3 text-primary mb-3"></i>
                    <h5 class="card-title">Produk</h5>
                    <p class="text-muted">Tambahkan dan kelola produk yang ditampilkan di website Anda.</p>
                    <a href="{{ route('product.create') }}" class="btn btn-primary w-100">
                        <i class="bi bi-plus-circle"></i> Tambah Produk
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <i class="bi bi-tools display-3 text-success mb-3"></i>
                    <h5 class="card-title">Layanan</h5>
                    <p class="text-muted">Tentukan dan perbarui layanan yang Anda tawarkan.</p>
                    <a href="{{ route('service.create') }}" class="btn btn-success w-100">
                        <i class="bi bi-plus-circle"></i> Tambah Layanan
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <i class="bi bi-images display-3 text-warning mb-3"></i>
                    <h5 class="card-title">Banner</h5>
                    <p class="text-muted">Unggah banner promosi untuk menampilkan penawaran Anda.</p>
                    <a href="{{ route('banner.create') }}" class="btn btn-warning w-100 text-white">
                        <i class="bi bi-plus-circle"></i> Tambah Banner
                    </a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card shadow-sm text-center">
                <div class="card-body">
                    <i class="bi bi-camera display-3 text-info mb-3"></i>
                    <h5 class="card-title">Galeri</h5>
                    <p class="text-muted">Tambahkan gambar ke galeri untuk dampak visual yang lebih baik.</p>
                    <a href="{{ route('gallery.create') }}" class="btn btn-info w-100">
                        <i class="bi bi-plus-circle"></i> Tambah Galeri
                    </a>
                </div>
            </div>
        </div>
    </div>

  
</div>
