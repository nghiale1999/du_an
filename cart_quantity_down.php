<?php
session_start();

if (isset($_POST['id_down'])) {
    $id_down = $_POST['id_down'];
    $SS = $_SESSION['pr'];

    if(isset($SS) && !empty($SS)){
        foreach($SS as $key => $value) { 
            if($id_down == $value['id']){
                $_SESSION['pr'][$key]['soluong'] -=1;
                echo   $_SESSION['pr'][$key]['soluong'];        
            }
        }
    
    }
    
}



?>