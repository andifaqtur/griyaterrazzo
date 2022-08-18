<div>
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <strong>Griya</strong>Terrazzo
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            List Produk
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($kategoris as $kategori)
                            <a class="dropdown-item"
                                href="{{ route('products.kategori', $kategori->id) }}">{{ $kategori->nama }}</a>
                            @endforeach
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('products') }}">Semua Kategori</a>
                        </div>
                    </li>
                    @if(Auth::user())
                    
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('history') }}">History</a>
                         </li>
                    @endif
                </ul>

                
            </div>
        </div>
    </nav>
</div>