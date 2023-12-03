<?php

$connection = db_connect($db_host,$db_user,$db_password,$db_name);
$products = db_select($connection,"products");
// print_r($products); exit;
$testimonials = db_select($connection,"customers_testimonial");


?>

  <div class="container">
    <div class="cover-content">
        <h1 class="cover-header">Enjoy organic &<br>
            fresh bakery</h1>
        <p class="cover-paragraph">Our bakery and handcrafted pastries are of the highest 
            quality. Come and enjoy our organic bakery items.</p>
    </div>
    <div class="cover-image">
        <img src="assets/images/bread.webp">
    </div>
  </div>
  <section class="section-about cover">
    <div class="section-head">
      <h1>About our food</h1>
      <p>Our bakery and handcrafted pastries are of the highest quality. Come and enjoy our organic bakery items.</p>
    </div>
    <div class="section-category">
      <div class="flex">
        <div class="content-category">
        <div>
            <img src="assets/images/yummy.svg">
            <h1>Super yummy</h1>
        </div>
        <div>
            <img src="assets/images/high-quality.svg">
            <h1>No preservatives</h1>
        </div>
        </div>
        <div>
          <img class="organicBread" src="assets/images/organicBread.png">
        </div>
        <div class="content-category">
          <div>
            <img src="assets/images/frech-product.svg">
            <h1>Fresh product</h1>
          </div>
          <div>
            <img src="assets/images/organic.svg">
            <h1>100% Organic</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="menuday-container cover">
    <div>
        <h1>Menu of the day</h1>
        <div class="flex">
            <?php
            $count = 0;
                if(count($products) > 0){
                   foreach($products as $product){
                         ?>
                         <div class="menuday-card flex">
                            <div class="menudaycard-content">
                            <div class="menudaycard-img">
                                <img class="menuday-img" src="<?= $product['image'] ?>">
                            </div>
                            <div class="menudaycard-title">
                                <h4><?= $product['title'] ?></h4>
                                <p><?= $product['price'] ?>$</p>
                            </div>
                            <a href="product_details?id=<?= $product['id'] ?>" class="menu-link">
                            <div class="menudaycard-icon">
                            <i class='bx bx-right-arrow-alt'></i>
                            </div>
                            </a>
                            </div>
                        </div>
                  <?php
                   $count ++;
                   if($count == 6){
                    break;
                   }

                    }
                }
            ?>
           
        </div>
    </div>
  </section>

  <section class="section-menu cover">
    <div class="section-head">
      <h1>Some products</h1>
      <p>Our bakery and handcrafted pastries are of the highest quality. Come and enjoy our organic bakery items.</p>
    </div>
    <div>
      <div class="flex">
      <?php
                 $count = 0;
                 if(count($products) > 0){
                    foreach($products as $product){ ?>
                        <div class="card">
                        <a href="product_details?id=<?= $product['id'] ?>" class="menu-link">
                        <img class="menu-image" src="<?= $product['image'] ?>">
                        <h1><?= $product['title'] ?></h1>
                        <p class="description"><?= $product['description'] ?></p>
                        </a>
                        </div>
                        <?php
                   $count ++;
                   if($count == 6){
                    break;
                   }

                    }
                }
            ?>
      </div>
    </div>
  </section>
  <div class="section-product cover">
    <div class="flex section-product-space">
      <div class="product-header">
        <h1>What we provide in our product ?</h1>
      </div>
      <div class="product-content">
        <div>
          <img src="assets/images/super-yummy.svg">
          <h2>Super yummy</h2>
          <p>Indulge in a world of irresistible flavors and scrumptious delights that will transport your taste buds 
            to a realm of pure culinary bliss, leaving you craving for more with every delectable bite.</p>
        </div>
        <div>
          <img src="assets/images/high-quality2.svg">
          <h2>No preservatives</h2>
          <p>Our baked goods are crafted with care, using only fresh, 
            natural ingredients, ensuring a pure and wholesome experience that's free from artificial additives.</p>
        </div>
      </div>
      <div class="product-content pc-space">
        <div>
          <img src="assets/images/frech-product2.svg">
          <h2>Fresh product</h2>
          <p>Our bakery takes pride in delivering freshly baked goods straight from the oven to your plate, ensuring 
            exceptional taste and quality that captures the essence of just-made deliciousness.</p>
        </div>
        <div>
          <img src="assets/images/organic2.svg">
          <h2>100% Organic</h2>
          <p>Our bakery is committed to using only the finest organic ingredients, guaranteeing that each bite of our 
            delectable creations is not only a delight to the senses but also a wholesome choice</p>
        </div>
      </div>
    </div>
  </div>

  <section class="section-testimonial cover">
      <div>
      <h1 class="testimonial-head">Customer testimonial</h1>
    </div>
    <div class="flex testimonial-cards-space">
    <?php
             $count = 0;
             if(count($testimonials) > 0){
                foreach($testimonials as $testimonial){ ?>
                    <div class="testimonial-card">
                    <div>
                    <img class="prof3" src="<?= $testimonial['image'] ?>">
                    <p>"<?= $testimonial['testimonial'] ?>"</p>
                    <h1><?= $testimonial['customer_name'] ?></h1>
                    </div>
                    </div>
                    <?php
                   $count ++;
                   if($count == 3){
                    break;
                   }

                    }
                }
            ?>
    </div>
  </section>

  <button id="scrollToTopBtn" title="Go to top">&#8593;</button>

