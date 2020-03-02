<?php
$r=array();
if(isset($_POST["submit"]))
{
    $Name=$_POST["getName"];

    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="shop";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);

    $sql="SELECT  `Description`, `Price` FROM `product` WHERE `Product Name`='$Name'";
    $result=$connection->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $r["data"][]=$row;
        }
        echo json_encode($r);

    }
    else{
        echo "no details available";
    }



}
?>