<?php

// Tätä sivua en saanut toimimaan
session_start();
require('headers.php');
require('functions.php');

if(isset($_SESSION['user'])) {
    $info = getUserData(opendb(), $_SESSION['user']);
    echo $info; 
    // $sql = ??
    exit;
}

header('HTTP/1.1 401');
echo 'Ei onnistu';

//echo getUserData(openDb(), $_SESSION['user']);