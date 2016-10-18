<?php
require('./model/database.php');
require('./model/product_db.php');
require('./model/category_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'list_products';
}

if ($action == 'list_products') {

} else if ($action == 'add_product') {

    $code = $_POST['code'];

    if (empty($code)) {
        $error = "Invalid product data. Check all fields and try again.";
       include('./errors/error.php');
    } else {
        add_product($code);

        // Display the Product List page for the current category
        header("Location: .?category_id=$category_id");
    }
}
 else if ($action == 'add_year') {
    //$category_id = $_POST['category_id'];  
    $nameCity = $_POST['code'];
	$cithyYear = $_POST['year'];

	
    // Validate the inputs
    if (empty($nameCity ||$cithyYear )) {
        $error = "Invalid product data. Check all fields and try again.";
       include('./errors/error.php');
    } else {
        add_year($nameCity,$cithyYear);

        // Display the Product List page for the current category
        header("Location: .?category_id=$category_id");
    }

}
else if($action == list_categories){
	$categories = get_categories();
	include('category_list.php');
}

?>

