<?php
session_start();

if (isset($_POST['id_dt'])) {
    $id_dt = $_POST['id_dt'];
    $SS = $_SESSION['pr'];

    if(isset($SS) && !empty($SS)){
        foreach($SS as $key => $value) { 
            if($id_dt == $value['id']){
                unset($_SESSION['pr'][$key]);
                
                break;
            }
        }
    
    }







    
}



?>