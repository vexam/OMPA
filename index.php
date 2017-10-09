<!DOCTYPE html>
<html>
<?php
include "include\head.php";
include "include\header.php";  

	$sql_category = "SELECT * from category";
	$result_category = $conn->query($sql_category);
	$num_rows_category = $result_category->num_rows ;
  
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
		<div class="row">
		  		<div class="col-md-8">
		  			<div class="content-box-large">	
						<h4>Products category</h4>
					</div>
		  		</div>
		  	</div> 
			<div class="row">
		  		<div class="col-md-4"> 
						<div class="content-box-large"> 
							<div class="panel-body"> 
								<ul class="rounded-list">	
									<?php
									for ($i=0 ; $i < 18 ; $i++ ) {
										$row_category = $result_category->fetch_assoc();
									?>
									<li><a href="category.php?category=<?php echo $row_category["cat_code"];?>">
									<?php echo $row_category["cat_code"];?> . <?php echo $row_category["cat_name"];?> 
									</a></li>
									<?php } ?>
								</ul> 	
								
							</div>
						</div>
				</div>
		  		<div class="col-md-4">  
				  		<div class="content-box-large"> 
							<div class="panel-body">
							<ul class="rounded-list">							
								 <?php
									for ($i=0 ; $i < 18 ; $i++ ) {
										$row_category = $result_category->fetch_assoc();
									?>
									<li><a href="category.php?category=<?php echo $row_category["cat_code"];?>">
									<?php echo $row_category["cat_code"];?> . <?php echo $row_category["cat_name"];?> 
									</a></li>
									<?php } ?>
							</ul>
							</div>
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