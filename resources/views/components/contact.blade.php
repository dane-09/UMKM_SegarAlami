 <!-- Contact Start -->
 <div class="container-xxl py-5">
     <div class="container">
         <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
             <p class="section-title bg-white text-center text-primary px-3">Contact Us</p>
<<<<<<< HEAD
             <h1 class="mb-5">Jika Kamu Punya Pertanyaan, Silahkan Hubungi Kami</h1>
         </div>
         <div class="row g-5">
             <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                 <h3 class="mb-4">Berikan Masukan Anda
                </h3>
                 <p class="mb-4">Kami percaya bahwa setiap masukan yang Anda berikan membantu kami berkembang lebih baik.

                     <form action="{{ route('pesansaran.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <!-- Input Nama -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="nama" class="form-control" id="name" placeholder=" Kamu" value="{{ old('nama') }}">
                                    <label for="name"> Nama</label>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Judul" value="{{ old('subject') }}" required>
                                    <label for="subject">Judul</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="pesan" class="form-control" placeholder="Masukan Saran Anda" id="message" style="height: 250px" required>{{ old('pesan') }}</textarea>
                                    <label for="message">Saran</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-secondary rounded-pill py-3 px-5" type="submit">Kirim Masukan</button>
                            </div>
                        </div>
                    </form>

             </div>
             <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                 <h3 class="mb-4">Kontak</h3>
=======
             <h1 class="mb-5">If You Have Any Query, Please Contact Us</h1>
         </div>
         <div class="row g-5">
             <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                 <h3 class="mb-4">Need a functional contact form?</h3>
                 <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form
                     with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done.
                     <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                 <form>
                     <div class="row g-3">
                         <div class="col-md-6">
                             <div class="form-floating">
                                 <input type="text" class="form-control" id="name" placeholder="Your Name">
                                 <label for="name">Your Name</label>
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-floating">
                                 <input type="email" class="form-control" id="email" placeholder="Your Email">
                                 <label for="email">Your Email</label>
                             </div>
                         </div>
                         <div class="col-12">
                             <div class="form-floating">
                                 <input type="text" class="form-control" id="subject" placeholder="Subject">
                                 <label for="subject">Subject</label>
                             </div>
                         </div>
                         <div class="col-12">
                             <div class="form-floating">
                                 <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 250px"></textarea>
                                 <label for="message">Message</label>
                             </div>
                         </div>
                         <div class="col-12">
                             <button class="btn btn-secondary rounded-pill py-3 px-5" type="submit">Send
                                 Message</button>
                         </div>
                     </div>
                 </form>
             </div>
             <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                 <h3 class="mb-4">Contact Details</h3>
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa

                 @foreach ($contact as $item)
                     <div class="d-flex border-bottom pb-3 mb-3">
                         <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                             <i class="fa fa-map-marker-alt text-body"></i>
                         </div>
                         <div class="ms-3">
<<<<<<< HEAD
                             <h6>Alamat </h6>
=======
                             <h6>Our Office</h6>
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
                             <span>{{ $item->lokasi }}</span>
                         </div>
                     </div>
                     <div class="d-flex border-bottom pb-3 mb-3">
                         <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                             <i class="fa fa-phone-alt text-body"></i>
                         </div>
                         <div class="ms-3">
<<<<<<< HEAD
                             <h6> Telepon</h6>
=======
                             <h6>Call Us</h6>
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
                             <span>{{ $item->no }}</span>
                         </div>
                     </div>
                     <div class="d-flex border-bottom-0 pb-3 mb-3">
                         <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                             <i class="fa fa-envelope text-body"></i>
                         </div>
                         <div class="ms-3">
<<<<<<< HEAD
                             <h6>Email</h6>
=======
                             <h6>Mail Us</h6>
>>>>>>> 0d517a97a973fa312f467932224028c03d0fefaa
                             <span>{{ $item->email }}</span>
                         </div>
                     </div>
                 @endforeach

                 <!-- Google Maps (Tetap Statik atau Bisa Diatur Berdasarkan Lokasi) -->
                <iframe class="w-100 rounded"
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4127034663138!2d101.4474325158906!3d0.5250230771853609!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ad96d3e3ec29%3A0x1c900452f4981042!2sSusu%20Kedelai%20%26%20Kembang%20Tahu%20Segar%20Alami!5e0!3m2!1sid!2sid!4v1736920508339!5m2!1sid!2sid"
                     frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false"
                     tabindex="0"></iframe>
             </div>

         </div>
     </div>
 </div>
 <!-- Contact End -->
