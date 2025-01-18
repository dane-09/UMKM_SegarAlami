<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <!-- Judul dinamis berdasarkan halaman -->
        <h1 class="display-3 text-white mb-4 animated slideInDown">
            @if(Request::is('abouts'))
                About Us
            @elseif(Request::is('services'))
            Service
            @elseif(Request::is('products'))
                Product
            @elseif(Request::is('contacts'))
                Contact
            @else
                Page Title
            @endif
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{'/'}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    @if(Request::is('abouts'))
                    Abouts Us
                    @elseif(Request::is('contacts'))
                        Contact
                    @elseif(Request::is('products'))
                        Product
                    @elseif(Request::is('services'))
                        Service
                    @else
                        Default Page
                    @endif
                </li>
            </ol>
        </nav>
    </div>
</div>

