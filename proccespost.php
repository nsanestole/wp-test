<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    //url
    $url = $_SESSION['website'];
    //Your username.
    $username = $_SESSION['username'];
    //Your password.
    $password = $_SESSION['password'];

    //Initiate cURL.
    $ch = curl_init($url."/wp/v2/posts");
     
    //Specify the username and password using the CURLOPT_USERPWD option.
    curl_setopt($ch, CURLOPT_USERPWD, $username . ":" . $password);  
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $_POST);
    $response = curl_exec($ch);
    
    curl_close($ch);
    return $response;
}
else return 0;