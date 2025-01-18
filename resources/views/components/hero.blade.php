 <!-- Carousel Start -->
 @foreach ($herosection as $item)
     <div class="container-fluid px-0 mb-5">
         <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-inner">
                 <div class="carousel-item active">

                     <img class="w-100" src="{{ Storage::url($item->gambar) }}" alt="Image">

                     <div class="carousel-caption">
                         <div class="container">
                             <div class="row justify-content-start">
                                 <div class="col-lg-8 text-start">
                                     <p class="fs-4 text-white">{{$item->tagline}}</p>
                                     <h1 class="display-1 text-white mb-5 animated slideInRight">{{$item->deskripsi}}</h1>
<<<<<<< HEAD
                                     <a href="#about"
=======
                                     <a href=""
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
                                         class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Explore
                                         More</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </div>
 @endforeach
 <!-- Carousel End -->
