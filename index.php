<?php 
include ('view/header.php'); 
/* require('model/database.php');
require('model/product_db.php'); */
 require('model/database.php'); 
require('model/category_db.php');




 
?>

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">

function doSomething() {
    $.get("1.php");
    return false;
}
</script>


<div id="main">
<!-- menu hyperlink-->

    <h1 class="top">Menu</h1>
	
<ol>
  <li><a href="1.php">Display all winners in an Olympic country</a></li>
  

	
  <li><a href="2.php">Display all winners in an Olympic year</a></li>

  
  
  <li><a href="3.php">Add a new country</a></li>
  
  
   <li><a href="4.php">Add a new Olympic year (example: add 2016 in Rio)</a></li>
  
  
  
  

</ol>
	
	
</div>	
	
	


	
	
