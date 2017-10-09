<?php
require_once("include\dbcontroller.php");
require_once("include\pagination.class.php");
$db_handle = new DBController();
$perPage = new PerPage();

$sql = "SELECT * from prodect WHERE `section` = '00' ";
$paginationlink = "getresult.php?page=";	
$pagination_setting = $_GET["pagination_setting"];
				
$page = 1;
if(!empty($_GET["page"])) {
$page = $_GET["page"];
}

$start = ($page-1)*$perPage->perpage;
if($start < 0) $start = 0;

$query =  $sql . " LIMIT " . $start . "," . $perPage->perpage; 
$faq = $db_handle->runQuery($query);

if(empty($_GET["rowcount"])) {
$_GET["rowcount"] = $db_handle->numRows($sql);
}

if($pagination_setting == "prev-next") {
	$perpageresult = $perPage->getPrevNext($_GET["rowcount"], $paginationlink,$pagination_setting);	
} else {
	$perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink,$pagination_setting);	
}


$output = '<table class="table table-striped">
 <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>   
    <tbody>
';
foreach($faq as $k=>$v) {
 $output .= '<tr>
 	<td>' . $_GET["rowcount"] .' </td> <td>'. $faq[$k]["code"] . '</td>';
 $output .= '<td>' . $faq[$k]["DESCRIPTION"] . '</td></tr>';
}
if(!empty($perpageresult)) {
$output .= '</table><div id="pagination">' . $perpageresult . '</div>';
}
print $output;
?>
