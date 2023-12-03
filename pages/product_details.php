<?php
// print_r($_GET); exit;
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

$connection = db_connect($db_host,$db_user,$db_password,$db_name);
$checkProductId = array(
    "column" => "id",
    "operator" => "=",
    "value" => $productId
);
$where[] = $checkProductId;
$products = db_select($connection, "products", "*", $where);

}
?>
    <div class="details-container">
   <div class="details-cover flex cover">
   <?php
                if(count($products) > 0){
                    foreach($products as $product){?>
                    <div class="details-img">
                        <img class="details-image" src="<?= $product['image'] ?>">
                    </div>
                    <div class="details-content">
                        <div>
                        <h1><?= $product['title'] ?></h1>
                        <p class="flavor"><?= $product['description'] ?></p>
                        <h2>Flavours :</h2>
                        <p class="flavor"><?= $product['Flavours'] ?></p>
                        <p class="price price-size">Price : <?= $product['price'] ?>$</p>
                        </div>
                    </div>
                  <?php  }
                }
            ?>
   </div>
</div>
<button id="scrollToTopBtn" title="Go to top">&#8593;</button>
