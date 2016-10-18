<?php 
include ('view/header.php'); 
require('model/database.php');
require('model/category_db.php');
require('model/product_db.php');


?>


<h1>Add Year</h1>
    <form action="ggg.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_product" />


        <label>Country:</label>
        <input type="input" name="code" />
        <br/>


        <label>&nbsp;</label>
        <input type="submit" value="Add Product" />
        <br />  <br />
		
    </form>















<a href="index.php">Home</a>