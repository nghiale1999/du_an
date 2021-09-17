<?php

include 'connect.php';

$id=$_GET['id_pr'];

$sql="DELETE FROM product WHERE id='".$id."'";
$result = $con->query($sql);

if($result->num_rows == 0){
    
    header('Location: product.php');
}else{
    echo 'xoa không dc';
}



?>