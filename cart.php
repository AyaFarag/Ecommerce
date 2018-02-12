
<?php
require_once "connection.php";
require_once "header.php";
require_once "nav.php";

?>


<h2 class="text-center text-danger">Hello your Cart</h2>

$category = $product['category'];
$q2 = "select * from products where category = '$category'";
$table2 = mysqli_query($conn , $q2);
   echo '<div class="owl-carousel owl-theme">';
while ($product =  mysqli_fetch_array($table2)) 
{
            echo' <div class="item">
            <h2>12</h2>
            </div> ';
}


<?php 
require_once "footer.php";
?>