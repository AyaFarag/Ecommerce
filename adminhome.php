<?php session_start(); ?>
<?php
require_once "connection.php";
require_once "header.php";
?>
<br/>
<h2 class="text-center text-info"> Admin (end user) Home</h2>


<?php
$id = $arrname['id'];

$q = "select name from admin where id = '$id' ";
$result = mysqli_query($conn , $q);
$arrname = mysqli_fetch_array($result);

    echo '<h2>Hello '.$arrname['name'].'</h2>';

?>


<?php 
    
    if( !isset($_SESSION['login']))
    {
        header("location:login.php");
    }


?>

<?php 

require_once "index.php";
require_once "footer.php";
?>