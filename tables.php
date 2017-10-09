<!DOCTYPE html>
<html>
<?php 
include "include\head.php";
include "include\header.php";
?>

    <div class="page-content">
    	<div class="row">
		  <?php
		include "include\menu.php"; 
		?>
		  <div class="col-md-10">
 
  			<div class="content-box-large">
  				<div class="panel-heading">
					<div class="panel-title">Bootstrap dataTables</div>
				</div>
  				<div class="panel-body">
  					<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
						<thead>
							<tr>
								<th>Rendering engine</th>
								<th>Browser</th>
								<th>Platform(s)</th>
								<th>Engine version</th>
								<th>CSS grade</th>
							</tr>
						</thead>
						<tbody>
							<tr >
								<td>Trident</td>
								<td>Internet
									 Explorer 4.0</td>
								<td>Win 95+</td>
								<td class="center"> 4</td>
								<td class="center">X</td>
							</tr>
							<tr >
								<td>Trident</td>
								<td>Internet
									ddddd</td>
								<td>Win 95+</td>
								<td class="center">5</td>
								<td class="center">C</td>
							</tr>
							<tr >
								<td>Trident</td>
								<td>Internet
									 Explorer 5.5</td>
								<td>Win 95+</td>
								<td class="center">5.5</td>
								<td class="center">A</td>
							</tr>
							<tr >
								<td>Trident</td>
								<td>Internet
									 Explorer 6</td>
								<td>Win 98+</td>
								<td class="center">6</td>
								<td class="center">A</td>
							</tr>
							<tr >
								<td>Trident</td>
								<td>Internet Explorer 7</td>
								<td>Win XP SP2+</td>
								<td class="center">7</td>
								<td class="center">A</td>
							</tr>
							<tr >
								<td>Trident</td>
								<td>AOL browser (AOL desktop)</td>
								<td>Win XP</td>
								<td class="center">6</td>
								<td class="center">A</td>
							</tr>
						 
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