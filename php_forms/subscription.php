<?php
try{
    $email = $_POST['email'];
    echo 'Successful';
}catch (Exception $ex){
    echo 'Failed';
}