<?php
if(isset($_POST['password'])){
    extract($_POST);
    if($password  == "12345"){
        setcookie("zstinger_investor", "true", time()+60, "/"); //Expires in 1min
        echo "success";
    } else{
        echo "error";
    }
}
?>