![alt text](Gambar/cover_laporan.png?raw=true)

## BAB I Pendahuluan


## 1.1 Tujuan

Dokumen Software Requirement Specification (SRS) merupakan dokumen spesifikasi perangkat lunak untuk membangun “Website Company Profile UMKM Segar Alami”. Dokumen ini dibangun untuk memudahkan pengguna dalam menggunakan website dan memberikan informasi pada produk UMKM Segar Alami”.

## 1.2 Lingkup
Sistem UMKM Segar Alami merupakan aplikasi yang kami bangun untuk mempermudah pengguna dalam menggunakan website dan memberikan informasi pada produk UMKM Segar Alami.

## 1.3 Akronim, singkatan, definisi
| Istilah | Definisi |
| ------ | ------ |
|   SRS     |    Software Requirement Specification    |
|    Login    | Digunakan untuk mengakses aplikasi       |
|   Software Requirement Specification     | perangkat lunak yang akan dibuat dan sebagai penyembatani komunikasi pembuat dengan pengguna       |
|    Use Case    | situasi dimana sistem anda digunakan untuk memenuhi satu atau lebih kebutuhan pemakaian anda       |

## 1.4 Referensi
Referensi yang digunakan dalam pengembangan perangkat lunak ini adalah :

https://template139.webekspor.com/



## 1.5 Overview
Bab selanjutnya yaitu menjelaskan sistem yang diterapkan pada website. Menjelaskan gambaran umum dari aplikasi, sistem interface aplikasi dan alur sistemnya. Bab terakhir menjelaskan tentang setiap fungsi yang digunakan secara teknisnya. Pada bab 2 dan 3 merupakan deskripsi dari aplikasi yang akan diterapkan pada website yang dibuat.


## BAB II GAMBARAN UMUM
Segar Alami merupakan suatu UMKM yang bergerak pada bidang makanan dan  minuman.Dalam project ini,kami merancang website profile company dari Segar Alami yang bertujuan untuk menampilkan informasi dan product makanan minuman dari  Segar Alami ini.Selain itu,pada website ini juga menyediakan berbagai fitur lainya seperti Product, Kontak,AboutUs,Gallery dan Services.
Berikut adalah penjelasan dari fitur - fitur yang kami sediakan,

Fitur Halaman Utama:
- View Home 
- View About Us
- View Services
- View Product
- View Gallery

Berikut ini fungsi admin yaitu:
- Login
- View Dashboard
- CRUD Product(Input, Edit, Delete)
- CRUD  AboutUs(Input,Edit, Delete)
- CRUD  Contact(Input,Edit, Delete)
- CRUD Services( Input,Edit,Delete)
- CRUD Gallery(Input,Edit,Delete)
- CRUD Pesan Saran(Input,Edit,Delete)

## 2.1 Perspektif produk
Sistem Segar Alami adalah sebuah sistem yang menyediakan informasi dan product makanan minuman yang diaplikasikan pada website. Terdapat 2 Pengguna yaitu admin dan Customer. Data pada website  dikelola oleh admin dan pengunjung hanya dapat melihat informasi pada website.

**2.1.1 Antarmuka Sistem**
![alt text](Gambar/AntarMuka_Sistem.png?raw=true)

Sistem UMKM Segar Alami memiliki 2 pengguna yaitu admin dan Customer. Admin bisa mengelola data Website dan Customer bisa melihat dan mengunjungi website serta memberikan Ulasan.


**2.1.2 Antarmuka Pengguna**

**Halaman Admin**
|  |  |
|--|--|
| ![alt text](Gambar/login.jpg?raw=true) Ini merupakan halaman login admin diminta untuk mengisi username dan password.| ![alt text](Gambar/Dashboard_Fix.jpg?raw=true) Ini merupakan halaman dashboard admin jika  admin sudah melakukan login.
|  |  |
| ![alt text](Gambar/Dashboardd.jpg?raw=true) Pada halaman admin akan terdapat halaman untuk mengelola data Product,namun tidak hanya data product tapi admin juga dapat mengelola data AboutUs,Data Service,Data Gallery,Data Contact,dan Pesan_Saran.| ![alt text](Gambar/DashboardInput.jpg?raw=true) Pada halaman mengelola data product,admin juga dapat menambahkan data product,begitu juga dengan pengelolaan data dihalaman lainnya.
|  |  |
| ![alt text](Gambar/Dashboardd.jpg?raw=true) Pada halaman mengelola data product juga terdapat aksi untuk mengedit data product..|![alt text](Gambar/Dashboardd.jpg?raw=true) Selain menambahkan dan mengedit pada halaman data product,admin juga dapat menghapus data product.


**Halaman User**
|  |  |
|--|--|
| ![alt text](Gambar/Web_Scrolling.png) Pada halaman pengunjung terdapat beranda yang berisi tampilan scrolling yang berisi seluruh konten seperti Home,About Us,Services,Products,Contacts.|![alt text](Gambar/AbooutUs.jpg?raw=true) Pada Tampilan About Us terdapat Subjudul,judul,deskripsi dan gambar.
|  |  |
| ![alt text](Gambar/galleryy.jpg?raw=true) Pada Tampilan Gallery terdapat judul,deskripsi dan gambar.|![alt text](Gambar/Prroduct.jpg?raw=true) Pada Tampilan Product terdapat Subjudul, judul,deskripsi dan gambar.
|  |  |
| ![alt text](Gambar/Conntact.jpg?raw=true) Tampilan Contact terdapat Subjudul,judul,nama,deskripsi,alamat,telepone,email dan map.


**2.1.3 Antarmuka perangkat keras**
![alt text](Gambar/AntarMuka_PerangkatKeras.png?raw=true)
Antarmuka perangkat keras yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Segar Alami yaitu : 

PC / Laptop Untuk menjalankan Aplikasi ini.

**2.1.4 Antarmuka perangkat lunak**

tidak ada

**2.1.5 Antarmuka Komunikasi**

Antarmuka komunikasi yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Segar Alami yaitu : 

- PC

- wifi/Jaringan

**2.1.6 Batasan Memori**

tidak ada

**2.1.7 Operasi-operasi**
| Operasi | Fungsi |
| ------ | ------ |
|   Login  | Digunakan untuk mengakses aplikasi    |
|    Input Data    |    Digunakan untuk memasukkan data-data    |
| Kembali |  Digunakan untuk kembali ke halaman sebelumnya |
| Hapus | Digunakan untuk menghapus data|
| Edit       |   Digunakan untuk mengubah data     |
| View      |   Digunakan untuk menampilkan data     |
| Simpan      |     Digunakan untuk menyimpan data   |

**2.1.8 Kebutuhan adaptasi**

tidak ada

## 2.2 Spesifikasi kebutuhan fungsional
![alt text](Gambar/Fungsionall.png?raw=true)
**2.2.1 Admin Login**

Use Case: Login

Diagram:
![alt text](Gambar/Login.png?raw=true)

Deskripsi Singkat 
Admin melakukan login terlebih dahulu sebelum masuk ke tampilan home admin, apabila gagal login akan muncul pesan alert error login.

Deskripsi Langkah-Langkah
1. Admin melakukan login dengan username dan password.
2. Sistem melakukan validasi login.
3. Bila sukses sistem akan mengarahkan ke home admin.
4. Bila gagal sistem akan menampilkan peringatan.

Xref: Bagian 3.2.1, Login Admin

**2.2.2 Admin Input Product**

Use Case: Input Product

Diagram:

![alt text](Gambar/Product.png?raw=true)

Deskripsi Singkat 
Sistem dapat menampilkan halaman input produk dan Admin menginputkan product.

Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data produk.
2. Admin dapat melihat,menambahkan, dan mengupload product , judul, deskripsi dan gambar product.
3. Sistem akan menyimpan ke database.
4. Setelah data disimpan maka akan menampilkan pesan pada layar data berhasil ditambah.

Xref: Bagian 3.2.2, Input data Product

**2.2.3 Admin Input Service**

Use Case: Input Service

Diagram:
![alt text](Gambar/Service.png?raw=true)

Deskripsi Singkat
Sistem dapat menampilkan halaman slider dan Admin menginputkan service.

Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data service.
2. Admin dapat melihat,menambahkan, dan mengupload service, .judul, gambar deskripsi, deskripsi, dan gambar service.
3. Sistem akan menyimpan ke database.
4. Setelah data disimpan maka akan menampilkan pesan pada layar data berhasil ditambah.

Xref: Bagian 3.2.3, Input data Service

**2.2.4 Admin Input data About Us**

Use Case: Input data About Us

Diagram:![alt text](Gambar/About Us.png?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman about us dan Admin menginputkan about us.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data about us.
2. Admin dapat melihat,menambahkan, dan mengupload sub judul, judul, deskripsi, gambar about us.
3. Sistem akan menyimpan ke database.
4. Setelah data disimpan maka akan menampilkan pesan pada layar data berhasil ditambah.
   
Xref: Bagian 3.2.3, Input data About Us

**2.2.5 Admin Input data Contact**

Use Case: Input data Contact

Diagram:![alt text](Gambar/Contact.png?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman contact dan Admin menginputkan contact.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data contact.
2. Admin dapat melihat,menambahkan, dan mengupload  lokasil, nomor dan email contact.
3. Sistem akan menyimpan ke database.
4. Setelah data disimpan maka akan menampilkan pesan pada layar data berhasil ditambah.
   
Xref: Bagian 3.2.3, Input data Contact

**2.2.6 Admin Input data Gallery**

Use Case: Input data Gallery

Diagram:![alt text](Gambar/Gallery.png?raw=true)


Deskripsi Singkat
Sistem dapat menampilkan halaman gallery dan Admin menginputkan gallery.
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan data gallery.
2. Admin dapat melihat,menambahkan, dan mengupload gambar dan teks gallery.
3. Sistem akan menyimpan ke database.
4. Setelah data disimpan maka akan menampilkan pesan pada layar data berhasil ditambah.

Xref: Bagian 3.2.3, Input data Gallery


**2.2.7 Pengunjung Mengunjungi website**

Use Case: Mengunjungi website

Diagram:
![alt text](Gambar/Pengunjung_Web2.png?raw=true)

Deskripsi Singkat 
Sistem dapat menampilkan halaman company profile yaitu (Home, About Us, Product, Service, Gallery, Contact, Ulasan) dan pengunjung bisa melihat informasi dan memberikan ulasan yang terdapat pada website. 

Deskripsi Langkah-Langkah
1. Sistem akan menampilkan tampilan halaman utama.
2. Pengunjung dapat melihat tampilan home, about us, produk, service, gallery, contact.
3. Pengunjung dapat memberikan ulasan.

Xref: Bagian 3.2.7, Pengunjung Mengunjungi Website

## 2.3 Spesifikasi kebutuhan non-fungsional
● Tabel Kebutuhan non fungsional

| no | deskripsi |
| ------ | ------ |
|     1   |   Semua interface dan fungsi menggunakan Bahasa Indonesia     |
|     2   |   Perangkat Lunak dapat dipakai di semua platofrm OS ( Admin, pengunjung )     |

## 2.4 Karakteristik Pengguna
Pengguna berinteraksi langsung dengan website, dimulai dari melihat tampilan company profile, dan  untuk admin bisa melakukan login untuk mengatur semua data-data pada UMKM Segar Alami dengan (CRUD).

## 2.5 Batasan-batasan
tidak ada

## 2.6 Asumsi-asumsi
tidak ada

## 2.7 Kebutuhan Penyeimbang
tidak ada

## BAB III Requirement Specification


## 3.1 Persyaratan Antarmuka Eksternal
Salah satu cara mengakses website ini yaitu  admin yang akan mengakses website ini diperlukan login terlebih dahulu, kemudian akan memasukkan username dan password, lalu sistem akan validasi login. Setelah login berhasil Admin dapat melihat tampilan admin yang ada di website tersebut. Untuk pengunjung hanya perlu membuka halaman website, kemudian pengunjung dapat melihat informasi dan data product yang ada di website tersebut.

## 3.2 Functional Requirement
**3.2.1 Login Admin**

| Nama Fungsi         | Login                                  |
| ------------------- | -------------------------------------- |
| Xref                | Bagian 2.2.1 Admin Login               |
| Trigger             | Admin Membuka Website Segar Alami |
| Precondition        | Halaman login                          |
| Basic Path          | 1. Admin melakukan login dengan username dan password.
|        |         2. Sistem memvalidasi login. |
|        | 3. Jika berhasil, sistem akan mengarahkan ke home admin  |
|        | 4. Jika gagal, sistem akan menampilkan notifikasi |
|     Alternative       |                   Tidak Ada                   |
| Post Condition     |                  Admin dapat login dan mengakses website Segar Alami informasi parenting                   |
|         Exception Push          |                  Username dan password salah                   |

**3.2.2 Admin Input Product**
| Nama Fungsi | Input Product |
| ------ | ------ |
| Xref       | Bagian 2.2.2 Admin Input Product       |
| Triger       | Admin dapat menginputkan Product        |
| Precondition | Admin menginputkan product Segar Alami ke website|
| Basic Path | 1. Sistem akan menampilkan tampilan product Segar Alami. |
|            | 2. Admin dapat melihat, menambahkan, mengedit dan menghapus product. |
|            | 3. Sistem akan menyimpan ke database. |
| Alternative | Tidak ada |     
| Post Condition | Admin dapat menginputkan product makanan dan minuman Segar Alami seperti judul product, deskripsi, gambar product.
| Exception Push | Tidak ada  |


**3.2.3 Input Service**

| Nama Fungsi        | Input Service                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.3 Admin Input Service                     |
| Trigger            | Admin dapat menginputkan service |
| Precondition       | Admin menginputkan service ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan service. |
|                    | 2. Admin dapat melihat, menambahkan, mengedit dan menghapus service.   |
|                    | 3. Sistem akan menyimpan ke database.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin dapat menginputkan service berupa judul, gambar deskripsi, deskripsi dan gambar service.        |
| Exception Push     | Tidak Ada        |

**3.2.4 Input data About Us**

| Nama Fungsi        | Input About Us                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.6 Admin Input About Us                     |
| Trigger            | Admin dapat menginputkan about us |
| Precondition       | Admin menginputkan about us ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan about us. |
|                    | 2. Admin dapat melihat, menambahkan, mengedit dan menghapus about us.   |
|                    | 3. Sistem akan menyimpan ke database.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin dapat menginputkan about us seperti sub judul, judul, deskripsi, gambar about us.        |
| Exception Push     | Tidak Ada        |

**3.2.5 Input data Contact**

| Nama Fungsi        | Input Contact                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.7 Admin Input Contact                     |
| Trigger            | Admin dapat menginputkan Contact |
| Precondition       | Admin menginputkan Contact ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan contact. |
|                    | 2. Admin dapat melihat, menambahkan, mengedit dan menghapus Contact.   |
|                    | 3. Sistem akan menyimpan ke database.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin dapat menginputkan Contact seperti lokasi, nomor dan email contact.        |
| Exception Push     | Tidak Ada        |

**3.2.6 Input data Gallery**

| Nama Fungsi        | Input Gallery                              |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.8 Admin Mengelola Gallery                      |
| Trigger            | Admin dapat mengelola Gallery pada website |
| Precondition       | Admin Menginputkan Gallery ke website |
| Basic Path         | 1. Sistem akan menampilkan tampilan gallery. |
|                    | 2. Admin dapat melihat, menambahkan, mengedit dan menghapus gallery.   |
|                    | 3. Sistem akan menyimpan ke database.   |
| Alternative        |  Tidak Ada                                 |
| Post Condition     |  Admin dapat menginputkan gallery seperti gambar dan teks gallery.        |
| Exception Push     | Tidak Ada        |

**3.2.7 Pengunjung Mengunjungi Website**

| Nama Fungsi        |    Pengunjung Mengunjungi Website             |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.8 Pengunjung Mengunjungi Website             |
| Trigger            |Pengunjung dapat mengunjungi website, melihat informasi  dan data produk makanan minuman yang ada pada website Segar Alami yang telah ditampilkan pada website. |
| Precondition       |Pengunjung Mengunjungi website |
| Basic Path         | 1. Sistem akan menampilkan halaman halaman home. |
|                    |  2.Pengunjung melihat informasi yang ada pada website dan juga dapat memberikan testimoni pada website yang tersedia.   |
|                    | 3.Pengunjung dapat mengklik tombol kembali ke halaman sebelumnya jika ingin keluar pada halaman konten yang telah dilihat.    |
| Alternative        |   Tidak Ada     |
| Post Condition     |   Pengunjung mengunjungi website dan melihat informasi yang ada pada website.     |
| Exception Push     |    Tidak Ada    |

**3.2.8 Pengunjung Mengunjungi Pesan Saran**

| Nama Fungsi        |    Pengunjung Mengunjungi Website             |
| ------------------- | ---------------------------------- |
| Xref               | Bagian 2.2.8 Pengunjung Mengunjungi Pesan Saran             |
| Trigger            |Pengunjung dapat mengunjungi halaman pesan saran pada website, menambah pesan saran yang ada pada website Segar Alami jika pelanggan ingin memberikan pesan saran. |
| Precondition       |Pengunjung Mengunjungi website |
| Basic Path         | 1. Sistem akan menampilkan halaman halaman home. |
|                    |  2.Pengunjung melihat halaman pesan saran yang ada pada website dan juga dapat memberikan pesan saran pada website yang tersedia.   |
|                    | 3.Pengunjung dapat mengklik tombol beri masukan jika ingin mengirim pesan saran yang telah dibuat sebelumnya untuk mengirim ke website UMKM Segar Alami.    |
| Alternative        |   Tidak Ada     |
| Post Condition     |   Pengunjung mengunjungi website dan melihat halaman pesan saran serta dapat mengirim pesan saran  yang ada pada halaman website.     |
| Exception Push     |    Tidak Ada    |

## 3.3 Struktur Detail Kebutuhan Non-Fungsional
![alt text](Gambar/KNF3.png?raw=true)
**3.3.1 Logika Struktur Data**
Struktur data logika pada website UMKM Segar Alami terdapat struktur Database yang dijelaskan menggunakan ERD.

**Tabel Users**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|Id|int|Auto-increment dari Id|
|name|varchar|Berisi username user agar sistem bisa diakses|
|email|varchar|Berisi email user agar sistem bisa diakses|
|password|varchar|Berisi password user agar sistem bisa diakses|

**Tabel Product**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|Id|int|Auto-increment dari Id|
|tagline|varchar|Berisi sebagai tagline pada sistem product|
|deskripsi|text|Berisi deskripsi produk pada sistem|
|gambar|varchar|Berisi gambar produk pada sistem|

**Tabel Service**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id|int|Auto-increment dari Id|
|tagline|varchar|Berisi sebagai tagline service pada sistem|
|gambar_deskripsi|varchar|Berisi gambar pada bagian deskripsi service pada sistem|
|deskripsi|varchar|Berisi deskripsi service pada sistem|
|gambar|varchar|Berisi gambar service pada sistem|

**Tabel About Us**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id|int|Auto-increment dari id|
|sub_tagline|varchar|Berisi sebagai sub tagline about us pada sistem|
|tagline|varchar|Berisi sebagai tagline about us pada sistem|
|deskripsi|varchar|Berisi deskripsi about us pada sistem|
|gambar|varchar|Berisi gambar about us pada sistem|

**Tabel Pesan Saran**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id|int|Auto-increment dari id|
|nama|varchar|Berisi nama pesan saran pada sistem|
|pesan|varchar|Berisi pesan pesan saran pada sistem|

**Tabel Gallery**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id|int|Auto-increment dari Id|
|gambar|varchar|Berisi gambar gallery pada sistem|
|alt_text|varchar|Berisi text gallery pada sistem|

**Tabel Contact**
|Data Item|Tipe Data|Deskripsi|
|--|--|--|
|id|int|Auto-increment dari Id|
|lokasi|varchar|Berisi lokasi contact pada sistem|
|no|varchar|Berisi nomor contact pada sistem|
|email|varchar|Berisi email contact pada sistem|

## Pembagian tugas
BAB 1 ->Azka 

BAB 2 
2.1
  
  2.1.1 -> Azka
  
  2.1.2 -> Zidane
  
  2.1.3 -> Azka
  
  2.1.4 -> Azka
 
  2.1.5 -> Azka
  
  2.1.6 -> Azka
  
  2.1.7 -> Zidane
  
  2.1.8 -> Zidane
  
2.2 - 2.7 -> (Zayyan)

BAB 3 

3.1 -> Zidane

3.2 -> Zidane

3.3 -> Zidane

PEMBAGIAN TUGAS PROJECT 
1. Muhammad Zidane
● Tampilan Company Profile (Home, About Us, Service, Product, Pesan Saran, Banner, Contact)
● Tampilan Dashboard Admin
● Tampilan Login
● Tampilan Gallery
● Middleware
● CRUD Pesan Saran
● CRUD Banner
● CRUD Gallery
● CRUD Hero Section

2. Azka Arifan Harris 
● CRUD About Us
● CRUD Produk  
● Tampilan About Us
● Tampilan Product 

3. Zayyandra Rajel Ahsan 
● CRUD Service
● CRUD Contact
● Tampilan Service
● Tampilan Contact
