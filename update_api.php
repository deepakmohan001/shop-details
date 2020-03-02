<?php
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
      $r["status"]="success";
    }
    else{
      $r["status"]="error";
    }
    echo json_encode($r);


}

?>