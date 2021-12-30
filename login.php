<?php
session_start();
require('headers.php');
require('functions.php');

//Tarkistetaan tuleeko palvelimelle basic login tiedot (Authorization: Basic asfkjsafdjsajflkasj)
if( isset($_SERVER['PHP_AUTH_USER']) ){
    if(checkUser(openDb(), $_SERVER['PHP_AUTH_USER'],$_SERVER["PHP_AUTH_PW"] )){
        $_SESSION["user"] = $_SERVER['PHP_AUTH_USER'];

        echo '{"info":"Kirjauduit sisään"}';
        header('Content-Type: application/json');
        
        createUserData(openDb(),$_SERVER['PHP_AUTH_USER'], 'blaablaa');
        exit;
    }
}   

// Ilmoitetaan käyttäjälle unauthorized
header('HTTP/1.1 401');
exit;


