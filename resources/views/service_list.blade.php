<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmaBabySpa</title>
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    <style>
        body {
        background-color: #9AD1F7 !important;
        font-family: 'Montserrat', sans-serif;
        margin-top: 60px;
        padding: 0;
    }
    .container {
        padding-top: 20px;
        margin-top: 60px;
    }
    .card {
        margin-bottom: 30px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease; 
    }

    .card:hover {
        transform: translateY(-5px) rotate(-2deg); 
        box-shadow: 0 8px 16px rgba(0,0,0,0.2); 
    }

    .card img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-bottom: 1px solid #ddd;
    }

    .card-body {
        padding: 20px;
        text-align: center;
    }

    .card-title {
        font-size: 1.5em;
        margin-bottom: 10px;
        color: #333;
        transition: color 0.3s ease; 
    }

    .card-title:hover {
        color: #5E8B7E;
        transform: translateY(-3px); 
    }

    .card-text {
        font-size: 1.1em;
        color: #666;
    }

    .card-footer {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: auto 1fr auto;
        padding: 15px;
        background-color: #f9f9f9;
        border-top: 1px solid #ddd;
        text-align: center;
        align-items: center;
    }

    .card-footer span {
        font-size: 1.2em;
        color: #5E8B7E;
    }

    .btn-block {
        display: block;
        width: 100%;
        margin-top: auto;
        padding: 10px 0; 
    }

    .btn {
        background-color: #5E8B7E;
        color: #fff;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #35524A;
    }
    </style>
</head>
<body>
    <!-- Include navigation -->
    @include('partials.nav')
    <!-- Container for services -->
    <div class="container">
        <div class="row">
            <!-- Service Card 1 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/images/service/paket-baby-swim.png" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title">Paket Baby Swim</h5>
                        <p class="card-text">Paket Baby Swim anda akan mendpatkan fasilitsas <br><strong>Baby Gym , Baby Swim , Baby Message</strong><br> dengan waktu 60 menit</p>
                    </div>
                    <div class="card-footer">
                        <span>Harga: Rp 90.000</span>
                        <a href="https://wa.link/r7hvs0" target="_blank" class="btn btn-primary btn-block mt-2">Reservasi Sekarang</a>
                    </div>
                </div>
            </div>

            <!-- Service Card 2 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/images/service/infra-pijat.png" class="card-img-top" alt="Service 2">
                    <div class="card-body">
                        <h5 class="card-title">Paket Inframerah + Pijat Bayi</h5>
                        <p class="card-text">Pada Paket ini anda kaan mendapatkan fasilitas <br><Strong>Sinar Inframerah , dan Pijat Bayi</Strong><br> dengan waktu 45-60 menit</p>
                    </div>
                    <div class="card-footer">
                        <span>Harga: Rp 80.000</span>
                        <a href="https://wa.link/r7hvs0" target="_blank"class="btn btn-primary btn-block mt-2">Reservasi Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Service Card 3 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/images/service/nafsu-makan.png" class="card-img-top" alt="Service 2">
                    <div class="card-body">
                        <h5 class="card-title">Paket Pijat Nafsu Makan</h5>
                        <p class="card-text">Pada Paket ini anda akan mendapatkan fasilitas <br><strong>Baby Message , Message Titik Acupresure </strong><br>dengan waktu 45-60 menit</p>
                    </div>
                    <div class="card-footer">
                        <span>Harga: Rp 50.000</span>
                        <a href="https://wa.link/r7hvs0" target="_blank"class="btn btn-primary btn-block mt-2">Reservasi Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Service Card 4 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/images/service/bapil.png" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title">Paket Terapi Bapil</h5>
                        <p class="card-text">Pada Paket ini anda akan mendapatkan fasilitas <br><strong>Siner Inframerah dan Terapi Nebulizer </strong><br>dengan waktu 45-60 menit</p>
                    </div>
                    <div class="card-footer">
                        <span>Harga: Rp 85.000</span>
                        <a href="https://wa.link/r7hvs0" target="_blank"class="btn btn-primary btn-block mt-2">Reservasi Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Service Card 5 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/images/service/kembang.png" class="card-img-top" alt="Service 2">
                    <div class="card-body">
                        <h5 class="card-title">Paket Terapi Tumbuh Kembang</h5>
                        <p class="card-text">Pada Paket ini anda akan mendapatkan fasilitas <br><strong>Baby Gym , Baby Message , PR tumbang dengan </strong> <br>waktu 45-60 menit</p>
                    </div>
                    <div class="card-footer">
                        <span>Harga: Rp 60.000</span>
                        <a href="https://wa.link/r7hvs0" target="_blank"class="btn btn-primary btn-block mt-2">Reservasi Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Service Card 6 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/images/service/baby-message.png" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title">Paket Baby Message</h5>
                        <p class="card-text">Pada Paket ini anda akan mendapatkan fasilitas <br><strong>Baby Gym ,dan Baby Message </strong><br>dengan waktu 30-45 menit</p>
                    </div>
                    <div class="card-footer">
                        <span>Harga: Rp 45.000</span>
                        <a href="https://wa.link/r7hvs0" target="_blank"class="btn btn-primary btn-block mt-2">Reservasi Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Service Card 7 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/images/service/baby-swim.png" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title"> Baby Swim</h5>
                        <p class="card-text">Pada Baby Swim anda akan mendapatkan fasilitas <br><strong>Baby Gym , dan Baby Swim </strong> <br>dengan waktu 30 menit</p>
                    </div>
                    <div class="card-footer">
                        <span>Harga: Rp 55.000</span>
                        <a href="https://wa.link/r7hvs0" target="_blank"class="btn btn-primary btn-block mt-2">Reservasi Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Service Card 8 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/images/service/pilek.png" class="card-img-top" alt="Service 2">
                    <div class="card-body">
                        <h5 class="card-title"> Paket Terapi Batuk Pilek</h5>
                        <p class="card-text">Pada Paket ini anda akan mendapatkan fasilitas <br><strong>Sinar Inframerah , dan Tappotement</strong><br> dengan waktu 30-45 menit</p>
                    </div>
                    <div class="card-footer">
                        <span>Harga: Rp 45.000</span>
                        <a href="https://wa.link/r7hvs0"target="_blank" class="btn btn-primary btn-block mt-2">Reservasi Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Service Card 9 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/images/service/laktasi.png" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title">Paket Pijat Laktasi</h5>
                        <p class="card-text">Pada Paket ini anda  akan mendapatkan fasilitas <br><strong>Alat Treatment , Message Punggung , Sinar Inframerah </strong><br>dengan waktu 60-120 menit</p>
                    </div>
                    <div class="card-footer">
                        <span>Harga: Rp 140.000</span>
                        <a href="https://wa.link/r7hvs0" target="_blank"class="btn btn-primary btn-block mt-2">Reservasi Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Service Card 10 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/images/service/kuku.png" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title">Potong Kuku</h5>
                        <p class="card-text">Pada Potong Kuku anda akan mendapatkan fasilitas <br><strong>Alat Potong Kuku untuk Baby anda </strong><br>dengan waktu 10 menit</p>
                    </div>
                    <div class="card-footer">
                        <span>Harga: Rp 20.000</span>
                        <a href="https://wa.link/r7hvs0"target="_blank" class="btn btn-primary btn-block mt-2">Reservasi Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Service Card 11 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/images/service/gundul.png" class="card-img-top" alt="Service 2">
                    <div class="card-body">
                        <h5 class="card-title">Cukur Gundul</h5>
                        <p class="card-text">Anda akan mendapatkan fasilitas <br><strong>lat cukur gundul </strong><br> Adengan waktu 15 menit</p>
                    </div>
                    <div class="card-footer">
                        <span>Harga: Rp 35.000</span>
                        <a href="https://wa.link/r7hvs0" target="_blank"class="btn btn-primary btn-block mt-2">Reservasi Sekarang</a>
                    </div>
                </div>
            </div>
            <!-- Service Card 12 -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                    <img src="/images/service/nebulizer.png" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title">Terapi Nebulizer</h5>
                        <p class="card-text">Anda akan mendapatkan fasilitas <br><strong>Nebulizer</strong> <br>untuk Baby Anda</p>
                    </div>
                    <div class="card-footer">
                        <span>Harga: Rp 50.000</span>
                        <a href="https://wa.link/r7hvs0" target="_blank"class="btn btn-primary btn-block mt-2">Reservasi Sekarang</a>
                    </div>
                </div>
            </div>

            

        </div>
    </div>
    <!-- Include footer -->
    @include('partials.footer')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
