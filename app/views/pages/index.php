<?php require APPROOT . '/views/inc/header.php';?>	
  <body class="home">
    <header class="primary-header container flex">
      <div class="header-inner-one flex">
        <div class="logo">
          LOGO
        </div>
        <button
          class="mobile-close-btn"
          data-visible="false"
          aria-controls="primary-navigation"
        >
          <i class="uil uil-times-circle"></i>
        </button>
        <nav>
          <ul
            id="primary-navigation"
            data-visible="false"
            class="primary-navigation flex"
          >
            <li>
              <a class="active fs-100 fs-montserrat bold-500" href="/index.html"
                >Home</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="/shop.html"
                >Shop</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="/about.html"
                >About Us</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="/blog.html"
                >Blog</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="/contactus.html"
                >Contact Us</a
              >
            </li>
            <li>
              <a class="fs-100 fs-montserrat bold-500" href="/cart.html"
                >Cart page</a
              >
            </li>
          </ul>
        </nav>
      </div>

      <div class="header-login flex">
        <p class="fs-100 fs-montserrat bold-500">login</p>
        <i class="uil uil-search"></i>
        <i
          id="cart-box"
          aria-controls="cart-icon"
          class="uil uil-shopping-bag"
        ></i>


        <div id="cart-icon" data-visible="false" class="cart-icon">
          <div class="shopping flex">
            <p>Shopping Basket</p>
            <i id="cross-btn" class="uil uil-times"></i>
          </div>
          <div class="cart bold-800 flex">
            <i class="uil uil-shopping-cart-alt"></i>
            <p>Cart Is Empty</p>


          </div>
        </div>
      </div>
      <div class="mobile-open-btn"><i class="uil uil-align-right"></i></div>
    </header>

    

    <main class="hero-section">
      <div>
        <h1 class="fs-200 fs-poppins">
          Beats Solo
          <span class="block lineheight fs-300 bold-900 big-wireless fs-poppins"
            >Wireless</span
          ><span
            class="text-white fs-900 uppercase lineheight-2 bold-bolder fs-poppins"
            >HeadPhone</span
          >
        </h1>
        <img src="<?= URLROOT;?>/img/image1.png" alt="" />
      </div>
      <div class="hero-inner flex">
        <div>
          <button class="large-btn bg-red text-white fs-poppins fs-50">
            Shop By Category
          </button>
        </div>
        <div class="hero-info">
          <h4 class="fs-montserrat">Description</h4>
          <p class="fs-montserrat">
            There are many variations passages of Lorem Ipsum available, but the
            majority have suffered alteration
          </p>
        </div>
      </div>
    </main>



    <section class="product-section">
      <div class="category bg-black grid">
        <div>
          <h3 class="text-white fs-50 fs-montserrat bold">
            Enjoy <span class="block fs-300 fs-poppins bold">With</span
            ><span
              class="earphone uppercase fs-400 fs-montserrat bold-900 lineheight"
              >Earphone</span
            >
          </h3>
          <button class="prdduct-btn large-btn text-white bg-red fs-montserrat">
            Browse
          </button>
        </div>
        <div class="product-img1">
          <img src="<?= URLROOT;?>/img/h.png" alt="" />
        </div>
      </div>
      <div class="category bg-yellow grid">
        <div>
          <h3 class="text-white fs-50 fs-montserrat bold">
            New <span class="block fs-300 fs-poppins bold">Wear</span
            ><span
              class="earphone uppercase fs-400 fs-montserrat bold-900 lineheight"
              >Gadget</span
            >
          </h3>
          <button
            class="prdduct-btn large-btn text-yellow bg-white fs-montserrat"
          >
            Browse
          </button>
        </div>
        <div class="product-img2">
          <img src="<?= URLROOT;?>/img/w.png" alt="" />
        </div>
      </div>
      <div class="category bg-red grid">
        <div>
          <h3 class="text-white fs-50 fs-montserrat bold">
            Trend <span class="block fs-300 fs-poppins bold">Devices</span
            ><span
              class="earphone uppercase fs-400 fs-poppins bold-900 lineheight"
              >Laptop</span
            >
          </h3>
          <button class="prdduct-btn large-btn text-red bg-white fs-poppins">
            Browse
          </button>
        </div>
        <div class="product-img3">
          <img src="<?= URLROOT;?>/img/Laptop.png" alt="" />
        </div>
      </div>
      <div class="category bg-gray grid">
        <div>
          <h3 class="text-black fs-50 fs-poppins bold">
            Best
            <span class="block fs-300 fs-poppins bold text-black">Gaming</span
            ><span
              class="earphone uppercase fs-400 fs-poppins bold-900 lineheight"
              >Console</span
            >
          </h3>
          <button class="prdduct-btn large-btn text-white bg-red fs-poppins">
            Browse
          </button>
        </div>
        <div class="product-img4">
          <img src="<?= URLROOT;?>/img/gam.png" alt="" />
        </div>
      </div>
      <div class="category bg-green grid">
        <div>
          <h3 class="text-white fs-50 fs-poppins bold">
            Play <span class="block fs-300 fs-poppins bold">Game</span
            ><span
              class="earphone uppercase fs-400 fs-poppins bold-900 lineheight"
              >Oculus</span
            >
          </h3>
          <button class="prdduct-btn large-btn text-green bg-white fs-poppins">
            Browse
          </button>
        </div>
        <div class="product-img5">
          <img src="<?= URLROOT;?>/img/man2.png" alt="" />
        </div>
      </div>
      <div class="category bg-blue grid">
        <div>
          <h3 class="text-white fs-50 fs-poppins bold">
            New <span class="block fs-300 fs-poppins bold">Amazon</span
            ><span
              class="earphone uppercase fs-400 fs-poppins bold-900 lineheight"
              >speaker</span
            >
          </h3>
          <button class="prdduct-btn large-btn text-blue bg-white fs-poppins">
            Browse
          </button>
        </div>
        <div class="product-img6">
          <img src="<?= URLROOT;?>/img/mus.png" alt="" />
        </div>
      </div>
    </section>


    <section class="service-section">
      <div class="service">
        <img src="<?= URLROOT;?>/img/free.svg" alt="" />
        <div class="service-info">
          <h3 class="fs-poppins fs-200">Free Shippng</h3>
          <p class="fs-montserrat fs-50">Free Shipping On All Order</p>
        </div>
      </div>
      <div class="service">
        <img src="<?= URLROOT;?>/img/sett.svg" alt="" />
        <div class="service-info">
          <h3 class="fs-poppins fs-200">Money Guarantee</h3>
          <p class="fs-montserrat fs-50">30 Day Money Back</p>
        </div>
      </div>
      <div class="service">
        <img src="<?= URLROOT;?>/img/supt.svg" alt="" />
        <div class="service-info">
          <h3 class="fs-poppins fs-200">Online Support 24/7</h3>
          <p class="fs-montserrat fs-50">Technical Support 24/7</p>
        </div>
      </div>
      <div class="service">
        <img src="<?= URLROOT;?>/img/pay.svg" alt="" />
        <div class="service-info">
          <h3 class="fs-poppins fs-200">Secure Payment</h3>
          <p class="fs-montserrat fs-50">All Cards Accepted</p>
        </div>
      </div>
    </section>


    <section class="feature-section bg-red">
      <div class="feature-one grid">
        <img src="<?= URLROOT;?>/img/p-1.png" alt="" />
        <p class="text-white uppercase">20% OFF</p>
        <p
          class="font-size lineheight fs-500 text-white fs-poppins bold-900 uppercase"
        >
          fine <span class="smile">smile</span>
        </p>
        <p class="text-white fs-poppins fs-50">15 Nov To & Dec</p>
      </div>
      <div class="feature-info">
        <h2 class="fs-200 text-white fs-poppins bold-500">Beats Solo Air</h2>
        <p class="fs-poppins fs-300 bold-800 text-white">Summer Sale</p>
        <p class="fs-montserrat text-white fs-50">
          Company that’s grown from 270 to 480 employees in the last 12 months.
        </p>
        <button class="prdduct-btn large-btn text-red bg-white fs-poppins">
          Shop
        </button>
      </div>
    </section>

    <section class="best-product container">
      <h2 class="letter-spacing bold-800 fs-poppins">Best Seller Products</h2>
      <p class="fs-montserrat fs-100">
        speakerThere are many variations passages
      </p>
    </section>

    <section class="best-Seller">
      <div class="product grid">
        <img src="<?= URLROOT;?>/img/p-2.jpg" alt="" />
        <p class="fs-poppins bold-500">White EliteBook Tablet 810</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
      </div>
      <div class="product grid">
        <img src="<?= URLROOT;?>/img/p-3.jpg" alt="" />
        <p class="fs-poppins bold-500">White EliteBook Tablet 810</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
      </div>
      <div class="product grid">
        <img src="<?= URLROOT;?>/img/p-4.jpg" alt="" />
        <p class="fs-poppins bold-500">Game Console Controller Cable</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
      </div>
      <div class="product grid">
        <img src="<?= URLROOT;?>/img/p-5.jpg" alt="" />
        <p class="fs-poppins bold-500">Rocky Mountain</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
      </div>
      <div class="product grid">
        <img src="<?= URLROOT;?>/img/p9.jpg" alt="" />
        <p class="fs-poppins bold-500">White EliteBook Tablet 810</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
      </div>
      <div class="product grid">
        <img src="<?= URLROOT;?>/img/p-7.jpg" alt="" />
        <p class="fs-poppins bold-500">Wireless Audio System Multiroom 360</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
      </div>
      <div class="product grid">
        <img src="<?= URLROOT;?>/img/p8.png" alt="" />
        <p class="fs-poppins bold-500">Wireless Audio System Multiroom 360</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <!-- ---------------------------- -->
        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
        <!-- ===================================== -->
      </div>
      <div class="product grid">
        <img src="<?= URLROOT;?>/img/p9.jpg" alt="" />
        <p class="fs-poppins bold-500">Smartwatch 2.0 LTE Wifi</p>
        <p class="fs-poppins bold-500">$995.00</p>

        <!-- ---------------------------- -->
        <div class="product-details grid bg-red">
          <i class="text-white uil uil-shopping-cart-alt"></i>
          <i class="text-white uil uil-heart-alt"></i>
        </div>
        <!-- ===================================== -->
      </div>
    </section>

    <!-- =========================================== -->
    <section class="feature-section bg-green">
      <div class="feature-green feature-one grid">
        <img src="<?= URLROOT;?>/img/p12.png" alt="" />
        <p class="text-white uppercase">20% OFF</p>
        <p
          class="font-size lineheight fs-500 text-white fs-poppins bold-900 uppercase"
        >
          HAPPY <span class="smile">HOURSE</span>
        </p>
        <p class="text-white fs-poppins fs-50">15 Nov To & Dec</p>
      </div>
      <div class="feature-info">
        <h2 class="fs-200 text-white fs-poppins bold-500">Beats Solo Air</h2>
        <p class="fs-poppins fs-300 bold-800 text-white">Summer Sale</p>
        <p class="fs-montserrat text-white fs-50">
          Company that’s grown from 270 to 480 employees in the last 12 months.
        </p>
        <button class="prdduct-btn large-btn text-green bg-white fs-poppins">
          Shop
        </button>
      </div>
    </section>
    <!-- =========================================== -->

    <!-- =================Heading recent News================================ -->
    <section class="best-product container">
      <h2 class="letter-spacing bold-800 fs-poppins">Recent News</h2>
      <p class="fs-montserrat fs-100">There are many variations passages</p>
    </section>
    <!-- ============Recent News=========================== -->

    <section class="recent-news grid">
      <div class="news grid">
        <img src="<?= URLROOT;?>/img/news-1.png" alt="" />
        <div class="fs-montserrat fs-100 flex padding-inline">
          <p>Ocutober 5, 2022</p>
          <p>by Ecommercestore3/ Edit</p>
        </div>
        <h2 class="fs-poppins padding-inline fs-200 blod-600">
          How to choose perfect gadgets
        </h2>
        <p class="fs-montserrat padding-inline fs-100">
          When, while the lovely valley teems with vapour around me, and the
          meridian sun strikes the upper s ...
        </p>
      </div>

      <div class="news grid">
        <img src="<?= URLROOT;?>/img/news-2.png" alt="" />
        <div class="fs-montserrat fs-100 flex padding-inline">
          <p>Ocutober 5, 2022</p>
          <p>by Ecommercestore3/ Edit</p>
        </div>
        <h2 class="fs-poppins padding-inline fs-200 blod-600">
          How to choose perfect gadgets
        </h2>
        <p class="fs-montserrat padding-inline fs-100">
          When, while the lovely valley teems with vapour around me, and the
          meridian sun strikes the upper s ...
        </p>
      </div>

      <div class="news grid">
        <img src="<?= URLROOT;?>/img/news-1.png" alt="" />
        <div class="post-date fs-montserrat fs-100 flex padding-inline">
          <p>Ocutober 5, 2022</p>
          <p>by Ecommercestore3/ Edit</p>
        </div>
        <h2 class="fs-poppins padding-inline fs-200 blod-600">
          How to choose perfect gadgets
        </h2>
        <p class="fs-montserrat padding-inline fs-100">
          When, while the lovely valley teems with vapour around me, and the
          meridian sun strikes the upper s ...
        </p>
      </div>
    </section>

    <footer>
      <!-- =============Brands================= -->
      <section class="brands grid">
        <div>
          <img src="<?= URLROOT;?>/img/br-1.png" alt="" />
        </div>
        <div>
          <img src="<?= URLROOT;?>/img/br-2.png" alt="" />
        </div>
        <div>
          <img src="<?= URLROOT;?>/img/br-3.png" alt="" />
        </div>
        <div>
          <img src="<?= URLROOT;?>/img/br-4.png" alt="" />
        </div>
        <div>
          <img src="<?= URLROOT;?>/img/br-5.png" alt="" />
        </div>
      </section>

      <!-- =============Footer Menu=================== -->
      <section class="footer grid">
        <div class="footer-logo grid">
          <img src="<?= URLROOT;?>/img/logo.png" alt="" />
          <p class="fs-montserrat fs-200">
            There are many variations passages of Lorem Ipsum available, but the
            majority have
          </p>
          <div class="social-media flex">
            <i class="uil uil-facebook-f"></i>
            <i class="uil uil-instagram"></i>
            <i class="uil uil-linkedin"></i>
            <i class="uil uil-twitter"></i>
          </div>
        </div>

        <div class="footer-menu grid">
          <h3 class="fs-poppins fs-200 bold-800">Quick Links</h3>
          <ul>
            <li>
              <a class="fs-montserrat text-black fs-200" href="#">Home</a>
            </li>
            <li>
              <a class="fs-montserrat text-black fs-200" href="#">About</a>
            </li>
            <li>
              <a class="fs-montserrat text-black fs-200" href="#">Shop</a>
            </li>
            <li>
              <a class="fs-montserrat text-black fs-200" href="#">Contact</a>
            </li>
          </ul>
        </div>

        <div class="contact grid">
          <h3 class="fs-poppins fs-200 bold-800">Contact</h3>
          <p class="fs-montserrat">
            +212 7 07 07 07 07 Lorem ipsum dolor sit amet.
          </p>
        </div>

        <div class="emails grid">
          <h3 class="fs-poppins fs-200 bold-800">Subscribe To Our Email</h3>
          <p class="updates fs-poppins fs-300 bold-800">
            For Latest News & Updates
          </p>
          <div class="inputField flex bg-gray">
            <input
              type="email"
              placeholder="Enter Your Email"
              class="fs-montserrat bg-gray"
            />
            <button class="bg-red text-white fs-poppins fs-50">
              Subscribe
            </button>
          </div>
        </div>
      </section>

      <section class="copyRight">
        <p class="c-font fs-montserrat fs-200">
          © 2022 Electro Maroc. All rights reserved.
        </p>
        <p class="fs-montserrat fs-100 text-align p-top">
          Ouafidi Oussama
        </p>
      </section>
    </footer>
  </body>
</html>
