<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmaBabySpa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .navbar {
            background-color: #75C4F1;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar-brand {
            color: #fff;
            font-weight: bold;
            margin-left: 20px;
        }

        .nav-link {
            color: #fff !important;
            margin-right: 10px;
        }

        .navbar-toggler {
            padding: 0.25rem 0.5rem;
            font-size: 1rem;
            order: 1;
            flex-grow: 0;
            width: 40px;
            height: 40px;
            position: absolute;
            top: 10px;
            right: 20px;
            z-index: 1;
        }

        @media (max-width: 991.98px) {
            .collapse.navbar-collapse {
                position: absolute;
                top: 41px;
                left: 0;
                background-color: #75C4F1;
                padding: 10px;
                border-radius: 0 0 5px 5px;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
                width: 100%;
                text-align: left;
            }

            .navbar-nav {
                margin-left: auto;
            }

            .navbar-nav .nav-item {
                text-align: left;
            }
        }

        @media (min-width: 992px) {
            .navbar-nav {
                margin-left: auto !important;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light justify-content-between fixed-top">
        <a class="navbar-brand font-bold" href="/">Ema Baby Spa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#customer-rating">Customer Ratings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-eoGD2ZMxdHsHx6v2xvF3eVp4XxW5Lm9hR8I4uUq8wKlERgx2FxFYq2OzdmLZ6fuP" crossorigin="anonymous"></script>
</body>
</html>
