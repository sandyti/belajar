<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jual Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">TokoKu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href={{ route('produk_produk') }}>Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ route('jasa_jasa') }}>jasa</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ route('pelayanan_pelayanan') }}>Pelayanan</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ route('perusahaan_perusahaan') }}>Perusahaan</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ route('payment_payment') }}>Payment</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="bg-light text-center py-5" id="home">
        <div class="container">
            <h1 class="display-4">Temukan Barang Berkualitas di TokoKu</h1>
            <p class="lead">Kami menyediakan berbagai produk dengan harga terbaik.</p>
            <a href="#products" class="btn btn-primary">Lihat Produk</a>
        </div>
    </header>
    
    <section id="products" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Produk Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <h5 class="card-title">Produk 1</h5>
                            <p class="card-text">Deskripsi produk pertama.</p>
                            <p class="text-primary fw-bold">Rp 100.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Produk 2">
                        <div class="card-body">
                            <h5 class="card-title">Produk 2</h5>
                            <p class="card-text">Deskripsi produk kedua.</p>
                            <p class="text-primary fw-bold">Rp 200.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="https://via.placeholder.com/150" class="card-img-top" alt="Produk 3">
                        <div class="card-body">
                            <h5 class="card-title">Produk 3</h5>
                            <p class="card-text">Deskripsi produk ketiga.</p>
                            <p class="text-primary fw-bold">Rp 300.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="about" class="bg-light py-5">
        <div class="container text-center">
            <h2>Tentang Kami</h2>
            <p>Kami adalah toko yang menyediakan berbagai barang berkualitas dengan harga terjangkau.</p>
        </div>
    </section>
    
    <section id="contact" class="py-5">
        <div class="container text-center">
            <h2>Kontak Kami</h2>
            <p>Email: contoh@email.com | Telp: 0812-3456-7890</p>
        </div>
    </section>
    
    <footer class="bg-primary text-white text-center py-3">
        <p>&copy; 2025 TokoKu. Hak Cipta @SandyTriantono.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
