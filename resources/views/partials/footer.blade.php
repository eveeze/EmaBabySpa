<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmaBabySpa</title>
    
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .footer-section {
            background-color: #75C4F1;
            padding: 50px 0;
            color: #333;
            text-align: center;
        }

        .footer-section h4 {
            text-decoration: underline;
            font-weight: bold;
            color: #555;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .footer-section p {
            margin-bottom: 10px;
            font-size: 16px;
            line-height: 1.6;
        }

        .footer-section a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s; 
        }

        .footer-section a:hover {
            text-decoration: underline;
            color: #004080; 
            animation-name: linkHover;
            animation-duration: 0.4s;
            animation-timing-function: ease-in-out;
            animation-fill-mode: forwards;
        }

        .footer-section p:last-child {
            margin-bottom: 0;
        }

        .footer-section .container {
            padding: 0;
        }

        @media (max-width: 768px) {
            .footer-section .row {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 20px;
            }

            .footer-section .col-md-3 {
                flex: 0 0 calc(50% - 40px);
                max-width: calc(50% - 40px);
            }

            .footer-section h4,
            .footer-section p {
                text-align: left;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .footer-section {
            animation-name: fadeIn;
            animation-duration: 1s;
            animation-delay: 0.3s; 
            animation-fill-mode: forwards;
        }

        @keyframes linkHover {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-3px);
            }
        }

        .footer-section strong {
            font-weight: bold;
        }

        .footer-section .copyright {
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h4>Home Office</h4>
                    <p style="text-decoration: underline;">Jalan pengging sanggung Dusun Kebatan, RT.06/RW.02, Dusun I, Jenengan, Sawit, Boyolali Regency, Central Java 57374</p>
                </div>
                <div class="col-md-3">
                    <h4>Kontak</h4>
                    <p><a href="https://wa.link/r7hvs0" target="_blank" style="text-decoration: none; color:#333"><strong>Telepon</strong>: +6285728557838</a></p>
                    <p><strong>Email</strong>: emapradina41@gmail.com</p>
                </div>
                <div class="col-md-3">
                    <h4>Reservasi</h4>
                    <p><strong>Buka:</strong> Setiap Hari</p>
                    <p><strong>Pukul:</strong> 07.00 – 15.00 WIB</p>
                </div>
                <div class="col-md-3">
                    <h4>Ikuti Kami</h4>
                    <p><a href="https://www.instagram.com/ema_mom_kids_babyspa/?hl=en" target="_blank" style="text-decoration: none; color:#333"><strong>IG</strong>: ema_mom_kids_babyspa</a></p>
                    <p><a href="https://www.facebook.com/emababyspa10/" target="_blank" style="text-decoration: none; color:#333"><strong>Facebook</strong>: Ema_Mom_Kids_Baby_SPA</a></p>
                    <p><a href="https://www.tiktok.com/@emababyspa" target="_blank" style="text-decoration: none; color:#333"><strong>TikTok</strong>: emababyspa</a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Copyright -->
    <footer class="footer-section">
        <div class="container">
            <p class="copyright">&copy; 5220411045 Tito Zaki Saputro Web teori A</p>
        </div>
    </footer>
</body>
</html>
