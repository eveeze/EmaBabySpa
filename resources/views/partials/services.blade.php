<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmaBabySpa-Services</title>
    <style>
        .card {
    border: 1px solid #ddd;
    border-radius: 10px;
    transition: transform 0.3s, box-shadow 0.3s;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    overflow: hidden;
    height: 100%;
}

.card:hover {
    box-shadow: 0px 12px 20px rgba(0, 0, 0, 0.2);
    transform: translateY(-8px) scale(1.02);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.hide {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 1s ease-out, transform 1s ease-out;
}
.service-card {
    opacity: 1;
    transform: translateY(0);
    background: linear-gradient(135deg, #75C4F1, #62A0EE);
    color: #fff;
    padding: 20px;
    border-radius: 0 0 10px 10px;
    transition: background 0.3s;
}
.service-card:nth-child(odd) {
    animation: oddAnimation 0.5s ease-in-out alternate infinite;
}

.service-card:nth-child(even) {
    animation: evenAnimation 0.5s ease-in-out alternate infinite;
}

.card-title {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 10px;
}

.card-text {
    font-size: 0.9rem;
    line-height: 1.5;
    margin-bottom: 20px;
}

.services-section {
    padding: 60px 0;
}

.col-md-4 {
    margin-bottom: 30px;
}

@keyframes oddAnimation {
    from {
        transform: scale(1);
    }
    to {
        transform: scale(1.02);
    }
}

@keyframes evenAnimation {
    from {
        transform: scale(1);
    }
    to {
        transform: scale(1.02);
    }
}
.col-md-4 {
            flex: 0 0 calc(33.333% - 20px); 
            max-width: calc(33.333% - 20px); 
            margin-bottom: 20px;
        }

        @media (max-width: 992px) {
            .col-md-4 {
                flex: 0 0 calc(50% - 20px); 
                max-width: calc(50% - 20px); 
            }
        }

        @media (max-width: 576px) {
            .col-md-4 {
                flex: 0 0 calc(100% - 20px); 
                max-width: calc(100% - 20px); 
            }
        }
    </style>
</head>
<body>
    <!-- Services Section -->
<section id="services" class="services-section py-5">
    <div class="container">
        <h2 class="text-center mb-4">Our Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card service-card" onclick="showServiceDetails('Baby Swim')">
                    <div class="card-body">
                        <h5 class="card-title">Baby Swim</h5>
                        <p class="card-text">Layanan Baby Swim kami memberikan kesempatan bagi bayi untuk berinteraksi dengan air dalam suasana yang aman dan nyaman.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card" onclick="showServiceDetails('Terapi Batuk Pilek')">
                    <div class="card-body">
                        <h5 class="card-title">Terapi Batuk Pilek</h5>
                        <p class="card-text">Kami menyediakan terapi batuk pilek menggunakan infra red dan chest therapy untuk membantu proses pemulihan.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card" onclick="showServiceDetails('Nama Layanan')">
                    <div class="card-body">
                        <h5 class="card-title">Message Baby</h5>
                        <p class="card-text">Layanan ini menyediakan pijatan khusus untuk bayi, membantu meningkatkan perasaan rileks dan kenyamanan bagi bayi dalam suasana yang tenang.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card" onclick="showServiceDetails('Nama Layanan')">
                    <div class="card-body">
                        <h5 class="card-title">Message Kids</h5>
                        <p class="card-text">Layanan ini menawarkan pijatan yang disesuaikan untuk anak-anak, membantu meredakan ketegangan otot dan meningkatkan suasana relaksasi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card" onclick="showServiceDetails('Nama Layanan')">
                    <div class="card-body">
                        <h5 class="card-title">Pijat Laktasi</h5>
                        <p class="card-text">Layanan ini berfokus pada teknik pijatan tertentu yang bertujuan untuk membantu melancarkan produksi ASI (Air Susu Ibu).</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="card service-card" onclick="showServiceDetails('Nama Layanan')">
                    <div class="card-body">
                        <h5 class="card-title">Terapi Tumbuh Kembang</h5>
                        <p class="card-text">Layanan ini menghadirkan serangkaian kegiatan yang bertujuan untuk membantu perkembangan fisik dan kognitif anak secara optimal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="card service-card" onclick="showServiceDetails('Nama Layanan')">
                    <div class="card-body">
                        <h5 class="card-title">Message Sembelit</h5>
                        <p class="card-text">Layanan ini memberikan pijatan yang dapat membantu mengurangi masalah sembelit pada anak.</p>
                    </div>
                </div>
            </div>
        
            <div class="col-md-4">

                <div class="card service-card" onclick="showServiceDetails('Nama Layanan')">
                    <div class="card-body">

                        <h5 class="card-title">Nebulizer</h5>
                        <p class="card-text">Layanan ini menggunakan alat nebulizer untuk membantu pengobatan saluran pernapasan pada anak.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card" onclick="showServiceDetails('Nama Layanan')">
                    <div class="card-body">
                        <h5 class="card-title">Potong Kuku</h5>
                        <p class="card-text">Layanan ini menyediakan layanan potong kuku untuk bayi dan anak.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

