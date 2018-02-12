<?php 

header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Headers: X-Requested-With");
header("Content-Type: application/json");


$conn = mysqli_connect("localhost", "root", "", "progallary");
$q= "select * from products order by id desc";
$showpro = mysqli_query($conn , $q);
while ($products = mysqli_fetch_assoc($showpro))
{
    $rows[] = $products;
}

print json_encode($rows)



?>