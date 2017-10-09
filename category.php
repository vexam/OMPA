<!DOCTYPE html>
<html>
<?php  
include "include\head.php";
include "include\header.php";
 if(isset($_GET['category'])){
	$category_code= $_GET['category'];}
	$sql_all_prodect = "SELECT * from prodect WHERE `section` = $category_code ORDER BY `id` ASC ";
	$result_all_prodect = $conn->query($sql_all_prodect);  
	$sql_category_name = "SELECT * from category WHERE `cat_code` = $category_code";
	$result_category_name = $conn->query($sql_category_name);
	$row_category_name = $result_category_name->fetch_assoc(); 
	$category_name = $row_category_name['cat_name']; 
?>
<style>
	.photo{
		max-width:100%; 
		max-height:100%; 
	}
</style> 
	<div class="page-content">
    	<div class="row">
		<?php
		include "include\menu.php"; 
		?>
		<div class="col-md-10">
				<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title"><a href="index.php"> Category </a> > <?php echo $category_name; ?> </div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Link</th>
								<th>Browser</th>
								<th>Platform(s)</th>
								<th>Engine version</th>
								<th>CSS grade</th>
							</tr>
						</thead>
						<tbody>
							 
						<?php if ($result_all_prodect->num_rows > 0)
							{

								while( $row_all_prodect = $result_all_prodect->fetch_assoc() ) {   ?>
							<tr >
								<td><a href="prodect.php?prodect=<?php echo $row_all_prodect['code'];?>" >
									<i class="fa fa-picture-o" aria-hidden="true"></i>
									</a></td>
								<td><?php echo $row_all_prodect['code'];?></td>
								<td><a href="prodect.php?prodect=<?php echo $row_all_prodect['code'];?>" >
									<?php echo $row_all_prodect['DESCRIPTION'];?></a></td>
								<td><?php echo $row_all_prodect['NOTE'];?></td>
								<td class="center"><?php echo $row_all_prodect['UNIT'];?></td> 
							</tr>
							 
						 <?php }  
						  }else{
						  	  echo "0 results";
						  } ?>
						</tbody>
					</table>
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