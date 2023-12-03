<?php
$connection = db_connect($db_host,$db_user,$db_password,$db_name);
// $products = db_select($connection,"products");

// $sql = 'select * from products where category = 1 limit 4';
// $result = mysqli_query($connection,$sql);
$checkProductCategory = array(
  "column" => "category",
  "operator" => "=",
  "value" => "1"
);
$where[] = $checkProductCategory;
$products = db_select($connection, "products", "*", $where);
//select all
// $sql_selectAll = 'select * from products where category = 1';
// $result_selectAll = mysqli_query($connection,$sql_selectAll);

?>

<div class="container">
    <div class="breadImagecover-content">
        <h1 class="cover-header">Bread menu</h1>
        <p class="cover-paragraph">Our bakery and handcrafted pastries are of the highest 
            quality. Come and enjoy our organic bakery items.</p>
    </div>
    <div class="breadImage-cover">
        <img src="assets/images/breadmenucover.png">
    </div>
  </div>

  <section class="menuday-container cover">
    <div>
        <h1>Menu of the day</h1>
        <div class="flex">
            <?php
                
             $count = 0;
             if(count($products) > 0){
                foreach($products as $productDay){  ?>
                    
                         <div class="menuday-card flex">
                            <div class="menudaycard-content">
                            <div class="menudaycard-img">
                                <img class="menuday-img" src="<?= $productDay['image'] ?>">
                            </div>
                            <div class="menudaycard-title">
                                <h4><?= $productDay['title'] ?></h4>
                                <p><?= $productDay['price'] ?>$</p>
                            </div>
                            <a href="product_details?id=<?= $productDay['id'] ?>" class="menu-link">
                            <div class="menudaycard-icon">
                            <i class='bx bx-right-arrow-alt'></i>
                            </div>
                            </a>
                            </div>
                        </div>
                    
                        <?php
                   $count ++;
                   if($count == 4){
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
              if(count($products) > 0){
                foreach($products as $product){ ?>
                <div class="card">
                <a href="product_details?id=<?= $product['id'] ?>" class="menu-link">
                <img class="menu-image" src="<?= $product['image'] ?>">
                <h1><?= $product['title'] ?></h1>
                <p class="description"><?= $product['description'] ?></p>
                <p class="price"><?= $product['price'] ?>$</p> 
                </a>
                </div>
               
        
        <?php  }
             }
         ?>
      </div>
    </div>
  </section>
  <button id="scrollToTopBtn" title="Go to top">&#8593;</button>
