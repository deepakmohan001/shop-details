<?php
$r=array();

$Servername="localhost";
$Dbusername="root";
$Dbpassword="";
$Dbname="shop";
$connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
$sql="SELECT  `Product Name`, `Description`, `Price` FROM `product`";

$result=$connection->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        $r["data"][]=$row;
    }
    echo json_encode($r);   

}



?>