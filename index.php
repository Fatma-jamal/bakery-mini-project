<?php

// Define a constant
define('ROOT_PATH', '/newbakery1/');
define('BASE_PATH', __DIR__);

require_once('inc/app.php');

$pageName = myAppRequestRoute();
// echo $pageName;

// ===================================================

// print_r($_SESSION); exit;

if ($_SERVER['REQUEST_METHOD'] === "POST"){

    if(isset($_POST['form']) && ($_POST['form'] === "login")){
        $connection = db_connect($db_host,$db_user,$db_password,$db_name);


        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $checkUsername = array(
        "column" => "username",
        "operator" => "=",
        "value" => $username
        );
        $checkPassword = array(
            "column" => "password",
            "operator" => "=",
            "value" => $password
        );
        $where = array();
        $where[] = $checkPassword;
        $where[] = $checkUsername;
        $user = db_select($connection, "users", "*", $where);

        if($user > 0){
            $_SESSION['isSignedIn'] = true;
            // $_SESSION['username'] = $username;
            header('Location: '.ROOT_PATH);
            // exit;
        }  
        else{
            if ($username == "" || $password == ""){
                $_SESSION['signedInError'] = "Some fields are empty.";
            }    
        }
    } // end of login form

    //
    if(isset($_POST['form']) && ($_POST['form'] === "insertproduct")){
        // Assuming you have the necessary database connection variables
        $connection = db_connect($db_host, $db_user, $db_password, $db_name);

        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $description = isset($_POST['description']) ? $_POST['description'] : '';
        $price = isset($_POST['price']) ? $_POST['price'] : '';
        $category = isset($_POST['category']) ? $_POST['category'] : 0;
        $flavors = isset($_POST['flavors']) ? $_POST['flavors'] : '';

        // Handle the uploaded image file
        $imageName = isset($_FILES['image']['name']) ? $_FILES['image']['name'] : '';
        $imageTmpName = isset($_FILES['image']['tmp_name']) ? $_FILES['image']['tmp_name'] : '';
        $imagePath = 'uploads/' . $imageName; // Assuming you have an 'uploads' directory

        if (!is_dir('uploads')) {
            mkdir('uploads');
        }

        // Move the uploaded image to the desired location
        if (move_uploaded_file($imageTmpName, $imagePath)) {
            $imageFileName = basename($imageName);
            $imageFilePath = '/newBakery1/assets/images/'.$imageFileName;
            $query = "INSERT INTO products (title, description, price, category, Flavours, image) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $connection->prepare($query);
            $stmt->bind_param("ssdiss", $title, $description, $price, $category, $flavors, $imageFilePath);
            $stmt->execute();

            // if ($stmt->affected_rows > 0) {
            //     echo "Product added successfully.";
            // } else {
            //     echo "Failed to add product.";
            // }
            if($category == '1'){
                header('Location: bread');
            }
            elseif ($category == '0'){
                header('Location: sweet');
            }
            else {
                // Invalid category value
                header('Location: insertproduct');
              }
            $stmt->close();
            // header('Location: ');
        } else {
            echo "Failed to move the uploaded file.";
        }

        $connection->close();
    }
    

} // end of post forms



// =====================================================

$pageName = explode("?",$pageName)[0];
// Construct the file path
$filePath = 'pages/' . $pageName . '.php';

if ($pageName == "signout") {
    myAppSignout();
    // Redirect to /
    header("Location: " . ROOT_PATH);
    exit;
}
if($pageName === "deleteproduct"){
    if (isset($_GET['id'])) {
        $productId = $_GET['id'];
        $connection = db_connect($db_host,$db_user,$db_password,$db_name);
        $checkProductId = array(
            "column" => "id",
            "operator" => "=",
            "value" => $productId
    );                                          
    // $where = array();
    $where[] = $checkProductId;
    $products = db_delete($connection, "products", $where);
    
    //    $sql = "delete FROM products WHERE id=".$productId;
    //    mysqli_query($connection,$sql);
       header('Location: '.ROOT_PATH.'selectfordelete');
    
    //    mysqli_query($connection,$sql);
    }
}
// Check if the file exists
if (file_exists($filePath)) {
    require_once('layout/header.php');
    // Include or require the file
    require_once($filePath);
    require_once('layout/footer.php');
} else {
    require_once('layout/header.php');
    // File not found, handle the error
    require_once('pages/notfound.php');
    require_once('layout/footer.php');
}