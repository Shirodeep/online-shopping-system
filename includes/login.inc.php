<?php
function checklogin()
{
    if(isset($_SESSION["name"])){
        $current = date('d');
        if($_SESSION["time"]){

        }
    }else{

        session_start();
        $_SESSION["name"] = $_POST["username"];
        $_SESSION["time"] = date('d');
        
    }
}   
?>