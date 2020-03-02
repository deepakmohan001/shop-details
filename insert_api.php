<?php
if(isset($_POST["getName"]))
{
  $name=$_POST["getName"];
  $description=$_POST["getDescription"];
  $price=$_POST["getPrice"];

  $Servername="localhost";
  $Dbusername="root";
  $Dbpassword="";
  $Dbname="shop";

  $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
  echo $sql="INSERT INTO `product`( `Product Name`, `Description`, `Price`) VALUES 
  ('$name','$description',$price)";
  $result=$connection->query($sql);
  if($result===TRUE)
  {
    $r["status"]="success";
  }
  else{
    $r["status"]="failed";
  }
  echo json_encode($r);
}
?>