<?php 
include ('view/header.php'); 
require('model/database.php');
require('model/category_db.php');
require('model/product_db.php');


?>
<h1>Add Year</h1>
    <form action="ggg.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_year" />


        <label>City:</label>
        <input type="input" name="code" />
        <br />
		
		
		<label>Year:</label>
        <input type="input" name="year" />
        <br />


        <label>&nbsp;</label>
        <input type="submit" value="Add" />
        <br />  <br />
    </form>

	
	
	
	<a href="index.php">Home</a>