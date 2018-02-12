<?php
require_once "connection.php";
require_once "header.php";
require_once "nav.php";

?>

    <div class="container text-center">
    <div class="row">
<?php

$q = "select * from products order by id desc";
$table = mysqli_query($conn, $q);
while ($product = mysqli_fetch_array($table)) 
{
   echo '
        <div class="col-md-3 col-6">

            <div class="product">
                <a href="singleproduct.php?myid='.$product['id'].'">

                <div class="temp">
                    <img src="'.$product['imgpath'].'" class="img-fluid" />

                    <div class="pro-desc">
                        <p>'.substr($product['description'] , 0,70 ).'</p>    
                    </div>

                </div>
                
                <h3 class="text-info">'.$product['name'].'</h3>

                <span class="text-success">price: '.$product['price'].'</span>';
                if($product['onsale'] == 1) 
                {
                    echo   '<div class="ribbon">Sale</div>';
                }
                
              echo ' </a> 
            </div>
        </div>
       ';
}
?>

    </div>
</div>


<?php 
require_once "footer.php";
?>
