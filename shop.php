<!-- Shop Page ///.PHP
Author: @MoraKhaledX -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Primary Meta Tags -->
  <title>Hype | Style Your Wardrobe With Trendy Fashion - Shop Now At Our Fashion Boutique</title>
  <meta name="title" content="Hype | Style Your Wardrobe with Trendy Fashion - Shop Now at Our Fashion Boutique">
  <meta name="description" content="Style your wardrobe with trendy fashion, Shop now at out fashion boutique.">

<!-- FavIcon Import -->
  <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/png">

 <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./fonts/font.css">

<!-- Custom CSS Linking -->
  <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<!-- Header Begin -->

  <header class="header" data-header>
    <div class="container">

      <a href="index.php" class="logo">
        <img src="./assets/images/HYPE-LOGO.png" width="132" height="27">
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li>
            <a href="index.php" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="shop.php" class="navbar-link">Shop</a>
          </li>

          <li>
            <a href="#" class="navbar-link">About</a>
          </li>

          <li>
            <a href="shop.php" class="navbar-link">Discount</a>
          </li>

        </ul>

        <button class="cart-btn">
          <ion-icon name="bag" aria-hidden="true"></ion-icon>

          <span class="span">Cart (0)</span>
        </button>

        <?php
        session_start();
        if(isset($_SESSION['loggedUser'])){
          echo '<a href="profile.php" class="btn">My Profile</a>';
      }
        else {
          echo '<a href="login.php" class="btn">Login</a>';
      }
        ?>
      </nav>

      <button class="nav-open-btn" aria-label="toggle menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

    </div>
  </header>

  <!-- Header End -->

  <main>
    <article>

 <!-- Products
        Section 
            Begin! -->

      <section class="section feature" style="margin-top: 120px;" aria-label="feature-label">
        <div class="container">

          <h2 class="h2 section-title title text-center" id="feature-label">Make Your <strong style="background-color: none; border-radius: 50px; padding:5px;">Choice</strong> &#129397;</h2>
          <style>
            strong {
              transition: .2s;
              border: 1px dashed #ee6023;
            }
            strong:hover {
              border: 1px solid #ee6023;
              transition: .2s;
              font-size: 70px;
            }
          </style>

          <ul class="feature-list">

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/products/12325049gn_14_f.jpg" width="448" height="470" loading="lazy"
                      alt="Acne Baseball Cap" class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="#" class="card-title">Camouflage T-Shirt</a>
                  </h3>

                  <span class="price">EGP 580.00</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/products/12326565rd_14_f.jpg" width="448" height="470" loading="lazy"
                      alt="Short Sleeve Shirt" class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="#" class="card-title">Super Pig T-Shirt</a>
                  </h3>

                  <span class="price">EGP 450.00</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/products/12347775au_14_f.jpg" width="448" height="470" loading="lazy"
                      alt="Garcons Parfums" class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="#" class="card-title">Hooded Sweatshirt</a>
                  </h3>

                  <span class="price">EGP 1190.00</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/products/12367380ar_14_f.jpg" width="448" height="470" loading="lazy"
                      alt="Salomon Sneaker" class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="#" class="card-title">Kenzo Sweatshirt</a>
                  </h3>

                  <span class="price">EGP 1250.00</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/products/11081235ti_14_f.jpg" width="448" height="470" loading="lazy"
                      alt="Ribbed Beanie Hat" class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="#" class="card-title">Adidas Stan Smith</a>
                  </h3>

                  <span class="price">EGP 950.00</span>
                </div>

              </div>
            </li>

            <li>
              <div class="product-card text-center">

                <div class="card-banner">

                  <figure class="product-banner img-holder" style="--width: 448; --height: 470;">
                    <img src="./assets/images/products/12290219qa_14_f.jpg" width="448" height="470" loading="lazy" alt="Acronym Khaki"
                      class="img-cover">
                  </figure>

                  <a href="#" class="btn product-btn">
                    <ion-icon name="bag" aria-hidden="true"></ion-icon>

                    <span class="span">Add To Cart</span>
                  </a>

                </div>

                <div class="card-content">
                  <h3 class="h3 title">
                    <a href="#" class="card-title">Diesel T-Shirt</a>
                  </h3>

                  <span class="price">EGP 390.00</span>
                </div>

              </div>
            </li>

          </ul>

          <a href="shop.html" class="btn btn-secondary">View All Products</a>

        </div>
      </section>

      <!-- Products 
        Section 
            End! -->




 <!-- Offer 
        Section 
            Begin! -->

      <section class="offer has-bg-image" style="background-image: url('./assets/images/pexels-monstera-7691346.jpg'); background-position: top;">
        <div class="container">

          <div class="offer-card">

            <h2 class="title card-title" style="font-size: 55px;">50% OFF</h2>

            <p class="card-text">
              Shop with us and get your hands on your favorite items at unbeatable prices. Don't miss out on these incredible deals, visit our sale page now and start saving!
            </p>

            <a href="shop.php" class="btn btn-secondary">
              <span class="span">Shop The Look</span>

              <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
            </a>

          </div>

        </div>
      </section>

   <!-- Offer 
        Section 
            End! -->

    </article>
  </main>



  <!-- Scroll To Top Button Begin -->
  <button id="scroll-to-top"><ion-icon name="arrow-up"></ion-icon></button>
<!-- Scroll To Top Button End -->




<!-- Footer Begin -->

<footer class="footer">
    <div class="container">

      <div class="footer-top">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/HYPE-LOGO.png" width="90" height="15" loading="lazy">
          </a>

          <p class="footer-text">
            We have everything you need to create a fresh and fashionable look this spring. Shop now and embrace the season in style!
          </p>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-tiktok"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title title">Contact Info</p>

            <address class="footer-text">
              61 Quai De La Tournelle 21855 <br>
              Paris, France
            </address>
          </li>

          <li>
            <a href="mailto:morakhaled@hotmail.com" class="email">info@hype.com</a>
          </li>

          <li>
            <a href="tel:+00 123 456 789" class="call">+33 728 571 433</a>
          </li>

        </ul>

        <div class="footer-list">
          <form action="persistant.php" method="post">
          <p class="footer-list-title title">Stay In Touch</p>

          <input type="email" name="email_address" placeholder="Your Email Address" required autocomplete="off"
            class="input-field">

          <button type="submit" class="btn btn-secondary">Subscribe</button>
        </form>


        </div>

      </div>

      <div class="footer-bottom">

        <div class="wrapper">
          <div class="link-wrapper">

          <!-- Change HREF When Logged In/Out -->
          <?php
        session_start();
        if(isset($_SESSION['loggedUser'])){
          echo '<a href="profile.php" class="footer-bottom-link">Account</a>';
      }
        else {
          echo '<a href="login.php" class="footer-bottom-link">Login</a>';
      }
        ?>
        <!-- PHP Code End -->

            <a href="#" class="footer-bottom-link">Our Team</a>
            <a href="#" class="footer-bottom-link">History</a>
            <a href="#" class="footer-bottom-link">Services</a>
            <a href="#" class="footer-bottom-link">Support</a>

          </div>

          <div class="link-wrapper">
            <a href="https://drive.google.com/file/d/1HjYuBGIXUJEe4oCyfdOTX0IKWlT2bebF/view?usp=sharing" target="_blank" class="footer-bottom-link">Terms & Conditions</a>

            <a href="https://drive.google.com/file/d/1xu2NKeyeusU58GhOxBOeJ_xS9A64OckI/view?usp=sharing" target="_blank" class="footer-bottom-link">Privacy Policy</a>
          </div>
        </div>

        <p class="copyright">
          <a href="https://www.instagram.com/morakhaledx" target="_blank" style="text-decoration: none;">Developed By Mora</a> &copy; 2023 Hype Inc. | All Rights Reserved
        </p>

      </div>

      <img src="./assets/images/footer-shape-1.png" width="245" height="165" loading="lazy" alt="shape"
        class="shape shape-1">

      <img src="./assets/images/footer-shape-2.png" width="128" height="316" loading="lazy" alt="shape"
        class="shape shape-2">

      <img src="./assets/images/footer-shape-3.png" width="346" height="92" loading="lazy" alt="shape"
        class="shape shape-3">

    </div>
  </footer>

<!-- Footer End! -->





  <!-- Scripts Linking -->
  <script src="./js/script.js"></script>

  <!-- Ion Icon Linking -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>