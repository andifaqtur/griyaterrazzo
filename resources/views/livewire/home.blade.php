<div class="container">

   {{-- BANNER --}}
   <div class="banner">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img class="d-block w-100" src="{{ url('assets/slider/slider1.png') }}" alt="">
            </div>
            <div class="carousel-item">
               <img class="d-block w-100" src="{{ url('assets/slider/slider1.png') }}" alt="">
            </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
         </a>
      </div>
   </div>

   {{-- PILIH KATEGORI  --}}
   <section class="pilih-kategori mt-4">
      <h3><strong>Pilih Kategori</strong></h3>
      <div class="row mt-4">
         @foreach($kategoris as $kategori)
         <div class="col">
            <a href="{{ route('products.kategori', $kategori->id) }}">
               <div class="card shadow">
                  <div class="card-body text-center">
                     <img src="{{ url('assets/kategori') }}/{{ $kategori->gambar }}" class="img-fluid">
                  </div>
               </div>
            </a>
         </div>
         @endforeach
      </div>
   </section>

   {{-- BEST PRODUCT  --}}
   <section class="products mt-5 mb-5">
      <h3>
         <strong>Produk Terbaru</strong>
         <a href="{{ route('products') }}" class="btn btn-dark float-right"><i class="fas fa-eye"></i> Lihat Semua </a>
      </h3>
      <div class="row mt-4">
         @foreach($products as $product)
         <div class="col-md-3">
            <div class="card">
               <div class="card-body text-center">
                  <img src="{{ url('assets/product') }}/{{ $product->photo_product[0]->photo_path }}" class="img-fluid">
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <h5><strong>{{ $product->nama }}</strong> </h5>
                        <h5>Rp. {{ number_format($product->harga) }}</h5>
                     </div>
                  </div>
                  <div class="row mt-2">
                     <div class="col-md-12">
                        <a href="{{ route('products.detail', $product->id) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @endforeach
      </div>
   </section>
</div>