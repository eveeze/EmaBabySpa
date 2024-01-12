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
   <!-- Comment Section -->
<!-- Comment Section -->
<section id="comment-section" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Customer Comments</h2>

        <!-- Comment Form -->
        @auth
            <form action="{{ route('add.comment') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="content">Add Comment:</label>
                    <textarea name="content" id="content" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @else
            <p>Login to add comments.</p>
        @endauth

        <!-- Tampilkan komentar yang sudah ada -->
        @isset($comments)
            @forelse($comments as $comment)
                <div class="card mb-3 bg-black">
                    <div class="card-body">
                        <p class="card-text">{{ $comment->content }}</p>
                        <small class="text-muted">Posted by: {{ $comment->user->name }}</small>
                    </div>
                </div>
            @empty
                <p>No comments available.</p>
            @endforelse
        @endisset
    </div>
</section>
    <!-- Contact Section -->
    @include('partials.contact')

    <!--Footer section -->
    @include('partials.footer')    
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
    </script>
</body>
</html>


