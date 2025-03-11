<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelayanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">LayananKu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href={{ route('produk_produk') }}>Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ route('barang_barang') }}>Barang</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ route('jasa_jasa') }}>jasa</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ route('payment_payment') }}>Payment</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ route('perusahaan_perusahaan') }}>Perusahaan</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="bg-light text-center py-5" id="home">
        <div class="container">
            <h1 class="display-4">Pelayanan Profesional & Terpercaya</h1>
            <p class="lead">Kami siap membantu Anda dengan berbagai layanan terbaik.</p>
            <a href="#services" class="btn btn-primary">Lihat Layanan</a>
        </div>
    </header>
    
    <section id="services" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Layanan Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Konsultasi</h5>
                            <p class="card-text">Layanan konsultasi profesional untuk kebutuhan Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Perawatan</h5>
                            <p class="card-text">Kami menyediakan perawatan berkualitas untuk Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Dukungan Pelanggan</h5>
                            <p class="card-text">Tim kami siap membantu Anda kapan saja.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-success">Pesan Layanan</a>
            </div>
        </div>
    </section>
    
    <section id="about" class="bg-light py-5">
        <div class="container text-center">
            <h2>Tentang Kami</h2>
            <p>LayananKu adalah penyedia layanan profesional yang selalu mengutamakan kepuasan pelanggan.</p>
        </div>
    </section>
    
    <section id="contact" class="py-5">
        <div class="container text-center">
            <h2>Kontak Kami</h2>
            <p>Email: support@layanan.com | Telp: 0812-3456-7890</p>
        </div>
    </section>
    
    <footer class="bg-primary text-white text-center py-3">
        <p>&copy; 2025 LayananKu. Hak Cipta @SandyTriantono.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
