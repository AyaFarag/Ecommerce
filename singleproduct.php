<?php
require_once "connection.php";
require_once "header.php";
require_once "nav.php";
?>


<?php
// Section of [Single Product Page Details]
// Get this by main product ID

if(isset($_GET['myid']))
{
$id = $_GET['myid'];


$q = "select * from products where id = '$id'";
$table = mysqli_query( $conn , $q);
$product = mysqli_fetch_array($table);



echo '
<div class="container">
    <div class="row">

        <div class="col-md-3">
            <div>
            <img src="'.$product['imgpath'].'" class="img-fluid"/>
            </div>
        </div>
        <div class="col-md-9">
            <div>
            <h2 class="text-info"> '.$product['name'].' </h2>

            <p> '.$product['description'].'</p>

            <h2 class="text-danger">Price: '.$product['price'].' </h2>
            </div>
        </div>
    
    </div>
</div> ';

}
?>

<?php 
// Comments Page
require_once "comments.php";
?>


 <div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>
            


        
     

<?php 
require_once "footer.php";
?>