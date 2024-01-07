<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EmaBabySpa - About Us</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
      color: #333;
    }

    .container {
      width: 90%;
      margin: 0 auto;
      overflow: hidden;
    }

    .about-section {
      padding: 80px 0; 
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    .about-section.show {
      opacity: 1;
      transform: translateY(0);
    }

    .about-section .profile-img {
      width: 50%; 
      height: auto;
      border-radius: 50%; 
      border: 4px solid #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out; 
      overflow: hidden; 
      margin-bottom: 20px; 
    }

    .about-section .profile-img img {
      width: 100%;
      height: auto;
      object-fit: cover;
      transition: transform 0.3s ease-in-out; 
    }

    .about-section .col-md-6 {
      display: flex;
      align-items: center; 
      justify-content: center;
      flex-direction: column; 
      text-align: center; 
    }
    .about-section .col-md-6 h3 {
      font-size: 32px; 
      margin-bottom: 10px; 
    }
    .about-section .col-md-6 p {
      font-size: 18px;
      line-height: 1.8; 
      color: #555; 
      text-align: justify; 
      margin-top: 0; 
    }

    @media (max-width: 768px) {
      .about-section .profile-img {
        width: 70%; 
      }
      .about-section .col-md-6 h3 {
        font-size: 28px; 
      }
      .about-section .col-md-6 p {
        font-size: 16px; 
      }
    }

    @media (max-width: 576px) {
    
    .about-section .col-md-6 {
      flex-direction: column; 
      align-items: center; 
      text-align: center; 
    }
    .about-section .col-md-6 h3 {
      font-size: 32px; 
      margin-bottom: 10px;
    }
    .about-section .profile-img {
      width: 50%;
      max-width: 150px; 
      margin-bottom: 20px; 
    }
    .about-section .col-md-6 p {
      font-size: 18px; 
    }
  }
  </style>
</head>
<body>
  <!-- About Section -->
  <section id="about" class="about-section py-5">

  <div class="container">

    <div class="row align-items-center">

      <div class="col-md-6">
        <div class="profile-img">
          <img src="/images/ownerz.jpeg" alt="Owner" class="img-fluid rounded">
        </div>
      </div>

      <div class="col-md-6">
        <h3 class="mb-3">Ema Pradina</h3>
        <p>
          Halo Bunda! Saya Ema Pradina. Saya memiliki pengalaman panjang dalam industri spa bayi, dengan fokus pada memberikan layanan berkualitas tinggi kepada para ibu dan bayi mereka. Selama lebih dari 4 tahun, saya telah berkomitmen untuk menciptakan lingkungan yang aman, nyaman, dan menenangkan bagi para bunda dan buah hati mereka. Pengalaman saya telah membantu banyak keluarga untuk merasakan manfaat positif dari perawatan spa untuk bayi, tidak hanya secara fisik, tetapi juga memberikan momen keintiman yang berharga antara ibu dan anak. Saya bersama tim saya dengan senang hati menyambut Anda di Ema Baby Spa!
        </p>
      </div>

    </div>

  </div>

</section>


  <script>
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function showAboutSection() {
        const aboutSection = document.querySelector('.about-section');
        if (isInViewport(aboutSection)) {
            aboutSection.classList.add('show');
            window.removeEventListener('scroll', showAboutSection);
        }
    }

    window.addEventListener('scroll', showAboutSection);

    function showAboutSectionResponsive() {
        const aboutSection = document.querySelector('.about-section');
        if (window.innerWidth <= 992) {
            aboutSection.classList.add('show');
            window.removeEventListener('scroll', showAboutSection);
        }
    }

    window.addEventListener('resize', showAboutSectionResponsive);

    showAboutSectionResponsive();
</script>
</body>
</html>