<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('products') }}" class="text-dark">List Produk</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Produk Detail</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card gambar-product">
                <div class="card-body">
                    {{-- {{ dd(count($product->photo_product)) }} --}}
                    @if (count($product->photo_product) > 1)
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @for ($i=0;$i<count($product->photo_product);$i++)
                                    <div class="{{ $i == 0 ? 'carousel-item active' : 'carousel-item' }}">
                                        <img src="{{ url('assets/product') }}/{{ $product->photo_product[$i]->photo_path }}" class="img-fluid">
                                    </div>
                                @endfor
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
                    @else
                        <img src="{{ url('assets/product') }}/{{ $product->photo_product[0]->photo_path }}" class="img-fluid">
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>
                <strong>{{ $product->nama }}</strong>
            </h2>
            <h4>
                Rp. {{ number_format($product->harga) }}
                @if($product->jumlah_stok > 0)
                <span class="badge badge-success"> <i class="fas fa-check"></i> Ready Stok</span>
                @else
                <span class="badge badge-danger"> <i class="fas fa-times"></i> Stok Habis</span>
                @endif
            </h4>

            <div class="row">
                <div class="col">
                    <form wire:submit.prevent="masukkanKeranjang">
                    <table class="table" style="border-top : hidden">
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td>
                                <img src="{{ url('assets/kategori') }}/{{ $product->kategori->gambar }}" class="img-fluid"
                                    width="50">
                            </td>
                        </tr>
                        <tr>
                            <td>Jumlah Tersedia</td>
                            <td>:</td>
                            <td>{{ $product->jumlah_stok }}</td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td>{{ $product->keterangan }}</td>
                        </tr>
                        <tr>
                            <td>Berat</td>
                            <td>:</td>
                            <td>{{ $product->berat }}Kg</td>
                        </tr>


                        <tr>
                            <td colspan="3">
                                <a href="https://wa.me/6281315357733" target="_blank" class="btn btn-dark btn-block" ><i class="fas fa-shopping-cart"></i>  Chat Kami</a>
                            </td>
                        </tr>

                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
