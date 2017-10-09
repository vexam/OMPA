<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" id="font-awesome-style-css" href="css/bootstrap.css" type="text/css" media="all">
<script type="text/javascript" charset="utf8" src="js/jquery.js"></script>
</head>
<body> 
 <link rel="stylesheet" type="text/css" href="style.css">
<?php

require ('include/paginator.php');

$host = 'localhost';
$user = 'root';
$pass = 'ultra@123';
$db = 'db_ompa';

$mysqli = new mysqli($host,$user,$pass,$db); 

//DO NOT limit this query with LIMIT keyword, or...things will break!
$query = "SELECT * from prodect ";

//these variables are passed via URL
$limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 5; //movies per page
$page = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1; //starting page
$links = 5;

$paginator = new Paginator( $mysqli, $query ); //__constructor is called
$results = $paginator->getData( $limit, $page );

//print_r($results);die; $results is an object, $result->data is an array

//print_r($results->data);die; //array

echo $paginator->createLinks( $links, 'pagination pagination-sm' );

?> <div class='main-container'> <?php

for ($p = 0; $p < count($results->data); $p++): ?> 
    
        <?php 
        //store in $movie variable for easier reading
        $movie = $results->data[$p]; 
        ?>
    
        <div class='movie-container'>
            <div class='header'>
            <h1><?= $movie['DESCRIPTION'] ?></h1>
            <span class='year'>( <?= $movie['code'] ?> )</span>
            </div>
            <div class='content'>
            <div class='left-column'>
            <!-- Image width and height multiplied by 1.3 (to make them a bit bigger) -->
            <img width='<?php 67*1.3 ?>' height='<?= 98*1.3 ?>' src='photo/00/<?= $movie['code'] ?>.jpg'>
            <div id='ratings'>
            <!-- If imdb_rating for the movie exists, print it, otherwise don't, same for metascore -->       
            <div class='imdb'><?= $movie['code'] ? $movie['code'] : '' ?></div>
            <div class='metascore'><?= $movie['code'] ? $movie['code'] : '' ?></div>
            </div>
            </div>
            <div class='right-column'>
                
            <span class='content blue'>
            <?= $movie['code']; ?>
            </span>

            <?php 
            //note: we're only printing the pipe here |, not the actual certificate
            echo $movie['code'] ? ' |' : ''; 
            ?>

            <span class='content blue'>
            <?= $movie['code'] .' min'; ?>
            </span>

           

            <div class='content description'><?= $movie['code'] ?></div>
 
            <div>
 
 
            </div>

            <div class='bottom'>
           
            <span class='content green'>
            <?= $movie['code'] ? "<span class='content yellow'>Gross: </span>$".
                     number_format($movie['code']) : '' ?>
            </span>
            </div>
                
            </div>
            </div>
        </div>
</div>
<?php endfor; ?>
?>

</body>
 
</html>