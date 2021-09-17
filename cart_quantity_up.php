<?php
session_start();

if (isset($_POST['id_up'])) {
    $id_up = $_POST['id_up'];
    $SS = $_SESSION['pr'];

    if(isset($SS) && !empty($SS)){
        foreach($SS as $key => $value) { 
            if($id_up == $value['id']){
                $_SESSION['pr'][$key]['soluong'] +=1;
                echo   $_SESSION['pr'][$key]['soluong'];        
            }
        }
    
    }



    
}



?>