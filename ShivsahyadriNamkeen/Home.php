<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Shivsahyadri Namkeen</title>
<!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>

body {
  font-family: system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
  line-height: 1.5;
  color: #333;
}

/* Navbar Custom Style */
.navbar {
    background: #fff;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
}

.navbar-brand img {
    width: 80px;
    height: auto;
}

.navbar-brand span {
    font-size: 20px;
    font-weight: bold;
    color: #d35400; /* Attractive orange */
}

.navbar-nav .nav-link {
    color: #333;
    font-weight: 500;
    margin: 0 8px;
    transition: all 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #d35400; /* Orange hover effect */
    text-decoration: underline;
}

/* Active link styling */
.navbar-nav .nav-link.active {
    color: #d35400;
    font-weight: bold;
}

/* Responsive Toggler Icon */
.navbar-toggler {
    border: none;
}

.navbar-toggler:focus {
    box-shadow: none;
}

/* ========== Hero Section ========== */
.bg-hero {
  background: url('WhatsApp Image 2025-07-16 at 15.09.03_abc29b0f.jpg') center/cover no-repeat; /* TEMP demo bg */
  min-height: 90vh;
  position: relative;
}
.hero-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,.55);
}
.hero-content {
  position: relative;
  z-index: 2;
  max-width: 1000px;
  margin-inline: auto;
  padding: 2rem;
}

/* ========== Product Cards ========== */
.product-card img {
  object-fit: cover;
  height: 150px;
}
.product-card .card-title {
  font-size: 1rem;
}

/* ========== Footer ========== */
.site-footer {
  font-size: .875rem;
}

/* ========== Responsive Tweaks ========== */
@media (max-width: 575.98px) {
  .hero-content h1 { font-size: 1.75rem; }
  .hero-content p  { font-size: 1rem; }
  .product-card img { height: 120px; }
}

If no hero image yet, uncomment:
.hero {
  background:#e63946;
}
*/

/* Responsive tweaks */
@media (max-width:576px) {
  .hero { min-height: 70vh; }
  .hero-content h1 { font-size:1.75rem; }
  .hero-content .lead { font-size:1rem; }
  #top-products .card-body { padding:.75rem; }
}

/* Section Background */
.aloo-sev-section {
    background: url('https://t4.ftcdn.net/jpg/02/08/38/95/360_F_208389537_XYn1ukJfse2kVLxJYJpiBcjEkAHrWfBt.jpg') no-repeat center center;
    background-size: cover;
    padding: 50px 20px;
    position: relative;
    color: #fff;
    font-family: 'Poppins', sans-serif;
    text-align: center;
}

/* Text Styling */
.aloo-sev-section h2 {
    font-size: 38px;
    font-weight: 400;
    font-family: 'Georgia', serif;
}

.aloo-sev-section h2 span {
    color:  #d00000; /* yellowish orange */
    font-weight: bold;
}

/* Images Container */
.image-container {
    position: relative;
    max-width: 1300px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}

/* Main Product Image */
.product-img {
    width: 300px;
    z-index: 2;
    margin: 20px;
}

/* Tilted Photos */
.photo-left, .photo-right {
    position: absolute;
    width: 180px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.5);
    border: 8px solid #fff;
    background: #fff;
}

.photo-left {
    top: 40px;
    left: 10%;
    transform: rotate(-12deg);
}

.photo-right {
    bottom: 40px;
    left: 20%;
    transform: rotate(8deg);
}

/* Decorative Elements (Optional Stars) */
.star {
    position: absolute;
    font-size: 24px;
    color: #fff;
}

.star1 { top: 30px; left: 50%; }
.star2 { top: 200px; left: 70%; }

/* Responsive */
@media (max-width: 768px) {
    .photo-left, .photo-right {
        display: none;
    }
}

 body {
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .dealer-section {
            background: #ffc400;
            text-align: center;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }
        .dealer-section h2 {
            font-size: 3rem;
            font-weight: 700;
            color: #b30000;
        }
        .dealer-section h3 {
            font-size: 2rem;
            font-style: italic;
            margin-bottom: 20px;
        }
        .dealer-section p {
            max-width: 600px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
            color: #333;
        }
        .dealer-form .form-control {
            border-radius: 8px;
            padding: 12px;
        }
        .dealer-btn {
            background: #3b179d;
            color: #fff;
            font-weight: bold;
            border-radius: 8px;
            padding: 12px 30px;
            transition: 0.3s ease;
        }
        .dealer-btn:hover {
            background: #250d65;
        }
        .left-hand, .right-hand {
            position: absolute;
            width: 350px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
        }
        .left-hand {
            left: 0;
        }
        .right-hand {
            right: 10px;
        }

/* Section Styling */
.combination-section {
    background: url('https://anandnamkeen.com/ast/uploads/2021/04/tasty-combination-slider-7.webp') no-repeat center center;
    background-size: cover;
    padding: 200px 20px;
    text-align: center;
    position: relative;
    color: #333;
}

/* Title */
.combination-section h2 {
    font-family: 'Georgia', serif;
    color: #d00000;
    font-weight: bold;
    font-size: 34px;
}

.combination-section h5 {
    font-family: 'Brush Script MT', cursive;
    font-size: 26px;
    margin-bottom: 30px;
}

/* Sticky Note */
.sticky-note {
    background: #ffeb3b;
    padding: 20px;
    width: 280px;
    box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.3);
    font-family: 'Patrick Hand', cursive;
    font-size: 20px;
    transform: rotate(-6deg);
    margin: 40px auto;
    border-radius: 6px;
}

/* Decorative Text */
.tagline {
    font-size: 18px;
    max-width: 500px;
    margin: 0 auto;
}

/* Overlay effect for text visibility */
.combination-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.6); /* light overlay for contrast */
    z-index: 0;
}

.combination-section .content {
    position: relative;
    z-index: 1;
}

/* Background Section */
.mood-section {
    background: url('https://anandnamkeen.com/ast/themes/anand-namkeen/images/black-bg.webp') no-repeat center center;
    background-size: cover;
    padding: 50px 20px;
    position: relative;
    text-align: center;
    color: #fff;
    font-family: 'Poppins', sans-serif;
}

/* Heading */
.mood-section h2 {
    font-size: 40px;
    font-weight: bold;
    color: #fff;
}

.mood-section h2 span {
    color: #f9a734ff; /* yellow-orange */
    font-style: italic;
}

/* Emoji Grid */
.emoji-grid {
    margin-top: 40px;
    position: relative;
}

.emoji-item {
    position: absolute;
    text-align: center;
    color: #fff;
    font-weight: bold;
    font-size: 14px;
}

.emoji-item img {
    width: 60px;
    height: 60px;
}

/* Positioning emojis */
.emoji1 { top: 20px; left: 20%; }
.emoji2 { top: 0; left: 45%; }
.emoji3 { top: 20px; right: 20%; }
.emoji4 { top: 150px; left: 10%; }
.emoji5 { top: 150px; left: 40%; }
.emoji6 { top: 150px; right: 25%; }

/* Chips Images */
.chips-container {
    margin-top: 200px;
}

.chips-container img {
    width: 220px;
    margin: 0 15px;
}

 body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
    }

    .footer {
        background-color: #fff;
        padding: 40px 0;
        position: relative;
    }

    .footer .insta-banner {
        background: linear-gradient(90deg, #833ab4, #fd1d1d, #fcb045);
        border-radius: 15px;
        color: #fff;
        text-align: center;
        padding: 30px;
        margin-bottom: 30px;
    }

    .footer .insta-banner i {
        font-size: 80px;
        margin-bottom: 15px;
    }

    .footer h5 {
        color: #d80000;
        margin-bottom: 15px;
        font-weight: bold;
    }

    .footer ul {
        padding: 0;
        list-style: none;
    }

    .footer ul li a {
        color: #333;
        text-decoration: none;
        font-size: 15px;
        line-height: 28px;
    }

    .footer ul li a:hover {
        color: #fd1d1d;
    }

    .footer .social-icons a {
        color:blue ;
        font-size: 20px;
        margin-right: 15px;
    }

    .footer .social-icons a:hover {
        color: #fd1d1d;
    }

    .footer-bottom {
        font-size: 14px;
        color: #666;
        margin-top: 15px;
    }


    .whatsapp-btn {
      background-color: #25D366;
      font-weight: bold;
            border-radius: 8px;
            padding: 12px 30px;
            transition: 0.3s ease;
           color: white;
    }
    

    .call-btn {
      background-color: #007bff;
      font-weight: bold;
            border-radius: 8px;
            padding: 12px 30px;
            transition: 0.3s ease;
            color: white;
    }

    .social-icons {
      margin-top: 15px;
    }

    .social-icons a {
      margin: 0 8px;
      text-decoration: none;
      font-size: 20px;
      color: white;
      transition: transform 0.2s ease;
    }

    .social-icons a:hover {
      transform: scale(1.2);
    }

    .emoji {
      font-size: 22px;
      margin-right: 6px;
    }
.social-icons {
      display: flex;
      justify-content: center;
      gap: 30px;
      margin-top: 20px;
    }

    .social-icons a img {
      width: 40px;
      height: 40px;
      transition: transform 0.3s ease;
      border-radius: 50%;
    }

    .social-icons a img:hover {
      transform: scale(1.2);
    }




    



    
</style>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo & Brand Name -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="logo 2.jpg" alt="Logo">
            <span class="ms-2">Shivsahyadri Namkeen</span>
        </a>

        <!-- Toggler for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" href="Home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link " href="About.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="product.php">Our Products</a></li>
                <li class="nav-item"><a class="nav-link" href="Why Choose Us .php">Why Choose Us?</a></li>
                <li class="nav-item"><a class="nav-link" href="Gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="ContactUs.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="Distributors.php">Distributors</a></li>
            </ul>
        </div>
    </div>
</nav>


<section class="hero position-relative text-center text-white bg-hero d-flex align-items-center justify-content-center">
  <div class="hero-overlay"></div>
  <div class="hero-content position-relative">
    <h1 class="display-5 fw-bold mb-3">Taste the Tradition of Shivsahyadri Namkeen</h1>
    <p class="lead mb-4">Authentic Maharashtrian snacks made with love & quality ingredients.</p>
    <a href="ContactUs.php" class="btn btn-warning btn-lg">Explore Products</a>
  </div>
</section>


 <!-- ===== Top Product Highlights ===== -->
  <section class="bg-light py-5" id="top-products">
    <div class="container">
      <div class="row mb-4">
        <div class="col text-center">
           <h1 class="display-5 fw-bold text-primary">Our Favorites</h1>
        </div>
      </div>
      <div class="row g-4">

        <!-- Product: Chakali -->
        <div class="col-6 col-md-3">
          <div class="card h-100 text-center">
            <img src="product 1.jpg" class="card-img-top" alt="Chakali">
            <div class="card-body p-3">
              <h3 class="h6 mb-1">Chakali</h3>
              <p class="small text-muted mb-2">Pack: 200g</p>
              <p class="fw-bold mb-2">₹50.00</p>
              <p class="small text-muted mb-0">Crispy spiral snack with traditional spices.</p>
            </div>
          </div>
        </div>

        <!-- Product: Bhadang -->
        <div class="col-6 col-md-3">
          <div class="card h-100 text-center">
            <img src="product 1.jpg" class="card-img-top" alt="Bhadang">
            <div class="card-body p-3">
              <h3 class="h6 mb-1">Bhadang</h3>
              <p class="small text-muted mb-2">Pack: 150g</p>
              <p class="fw-bold mb-2">₹40.00</p>
              <p class="small text-muted mb-0">Spiced puffed rice with peanuts &amp; chili.</p>
            </div>
          </div>
        </div>

        <!-- Product: Shev -->
        <div class="col-6 col-md-3">
          <div class="card h-100 text-center">
            <img src="product 1.jpg" class="card-img-top" alt="Shev">
            <div class="card-body p-3">
              <h3 class="h6 mb-1">Shev</h3>
              <p class="small text-muted mb-2">Pack: 200g</p>
              <p class="fw-bold mb-2">₹35.00</p>
              <p class="small text-muted mb-0">Fine gram flour noodles, lightly spiced.</p>
            </div>
          </div>
        </div>

        <!-- Product: Chivda -->
        <div class="col-6 col-md-3">
          <div class="card h-100 text-center">
            <img src="product 1.jpg" class="card-img-top" alt="Chivda">
            <div class="card-body p-3">
              <h3 class="h6 mb-1">Chivda</h3>
              <p class="small text-muted mb-2">Pack: 250g</p>
              <p class="fw-bold mb-2">₹45.00</p>
              <p class="small text-muted mb-0">Roasted poha mix with nuts &amp; mild spice.</p>
            </div>
          </div>
        </div>

      </div><!-- /.row -->
    </div><!-- /.container -->
  </section>

<!-- Section -->
<section class="aloo-sev-section">
    <div class="container">
        <div class="image-container">
            <!-- Left Polaroid -->
            <img src="product 1.jpg" alt="Photo Left" class="photo-left">
            
            <!-- Right Polaroid -->
            <img src="product 1.jpg" alt="Photo Right" class="photo-right">
            
            <!-- Main Product -->
            <img src="product 2.jpg" alt="Aloo Sev" class="product-img">
        </div>

        <!-- Text -->
        <h2>
          As many stars as there are in the sky <br>
            <span>that's how much sev is in this."</span>
        </h2>
    </div>
</section>

<!-- Section Start -->
<section class="combination-section">
    <div class="container content">
        <h2>Try This</h2>
        <h5>tasty combinations</h5>
        
        <!-- Sticky Note -->
        <div class="sticky-note">
            Combine Chana Dal<br>
            with Tomato,<br>
            Onion,<br>
            Raw Mango &<br>
            Chaat Masala
        </div>
    </div>
</section>

<!-- Mood Section -->
<section class="mood-section">
    <div class="container">
        <h2>what's your <span>mood today?</span></h2>

        <!-- Emojis with text -->
        <div class="emoji-grid">
            <div class="emoji-item emoji1">
                <img src="https://anandnamkeen.com/ast/uploads/2020/12/have-party-emoji.webp" alt="Party">
                <p>HAVE<br>A PARTY</p>
            </div>
            <div class="emoji-item emoji2">
                <img src="https://anandnamkeen.com/ast/uploads/2020/12/picnic-emoji.webp" alt="Picnic">
                <p>GO ON<br>A PICNIC</p>
            </div>
            <div class="emoji-item emoji3">
                <img src="https://anandnamkeen.com/ast/uploads/2020/12/work-line-pro-emoji.webp" alt="Work">
                <p>WORK LIKE<br>A PRO</p>
            </div>
            <div class="emoji-item emoji4">
                <img src="https://anandnamkeen.com/ast/uploads/2020/12/enjoy-at-time-emoji.webp" alt="Tea Time">
                <p>ENJOY<br>TEA TIME</p>
            </div>
            <div class="emoji-item emoji5">
                <img src="https://anandnamkeen.com/ast/uploads/2020/12/study-hard-emoji.webp" alt="Study">
                <p>STUDY<br>HARD</p>
            </div>
            <div class="emoji-item emoji6">
                <img src="https://anandnamkeen.com/ast/uploads/2020/12/do-nothing-at-all-emoji.webp" alt="Chill">
                <p>DO NOTHING<br>AT ALL</p>
            </div>
        </div>
<br>
<br>
<br>
<br><br>

        <!-- Chips Images -->
        <div class="chips-container">
            <img src="product 2.jpg" alt="Chips 1">
            <img src="product 1.jpg" alt="Chips 3">
            <img src="product 2.jpg" alt="Chips 1">
            <img src="product 1.jpg" alt="Chips 3">
        </div>
    </div>
</section>

<section class="dealer-section">
    <img src="https://anandnamkeen.com/ast/themes/anand-namkeen/images/hand-left-bottom.webp" class="left-hand" alt="Left Hand">
    <img src="https://anandnamkeen.com/ast/themes/anand-namkeen/images/hand-right-top.webp" class="right-hand" alt="Right Hand">

    <div class="container">
        <h2>Let’s walk together</h2>
        <h3><em>Together, let’s move forward</em></h3>
        <p>Let’s join hands in giving the best quality and incredible taste to snack lovers. Connect with us now to become the dealer of Gujarat’s reputed brand.</p>
        

           <form action="submit_contact.php" method="POST">
        
            <div class="row g-3 justify-content-center">
                <div class="col-md-4">
                    <input type="text"  name="name" placeholder="Name" required class="form-control mb-4" >
                </div>
                <br>
                <div class="col-md-4">
                    <input type="email"  name="email" placeholder="Email address" required class="form-control mb-4">
                </div>
                <div class="col-md-4">
                    <input type="text"  name="phone" placeholder=" phone number" required class="form-control mb-4">
                    
                </div>
                <div class="col-md-4">
                    <input type="text"  name="location" placeholder="Location" required class="form-control mb-4">
                </div>
                <div class="col-md-8">
                    <textarea name="message" rows="3" placeholder="Message" required class="form-control mb-4"></textarea>
                </div>
                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn dealer-btn">Become a Dealer</button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Footer Section -->
<section class="footer">
    <div class="container">
        <!-- Instagram Banner -->
        <div class="insta-banner">
            <i class="fab fa-instagram"></i>
            <h3>Follow Us <br></h3>
            
            <!-- WhatsApp Button -->
    <a href="https://wa.me/919999999999" target="_blank" class="btn-custom whatsapp-btn">
      <span class="emoji">💬</span> WhatsApp
    </a>

<br><br>

    <!-- Call Button -->
    <a href="tel:+919999999999" class="btn-custom call-btn">
      <span class="emoji">📞</span> Call Now
    </a>

 <!-- Social Icons -->
 <div class="social-icons">
    <a href="https://facebook.com/yourpage" target="_blank" title="Facebook">
      <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook">
    </a>
    <a href="https://twitter.com/yourhandle" target="_blank" title="Twitter">
      <img src="https://cdn-icons-png.flaticon.com/512/733/733579.png" alt="Twitter">
    </a>
    <a href="https://linkedin.com/in/yourprofile" target="_blank" title="LinkedIn">
      <img src="https://cdn-icons-png.flaticon.com/512/733/733561.png" alt="LinkedIn">
    </a>
  </div>

        </div>
        

        <!-- Footer Links -->
        <div class="row text-start">
            <div class="col-md-4">
                <h5>Useful Links</h5>
                <ul>
                    <li class="nav-item"><a class="nav-link " href="Home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="About.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="product.php">Our Products</a></li>
                <li class="nav-item"><a class="nav-link" href="Why Choose Us .php">Why Choose Us?</a></li>
                <li class="nav-item"><a class="nav-link" href="Gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="ContactUs.php">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="Distributors.php">Distributors</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>Corporate Office</h5>
                <p>
                    RS. No. - 1020/4p2, Ahmedabad - Palanpur Highway Road,<br>
                    Opp. Flora Hotel, Dharevada, Banaskantha, Gujarat - 385210.
                </p>
                <p><strong>P:</strong> +91 9825907450, +91 9825907410</p>
                <p><strong>E:</strong> info@anandnamkeen.com<br>
                support@anandnamkeen.com</p>
            </div>
            <div class="col-md-4">
              
                <div class="social-icons">
                    <a href="facebook.png"><i class="fab fa-facebook-f"></i></a>
                    <a href="instagram.png"><i class="fab fa-instagram"></i></a>
                    <a href="linkedin.png"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="footer-bottom mt-3">
                    © 2025 Shivsahyadr Namkeen Pvt. Ltd.<br>
                    All Rights Reserved.<br>
                    Designed & Developed by <b>Divyangi Chaudhari</b>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Optional main JS -->
<script src="/assets/js/main.js"></script>
</body>
</html>