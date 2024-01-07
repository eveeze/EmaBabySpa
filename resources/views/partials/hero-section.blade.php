<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmaBabySpa - Hero</title>
    <style>
        .svg-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: -1;
        }

        .hero-svg {
            width: 100%;
            height: auto;
            fill: #75C4F1;
        }
        .hero {
            position: relative;
            height: 110vh; 
            overflow: hidden;
        }
        .container {
            position: relative;
            z-index: 1;
        }
        .hero-section {
            height: 800px;
            position: relative;
            overflow: hidden;
            padding: 150px 0;
            display: flex;
            justify-content: flex-end; 
            align-items: center; 
        }

        .hero-section .display-4 {
            font-size: 3.5rem; 
            font-weight: bold; 
            color: #fff; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero-section .lead {
            font-size: 1.5rem; 
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3); 
        }

        .hero-section img {
            max-width: 400px; 
            height: auto; 
            border-radius: 50%;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1); 
            margin-left: 200px;
            margin-right: 50px;
            animation: animateImage 3s ease-in-out infinite alternate;
        }

        @keyframes animateText {
            to {
                background-position: 200%;
            }
        }

        @keyframes animateImage {
            to {
                transform: scale(1.1);
            }
        }
        @keyframes swing {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-3px); }
            100% { transform: translateX(0); }
        }

        .btn-reservation {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1.2rem;
            text-decoration: none;
            background-color: #FF5733;
            color: #fff;
            border-radius: 5px;
            border: none;
            transition: background-color 0.3s ease-in-out, transform 0.2s ease-in-out;
            cursor: pointer;
            animation: swing 0.8s ease-in-out infinite;
        }

        .btn-reservation:hover {
            background-color: #E64A19;
            transform: scale(1.05);
            animation: none; 
        }
        @media (max-width: 992px) {
            .hero {
                height: auto; 
            }

            .hero-section {
                padding: 80px 0; 
                flex-direction: column; 
                align-items: center; 
                text-align: center; 
            }

            .hero-section .col-md-6 {
                margin-bottom: 0; 
            }

          
            .hero-section img {
                max-width: 300px; 
                margin-left: 50px; 
                margin-top: 0; 
                margin-right: 20px;
            }

            .hero-section .display-4 {
                font-size: 2.5rem; 
            }

            .hero-section .lead {
                font-size: 1.2rem; 
            }

            .hero-section .btn-reservation {
                font-size: 1rem;
            }
        }

       @media (max-width: 576px) {
            .hero-section .display-4 {
                font-size: 2rem; 
            }

            .hero-section .lead {
                font-size: 1rem; 
            }

            .hero-section .btn-reservation {
                font-size: 0.9rem;
            }

            .container {
                display: flex;
                flex-direction: column-reverse; 
                align-items: center; 
            }

            .hero-section {
                padding: 80px 0; 
                text-align: center; 
            }

            .hero-section img {
                align-items: center;
                max-width: 80%; 
                margin-left: auto; 
                margin-right: auto; 
                margin-top: 20px; 
            }
        }
    </style>
</head>
<body>
    <section class="hero-section position-relative overflow-hidden py-5">
        <div class="svg-background">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="hero-svg">
                <path fill="#75C4F1" fill-opacity="1" d="M0,64L30,101.3C60,139,120,213,180,208C240,203,300,117,360,106.7C420,96,480,160,540,197.3C600,235,660,245,720,229.3C780,213,840,171,900,133.3C960,96,1020,64,1080,69.3C1140,75,1200,117,1260,149.3C1320,181,1380,203,1410,213.3L1440,224L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path>
            </svg>
        </div>

        <div class="container d-flex align-items-center">
            <div class="col-md-6">
                <h1 class="display-4 text-shadow text-styling">Selamat datang di website Ema Baby Spa</h1>
                <p class="lead text-shadow text-styling">Relax, Healthy, and Happy</p>
                <a href="https://wa.link/r7hvs0" target="_blank" class="btn-reservation">Reservasi Sekarang!!!</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="/images/logo.png" alt="Logo" class="img-fluid">
            </div>
        </div>
    </section>
</body>
</html>