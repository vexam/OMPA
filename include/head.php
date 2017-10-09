 <?php
$servername = "localhost";
$username = "root";
$password = "ultra@123";
$dbname = "db_ompa";
$page_name = strtoupper(ucfirst(pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME)));
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


		// $row_category = $result_category->fetch_assoc();
		// while($row_category = $result_category->fetch_assoc()) {
		// $row_category["id"]  $row_category["cat_code"]  $row_category["cat_name"]
		// } .


?> 
  <head>
    <title>OMPA v0.1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->

    <link href="css/jquery-ui.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

    
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet"> 
    <link href="css/stats.css" rel="stylesheet"> 
    <link href="vendors/font-awesome/css/font-awesome.css" rel="stylesheet"> 

  </head>
     
 