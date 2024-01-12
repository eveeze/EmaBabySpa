<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ema Baby Spa</title>   
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    <style>
        body {
            background-color: #9AD1F7 !important;
            font-family: 'Montserrat', sans-serif;
        }
        .text-styling {
            font-family: 'Montserrat', sans-serif; 
            color: var(--text-color); 
            animation: fadeInUp 2s ease-in-out;
            text-shadow: 2px 2px 4px var(--accent-color), 3px 6px 20px var(--accent-color); 
        }
        
    @media (max-width: 767.98px) {
    .navbar {
        padding-top: 15px;
        padding-bottom: 15px;
    }
    
    .hero-section .container {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .hero-section .display-4 {
        font-size: 1.5rem; /* Mengurangi ukuran font H1 */
    }

    .hero-section .lead {
        font-size: 1rem; /* Mengurangi ukuran font paragraf */
    }

    .hero-section img {
        max-width: 60%; /* Gambar responsif, tetap di kanan */
        height: auto; /* Menghindari distorsi gambar */
        margin: 20px 40px; /* Memberikan sedikit margin di atas dan di bawah gambar */
    }
    }

    

    .gallery-section .gallery-item {
        margin-bottom: 30px;
    }

    .service-card {
        margin: 20px auto;
    }

    .service-card .card-text {
        font-size: 14px;
    }

    .rating-card .card-text {
        font-size: 14px;
    }

    .footer-section {
        padding: 30px 0;
    }

@media (min-width: 768px) and (max-width: 991.98px) {
    .navbar {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .hero-section .container {
        padding-top: 80px;
        padding-bottom: 80px;
    }
    .hero-section img {
        max-width: 80%;
        margin-left: 100px;
        margin-right: auto;
    }
    .hero-section .display-4 {
        font-size: 3rem;
    }
    
    .hero-section .lead {
        font-size: 1.4rem;
    }

    .about-section h2 {
        font-size: 32px;
    }

    .gallery-section .gallery-item {
        margin-bottom: 20px;
    }

    .service-card {
        width: 250px;
        margin: 20px;
    }

    .service-card .card-text {
        font-size: 15px;
    }

    .rating-card .card-text {
        font-size: 15px;
    }

    .footer-section {
        padding: 40px 0;
    }
}

/* Untuk desktop */
@media (min-width: 992px) {
    .navbar {
        padding-top: 15px;
        padding-bottom: 15px;
    }
    
    .hero-section .container {
        padding-top: 100px;
        padding-bottom: 100px;
    }
    .hero-section img {
        max-width: 100%;
        margin-left: 200px;
    }
    .hero-section .display-4 {
        font-size: 3.5rem;
    }

    .hero-section .lead {
        font-size: 1.5rem;
    }

    .about-section h2 {
        font-size: 36px;
    }

    .gallery-section .gallery-item {
        margin-bottom: 30px;
    }

    .service-card {
        width: 300px;
        margin: 20px;
    }

    .service-card .card-text {
        font-size: 16px;
    }

    .rating-card .card-text {
        font-size: 16px;
    }

    .footer-section {
        padding: 50px 0;
    }
}

    </style>
</head>
<body>
    <!-- Navbar -->
    @include('partials.nav')
    <!-- Hero Section -->
    @include('partials.hero-section')
    <!-- About Section -->
    @include('partials.about')
    <!-- Bagian Galeri -->
    @include('partials.gallery')
    <!-- Services Section -->
    @include('partials.services')
    <!-- Customer Ratings Section -->
    @include('partials.customer')
    <!-- Contact Section -->
    @include('partials.contact')

    <!--Footer section -->
    @include('partials.footer')
    <!-- Modal -->
    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form Login -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label" for="remember">
                                Remember me
                            </label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>

                        <div class="text-center mt-3">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                            @endif
                        </div>
                    </form>
                    <!-- End Form Login -->
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Register -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Registrasi -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password-confirm" class="form-label">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                    </div>
                </form>
                <!-- Akhir Form Registrasi -->
            </div>
        </div>
    </div>
</div>

<!-- End Modal Login -->
    <!-- Link ke library JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
   
    <script>
       
        $(document).ready(function () {
        $(window).scroll(function () {
            // Atur animasi saat scroll
            $('.fade-in-up').each(function () {
                var bottom_of_element = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();
                if (bottom_of_window > bottom_of_element) {
                    $(this).animate({ 'opacity': '1', 'transform': 'translateY(0)' }, 800);
                }
            });
        });
    });
    $(document).ready(function() {
        // Check the authentication status of the user
        var isLoggedIn = "{{ Auth::check() }}";

        // If the user is not authenticated, show the login modal
        if (!isLoggedIn) {
            var myModal = new bootstrap.Modal(document.getElementById('loginModal'));
            myModal.show();
        }
    });
    $(document).ready(function () {
        $('[data-bs-target="#registerModal"]').on('click', function () {
            $('#registerModal').modal('show');
        });
    });
    </script>
</body>
</html>


