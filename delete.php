<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="productdetails.php">ENTRY</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="update.php">Edit</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="search.php">Search</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="delete.php">Delete</a>
    </li>
  </ul>
</nav>
<form method="POST">
<table class="table">
<tr>
<td>
PRODUCT NAME
</td>
<td>
<input type="text"class="form-control"name="getName">
</td>
</tr>

<tr>
<td>

</td>
<td>
<button type="submit" name="submit" class="btn btn-danger">
Delete
</button>
</td>
</tr>
</table>
</form> 
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $name=$_POST["getName"];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="shop";

    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $sql="DELETE FROM `product` WHERE `Product Name`='$name'";

    $result=$connection->query($sql);
    if($result===TRUE)
    {
        echo "item deleted";
    }
    else{
        echo $connection->error;
    }


  
}
?>