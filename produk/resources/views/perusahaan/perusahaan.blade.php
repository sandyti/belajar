<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">CompanyKu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href={{ route('produk_produk') }}>Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ route('barang_barang') }}>Barang</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ route('jasa_jasa') }}>jasa</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ route('payment_payment') }}>Payment</a></li>
                    <li class="nav-item"><a class="nav-link" href={{ route('pelayanan_pelayanan') }}>Pelayanan</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="bg-light text-center py-5" id="home">
        <div class="container">
            <h1 class="display-4">Solusi Bisnis Terbaik untuk Anda</h1>
            <p class="lead">Kami menyediakan layanan berkualitas tinggi untuk memenuhi kebutuhan bisnis Anda.</p>
            <a href="#about" class="btn btn-primary">Pelajari Lebih Lanjut</a>
        </div>
    </header>
    
    <section id="about" class="py-5">
        <div class="container text-center">
            <h2>Tentang Kami</h2>
            <p>CompanyKu adalah perusahaan yang bergerak di bidang solusi bisnis modern dengan fokus pada inovasi dan kualitas layanan.</p>
        </div>
    </section>
    
    <section id="services" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Layanan Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Konsultasi Bisnis</h5>
                            <p class="card-text">Kami membantu Anda menemukan solusi terbaik untuk bisnis Anda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Pengembangan Teknologi</h5>
                            <p class="card-text">Solusi digital yang inovatif untuk meningkatkan efisiensi bisnis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Manajemen Keuangan</h5>
                            <p class="card-text">Layanan keuangan untuk memastikan stabilitas bisnis Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="team" class="py-5">
        <div class="container text-center">
            <h2>Tim Kami</h2>
            <p>Tim profesional kami siap membantu Anda dalam mencapai kesuksesan bisnis.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">SANDY TRIANTONO</h5>
                            <p class="card-text">CEO & Founder</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">SANDY TRIANTONO</h5>
                            <p class="card-text">Chief Technology Officer</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">SANDY TRIANTONO</h5>
                            <p class="card-text">Head of Marketing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="contact" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Kontak Kami</h2>
            <p>Email: support@sandytriantono816@gmail.com | Telp: 0819-3299-6846</p>
        </div>
    </section>
    
    <footer class="bg-primary text-white text-center py-3">
        <p>&copy; 2025 CompanyKu. Hak Cipta @SandyTriantono.</p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
