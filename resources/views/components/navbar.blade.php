 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="index.html" class="navbar-brand d-flex align-items-center">
<<<<<<< HEAD
        <img src="{{ asset('assets/img/logoumkm.jpg') }}" alt="New Logo" style="height: 70px; width: auto; margin-right: 10px;">
        <h1 class="m-0">Segar Alami</h1>
    </a>


=======
        <h1 class="m-0">Milky</h1>
    </a>
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{'/'}}" class="nav-item nav-link active">Home</a>
            <a href="{{'/abouts'}}" class="nav-item nav-link">About</a>
            <a href="{{'/services'}}" class="nav-item nav-link">Services</a>
            <a href="{{'/products'}}" class="nav-item nav-link">Products</a>
            <a href="{{'/contacts'}}" class="nav-item nav-link">Contacts</a>
        </div>
        <div class="border-start ps-4 d-none d-lg-block">
<<<<<<< HEAD
            <a href="{{ route('login') }}" class="nav-item nav-link btn btn-primary text-white">Login</a>
=======
            <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
        </div>
    </div>
</nav>
<!-- Navbar End -->

<script>
    document.addEventListener("DOMContentLoaded", function () {

        const currentPath = window.location.pathname;


        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');


        navLinks.forEach(link => {

            link.classList.remove('active');

            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    });
</script>
