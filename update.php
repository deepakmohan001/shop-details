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
SUBMIT
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
    $sql="SELECT  `Description`, `Price` FROM `product` WHERE `Product Name`='$name'";
    $result=$connection->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $description=$row["Description"];
            $price=$row["Price"];

            echo"<form method='POST'>
            <table class='table'>
            <tr> <td> Description </td>
            <td> <input type='text' class='form-control' value='$description' name='Description'> </td> </tr>
            <tr> <td> Price </td>
            <td> <input type='text' class='form-control' value='$price' name='Price'> </td> </tr>
            <tr> <td> </td> <td> 
            <button type='submit' class='btn btn-primary' name='Submit' value='$name'> 
            Update </button> </td> </tr>
            </table></form>";
        }

    }
}
if(isset($_POST["Submit"]))
{
    $UpDescription=$_POST["Description"];
    $UpPrice=$_POST["Price"];
    $Upname=$_POST["Submit"];
                            
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="shop";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $sql="UPDATE `product` SET `Description`='$UpDescription',`Price`=$UpPrice WHERE `Product Name`='$Upname'";

    $result=$connection->query($sql);
    if($result===TRUE)
    {
      echo "success";
    }
    else{
      echo "failed";
    }


}
?>