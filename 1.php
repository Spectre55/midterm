<?php 
include ('view/header.php'); 
require('model/database.php');
require('model/category_db.php');
require('model/product_db.php');

$Far_Tempss = $_POST['category_id'];


?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div id="main">
    <h1 class="top">Menu</h1>
  <form action="" method = "post" >
        <label>Category:</label>
        <select name="category_id">
        <?php foreach (get_winnersCountry() as $category ) : ?>
            <option value="<?php echo $category['ID']; ?>"> 
                <?php echo $category['Country'],' '; ?>
            </option>
        <?php endforeach; ?>
        </select>  
		<button type="submit" class="btn btn-warning">Submit</button>
		
    </form>
	
	<label>Winner:</label>	
<?php foreach (get_winners() as $product) : 
	if($Far_Tempss == $product['Country']){
		echo $product['FirstName'],' ',$product['LastName'];
	}
	?>
	<?php endforeach; ?>
	
	
	<br>
	<br>
	<br>
	<br>
	<br>
	
	
	<a href="index.php">Home</a>
	

	
   
</div>
<?php include 'view/footer.php'; ?>