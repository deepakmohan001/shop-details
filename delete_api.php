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
        $r["status"]="success";
    }
    else{
        $r["status"]="error";
    }
    echo json_encode($r);


  
}
?>