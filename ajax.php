<?php
include 'connect.php';
session_start();
$slsp=1;
$check=1;
$SS = $_SESSION['pr'];

if (isset($_POST['id_pr'])) {
    $id_pr = $_POST['id_pr'];
    $sql="SELECT * FROM product WHERE id='".$id_pr."'";
    $result=$con->query($sql);       
    $data=[];
    if($result->num_rows > 0){ 
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }       
    }
    
    if(isset($SS) && !empty($SS)){
        foreach($SS as $key => $value) { 
           $slsp += 1;
            if($id_pr == $value['id']){
                $check=2;
                $_SESSION['pr'][$key]['soluong'] += 1;
            }
        }
    
    }

    if($check==1){
        foreach ($data as $value) {
            $sp = array(
                "ten"=> $value['ten'],
                "gia"=>$value['gia'],
                "hinh"=>$value['hinh'],
                "id"=>$value['id'],
                "soluong"=>1
            );



        }
        $_SESSION['pr'][] = $sp;
    }

    $_SESSION['slsp']=$slsp;

}



?>
