<?php
require_once "connection.php";
require_once "header.php";
?>




<div class="container">
    <h3 class="text-info text-center">Admin Register</h3>
<form action=" <?php echo $_SERVER['PHP_SELF'] ?> " method="post" >

    <div class="form-group">
    <label>Admin Name</label> <br/>
    <input class="form-control" type="text" name="adminname"  > <br/>
    </div>

    <div class="form-group">
    <label>admin Email</label> <br/>
    <input class="form-control" type="email" name="adminemail"> <br/>
    </div>

    <div class="form-group">
    <label>admin Age</label> <br/>
    <input class="form-control" type="age" name="adminage"> <br/>
    </div>

    <div class="form-group">
    <label>admin Password</label> <br/>
    <input class="form-control" type="password" name="adminpassword"> <br/>
    </div>
    <div class="form-group">
    <label>RePassword</label> <br/>
    <input class="form-control" type="password" name="repassword"> <br/>
    </div>
    
    <button class="btn btn-primary float-right btn-block" type="submit" name="action" > Register </button>

</form>
</div>



<?php 
if(isset($_POST['action']))
    {
$adminname     = $_POST['adminname'];
$adminemail    = $_POST['adminemail'];
$adminage      = $_POST['adminage'];
$adminpassword = $_POST['adminpassword'];


$q = "insert into admin (name , email , age , password)
values ('$adminname' ,'$adminemail','$adminage', '$adminpassword' )";
$data = mysqli_query($conn , $q);
    
header("location:adminhome.php");
    }
?>

<?php 
require_once "footer.php";
?>