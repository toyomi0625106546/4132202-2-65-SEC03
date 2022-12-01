<?php

$user = $_GET['user'];

if($user == '1'){
    echo "Hello";
}else
    echo $user;

echo $user == 1 ? "Hello" : $user;
?>