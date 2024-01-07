<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmaBabySpa-Gallery</title>
    <style>
        .gallery-item {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 1.5s ease-out, transform 1.5s ease-out;
        }

        .gallery-item.show {
            opacity: 1;
            transform: translateY(0);
        }

        .gallery-section .gallery-item {
            overflow: hidden;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.5s ease-out;
            position: relative;
        }

        .gallery-section .gallery-item:hover {
            transform: scale(1.1);
        }

        .gallery-section .gallery-item .image-description {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 10px;
            text-align: center;
            transition: background-color 0.3s ease-in-out, opacity 0.5s ease-out;
            opacity: 0;
        }

        .gallery-section .gallery-item:hover .image-description {
            background-color: rgba(255, 255, 255, 0.9);
            opacity: 1;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .gallery-section .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .gallery-section .col-md-4 {
            flex: 0 0 calc(33.333% - 1rem);
            max-width: calc(33.333% - 1rem);
            margin-bottom: 2rem;
        }

        @media (max-width: 768px) {
            .gallery-section .col-md-4 {
                flex: 0 0 calc(50% - 1rem);
                max-width: calc(50% - 1rem);
            }
        }

        @media (max-width: 576px) {
            .gallery-section .row {
            flex-direction: column;
            }
            .gallery-section .col-md-4 {
                flex: 0 0 calc(100% - 1rem);
                max-width: calc(100% - 1rem);
            }
            .gallery-section .h2 {
            margin-bottom: 20px; 
            margin-top: 20px;
        }
           
        }
    </style>
</head>
<body>
    <!-- Bagian Galeri -->
    <section id="gallery" class="gallery-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">Gallery</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <img src="/images/gallery/outer.png" alt="Image 1" class="img-fluid">
                        <div class="image-description">
                            <p>Outer View</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <img src="/images/gallery/inside-1.jpeg" alt="Image 2" class="img-fluid">
                        <div class="image-description">
                            <p>Inner View 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <img src="/images/gallery/inside-2.jpeg" alt="Image 3" class="img-fluid">
                        <div class="image-description">
                            <p>Inner View 2</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function fadeInGalleryItems() {
            const galleryItems = document.querySelectorAll('.gallery-item');

            galleryItems.forEach((item) => {
                const itemTop = item.getBoundingClientRect().top;
                const screenHeight = window.innerHeight;

                if (itemTop < screenHeight) {
                    item.classList.add('show');
                }
            });
        }

        function debounce(func, wait = 10, immediate = true) {
            let timeout;
            return function () {
                const context = this,
                    args = arguments;
                const later = function () {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                const callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        }

        const debouncedFadeIn = debounce(fadeInGalleryItems);

        window.addEventListener('scroll', debouncedFadeIn);
        window.addEventListener('resize', debouncedFadeIn);

        window.addEventListener('load', debouncedFadeIn);
    </script>
</body>
</html>
