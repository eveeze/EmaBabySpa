<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmaBabySpa-customer ratings</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .customer-rating-section {
            padding: 20px 0; 
        }

        .rating-cards {
            display: flex;
            justify-content: center;
            align-items: stretch;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .rating-card {
            width: calc(33.333% - 20px); 
            max-width: 400px;
            height: 450px;
            border-radius: 15px;
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            background-color: #fff;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .rating-card:hover {
            transform: translateY(-5px);
        }

        .rating-card .card-img-top {
            height: 250px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }

        .rating-card .card-body {
            padding: 20px;
            text-align: center;
        }

        .rating-card .card-title {
            font-weight: bold;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .rating-card .rating {
            font-size: 24px;
            margin-top: 20px; 
            line-height: 30px; 
        }

        .rating-card .card-text {
            margin-top: 15px;
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }

        .description {
            text-align: center;
            font-size: 1.2rem;
            margin-bottom: 20px; 
        }

        @media (max-width: 992px) {
            .rating-card {
                width: calc(50% - 20px); 
            }
            .rating-card .card-img-top {
                height: 200px;
            }
        }

        @media (max-width: 576px) {
            .rating-card {
                width: calc(100% - 20px); 
            }
            .rating-card .card-img-top {
                height: 200px;
            }
        }
    </style>
</head>
<body>
    <!-- Customer Ratings Section -->
    <section id="customer-rating" class="customer-rating-section">
        <div class="container">
            <h2 class="text-center">Customer Ratings</h2>
            <p class="description">Kami bangga membagikan ulasan pelanggan tentang pengalaman mereka di EmaBabySpa.</p>
            <div class="rating-cards">
                <div class="rating-card">
                    <img src="/images/customer-rating/erna.png" class="card-img-top" alt="Erna Putri">
                    <div class="card-body">
                        <h3 class="card-title">Erna Putri</h3>
                        <p class="card-text">"Yeeyy seneng bngt ya spa di sini Pelayanan okee...temptnya nyaman sekali 😍😍 Baby pun senang 😍"</p>
                        <div class="rating">⭐️⭐️⭐️⭐️⭐️</div>
                    </div>
                </div>
                <div class="rating-card">
                    <img src="/images/customer-rating/devi.png" class="card-img-top" alt="Devi Nindya">
                    <div class="card-body">
                        <h3 class="card-title">Devi Nindya</h3>
                        <p class="card-text">"Tempatnya nyaman banget, bersih, fasilitas oke punya, mba ema nya ramah. Nambah ilmu dari mba ema👍🤗"</p>
                        <div class="rating">⭐️⭐️⭐️⭐️⭐️</div>
                    </div>
                </div>
                <div class="rating-card">
                    <img src="/images/customer-rating/nur.png" class="card-img-top" alt="Nur Rohmah">
                    <div class="card-body">
                        <h3 class="card-title">Nur Rohmah</h3>
                        <p class="card-text">"Recommended bgt pijetnya lama hampir satu jam anakku habis pijet boboknya pules bgtt , mbak nya ramah-ramah"</p>
                        <div class="rating">⭐️⭐️⭐️⭐️⭐️</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
