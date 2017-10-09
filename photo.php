
<!DOCTYPE html>
<html>
<?php
include "include\head.php";
include "include\header.php";
 // test only
if(isset($_GET['prodect'])){
	$prodect=$_GET['prodect'];
	$item = substr($prodect, 2);
	$category_code=substr($prodect, 0, 2);
	$sql_category_name = "SELECT * from category WHERE `cat_code` = $category_code";
	$result_category_name = $conn->query($sql_category_name);
	$row_category_name = $result_category_name->fetch_assoc();
	$category_name = $row_category_name['cat_name'];
	$sql_this_prodect = "SELECT * from prodect WHERE `code` = '$prodect' ";
	$result_this_prodect = $conn->query($sql_this_prodect);
	$row_this_prodect= $result_this_prodect->fetch_assoc();
}else{
	header('Location: index.php');
	exit;
}
?>
<style>
	.photo{
		max-width:100%;
		max-height:100%;
	}

</style>
  <body>
	<div class="page-content">
		<div class="row">
		<?php
		include "include\menu.php";
		?>
		  		<div class="col-md-10">
		  			 <div class="content-box-large">
					  			<h3><?php echo $row_this_prodect['DESCRIPTION']; ?></h3>
					</div>
		  		</div>
		<div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-12">
		  			<div class="content-box-large">
		  				<div class="panel-body">
		  				<a  href="prodect.php?prodect=<?php echo $prodect;?>">
		  					 <img id="zoom_01" data-zoom-image="photo/<?php echo $category_code;?>/<?php echo $prodect;?>.jpg"
		  					 class="photo" src="photo/<?php echo $category_code;?>/<?php echo $prodect;?>.jpg">
		  					</a>
		  				</div>




		  			</div>
		  		</div>
		  	</div>
		  </div>
		</div>
    </div>

		<?php
		include "include/footer.php";
		?>
  </body>
</html>
