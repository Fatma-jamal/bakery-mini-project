<?php

$connection = db_connect($db_host,$db_user,$db_password,$db_name);
$products = db_select($connection,"products");
// print_r($products); exit;


?>
<section class="menuday-container cover">
    <div>
        <h1>View all products</h1>
        <div class="flex">
            <?php
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
                            <button class="deletebtn-outside" onclick="document.getElementById('id01').style.display='block'";>Delete</button>

                            <div id="id01" class="modal">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
                            <form class="modal-content" action="/action_page.php">
                                <div class="container-btn">
                                <h3>Delete product</h3>
                                <p>Are you sure you want to delete this product?</p>
                                
                                <div class="clearfix flex">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                    
                                    <a href="deleteproduct?id=<?= $product['id'] ?>" class="menu-link">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="deletebtn">Delete</button>
                                    </a>
                                </div>
                                </div>
                            </form>
                            </div>
                            </div>
                        </div>
                  <?php

                    }
                }
            ?>
           
        </div>
    </div>
  </section>
  <button id="scrollToTopBtn" title="Go to top">&#8593;</button>
