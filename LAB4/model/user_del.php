<?php

$id= $_GET['id'];

require "condb.php";

try{
    $sql="DELETE FROM td_user WHERE user_id = '$id' ";
    mysqli_query($link,$sql);
    echo "Affected : " .mysqli_affected_rows($link);
}catch(EXception $e){
    echo $e ."Error no : " .mysqli_error($link);
}