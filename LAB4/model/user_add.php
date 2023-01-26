<?php

$user_id= $_GET['user_id'];
$user_name= $_GET['user_name'];
$user_pass= $_GET['user_pass'];

require "condb.php";

try{
    $sql= "INSERT INTO tb_user
        VELUES('$user_id','$user_name','$user_pass')";
    $sql="DELETE FROM td_user WHERE user_id = '$id' ";
    mysqli_query($link,$sql);
    echo "Affected : " .mysqli_affected_rows($link);
}catch(EXception $e){
    echo $e ."Error no : " .mysqli_error($link);
}