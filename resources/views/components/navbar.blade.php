 <!-- Navbar Start -->
 <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="index.html" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0">Milky</h1>
    </a>
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
            <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
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
