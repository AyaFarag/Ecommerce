<?php
require_once "connection.php";
require_once "header.php";
?>




<div class="container">
    <h3 class="text-info text-center">Add Products</h3>
<form action=" <?php echo $_SERVER['PHP_SELF'] ?> " method="post" >

    <div class="form-group">
    <label>Product Name</label> <br/>
    <input class="form-control" type="text" name="name"  > <br/>
    </div>

    <div class="form-group">
    <label>Description</label> <br/>
    <textarea class="form-control" name="description"></textarea> <br/>
    </div>

    <div class="form-group">
    <label>Price</label> <br/>
    <input class="form-control" type="text" name="price"> <br/>
    </div>

    
    <div class="form-group">
    <label>Image</label> <br/>
    <input class="form-control" type="file" name="image"> <br/>
    </div>
    
    
    <button class="btn btn-primary float-right " type="submit" name="action" > Add </button>

</form>
</div>



<?php 
if(isset($_POST['action']))
    {
$proname     = $_POST['name'];
$description = $_POST['description'];
$price       = $_POST['price'];

$imagename   = $_FILES['image']['name'];
$size        = $_FILES['image']['size'];
$type        = $_FILES['image']['type'];
$tmp         = $_FILES['image']['tmp_name'];

$validtypes  =['image/jpeg','image/png','image/gif'];

    if(in_array($type, $validtypes) )
    {
         move_uploaded_file($tmp , "admin/uploads/".$imagename);
    }

    }

    
   header("location:addproduct.php");
?>

<?php 
require_once "footer.php";
?>