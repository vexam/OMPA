<!DOCTYPE html>
<html>
<?php
include "include\head.php";
include "include\header.php";
if(isset($_GET['prodect'])){
	$prodect=$_GET['prodect'];
	$item = substr($prodect, 2);
	$category_code=substr($prodect, 0, 2);}

	$sql_category_name = "SELECT * from category WHERE `cat_code` = $category_code";
	$result_category_name = $conn->query($sql_category_name);
	$row_category_name = $result_category_name->fetch_assoc(); 
	$category_name = $row_category_name['cat_name']; 
	$sql_this_prodect = "SELECT * from prodect WHERE `code` = '$prodect' ";
	$result_this_prodect = $conn->query($sql_this_prodect); 
	$row_this_prodect= $result_this_prodect->fetch_assoc();  
?>
<style>
	.photo{
		max-width:100%; 
		max-height:100%; 
	} 
	.photoa { 
	position: relative; 
	display: inline-block;
}

.photoa::before { 
	content: "";
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0; 
	opacity: 0;
	box-shadow: 0 0 100px 0 #000 inset;
	transition: opacity .3s ease-in-out;
	background: rgba(0,0,0,.5) center no-repeat url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHdpZHRoPSIxMDAiIGhlaWdodD0iMTAwIiB2aWV3Qm94PSIwIDAgNzY4IDc2OCIgZmlsbD0iI2ZmZmZmZiI+CjxwYXRoIGQ9Ik0zMjAgMzJxNTguNSAwIDExMS44NzUgMjIuODc1dDkxLjg3NSA2MS4zNzUgNjEuMzc1IDkxLjg3NSAyMi44NzUgMTExLjg3NXEwIDUwLjI1LTE2LjM3NSA5Ni4yNXQtNDYuNjI1IDgzLjVsMTgxLjc1IDE4MS41cTkuMjUgOS4yNSA5LjI1IDIyLjc1IDAgMTMuNzUtOS4xMjUgMjIuODc1dC0yMi44NzUgOS4xMjVxLTEzLjUgMC0yMi43NS05LjI1bC0xODEuNS0xODEuNzVxLTM3LjUgMzAuMjUtODMuNSA0Ni42MjV0LTk2LjI1IDE2LjM3NXEtNTguNSAwLTExMS44NzUtMjIuODc1dC05MS44NzUtNjEuMzc1LTYxLjM3NS05MS44NzUtMjIuODc1LTExMS44NzUgMjIuODc1LTExMS44NzUgNjEuMzc1LTkxLjg3NSA5MS44NzUtNjEuMzc1IDExMS44NzUtMjIuODc1ek0zMjAgOTZxLTQ1LjUgMC04NyAxNy43NXQtNzEuNSA0Ny43NS00Ny43NSA3MS41LTE3Ljc1IDg3IDE3Ljc1IDg3IDQ3Ljc1IDcxLjUgNzEuNSA0Ny43NSA4NyAxNy43NSA4Ny0xNy43NSA3MS41LTQ3Ljc1IDQ3Ljc1LTcxLjUgMTcuNzUtODctMTcuNzUtODctNDcuNzUtNzEuNS03MS41LTQ3Ljc1LTg3LTE3Ljc1ek0zMjAgMTkycTEzLjI1IDAgMjIuNjI1IDkuMzc1dDkuMzc1IDIyLjYyNXY2NGg2NHExMy4yNSAwIDIyLjYyNSA5LjM3NXQ5LjM3NSAyMi42MjUtOS4zNzUgMjIuNjI1LTIyLjYyNSA5LjM3NWgtNjR2NjRxMCAxMy4yNS05LjM3NSAyMi42MjV0LTIyLjYyNSA5LjM3NS0yMi42MjUtOS4zNzUtOS4zNzUtMjIuNjI1di02NGgtNjRxLTEzLjI1IDAtMjIuNjI1LTkuMzc1dC05LjM3NS0yMi42MjUgOS4zNzUtMjIuNjI1IDIyLjYyNS05LjM3NWg2NHYtNjRxMC0xMy4yNSA5LjM3NS0yMi42MjV0MjIuNjI1LTkuMzc1eiIvPgo8L3N2Zz4=);
}
.photoa:hover::before,
.photoa:focus::before {
	opacity: 1;
}


/* BLAH BLAH */   

</style>
  <body>
	<div class="page-content">
    	<div class="row">
		<?php
		include "include\menu.php"; 
		?>
		<div class="col-md-10">
		  	<div class="row">
		  		<div class="col-md-4">
		  			<div class="content-box-large"> 
		  				<div class="panel-body">
		  				<a  class="photoa" href="photo.php?prodect=<?php echo $prodect;?>">
		  					 <img class="photo" src="photo/<?php echo $category_code;?>/<?php echo $prodect;?>.jpg">
		  					</a> 
		  					<div class="cn">
						   <div class="inner">
						      <a href="#zoom"><i class="icon-zoom-in large"></i></a>
						      <a href="#download"><i class="icon-cloud-download large"></i></a>
						      <a href="#comment"><i class="icon-comment large"></i></a>  
						   </div>
						</div>
		  				</div>
		  			</div>
		  		</div>

		  		<div class="col-md-6">
		  			<div class="row">
		  				<div class="col-md-12"> 
				  			<div class="content-box-large"> 
					  			<h3><?php echo $row_this_prodect['DESCRIPTION']; ?></h3> 
							</div>
		  				</div>
		  			</div>
		  			<div class="row">
		  				<div class="col-md-12">
		  					<div class="content-box-header">
			  					<div class="panel-title">Prodect Details</div> 
				  			</div>
				  			<div class="content-box-large box-with-header">
					  				<strong>CODE NO : </strong><?php echo $prodect;?>
					  			<br><strong>SECTION : </strong><?php echo $category_code." ".$category_name;?>
					  			<br><strong>UNIT    : </strong><?php echo $row_this_prodect['UNIT']; ?>  
								<br /><br />
							</div>
		  				</div>
		  			</div>
		  		</div>
		  	</div>

		  	<div class="row">
		  		<div class="col-md-12 panel-warning">
		  			<div class="content-box-header panel-heading">
	  					<div class="panel-title ">Prodect Note</div> 
		  			</div>
		  			<div class="content-box-large box-with-header">
			  			 <?php echo $row_this_prodect['NOTE']; ?>
			  			 
						<br /><br />
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