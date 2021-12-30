<?php
session_start();
require('headers.php');
require('functions.php');

//createUser(openDb(), 'testi', '1234');
//createUser(openDb(), 'hanna', 'jeejee');
//createUser(openDb(), 'maria', 'joojoo');
//createUser(openDb(), 'kaislakoodari', 'javascriptlover');
/* 
$username = 'jotain';
$password = 'salaista';
$userinfo = 'jotain salaista tietoo'; 
$username = 'torsti';
$password = 'vesipullo';
$userinfo = 'tässä salaisuuteni'; */

$username = 'hannabanaani';
$password = 'manteli';
$userinfo = 'tärkeää tietoa'; 



createUser(openDb(), $username, $password);
createUserData(openDb(), $username, $userinfo);