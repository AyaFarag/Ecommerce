<?php session_start(); ?>

<?php
require_once "connection.php";
require_once "header.php";
?>

<div class="container">
    <h3 class="text-center text-info"> Login Page</h3>
<form action=" <?php echo $_SERVER['PHP_SELF'] ?> " method="post" >



    <div class="form-group">
    <label>Email</label> <br/>
    <input class="form-control" type="email" name="email"> <br/>
    </div>



    <div class="form-group">
    <label>Password</label> <br/>
    <input class="form-control" type="password" name="password"> <br/>
    </div>


<button class="btn btn-primary float-right " type="submit" name="action" > Login </button>

</form>
</div>



<?php 
if(isset($_POST['action']))
    {

$email    = $_POST['email'];
$password = $_POST['password'];


$q = "select * from admin where email = '$email' and password = '$password'";
$result = mysqli_query($conn , $q);

    if(mysqli_num_rows($result) > 0)
    {
        
        $_SESSION['login']="true";
        
        header("location:adminhome.php"); 

        
    }
    else
    {
        header("location:login.php");
    }
    
    }

?>

<?php 
require_once "footer.php";
?>