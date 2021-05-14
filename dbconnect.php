<?php
//session_start();
//include 'check_session.php';
/*ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);    
date_default_timezone_set('Asia/Kolkata');   */    
$musername = "root";
$mpassword = "root";   
$hostname = "localhost";        
$db = "demo2";       
$dbh=new PDO("mysql:host=$hostname;dbname=$db",$musername, $mpassword);/*Change The Credentials to connect to database.*/

function encryption($simple_string) {
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $encryption_iv = '1234567891011121';
    $encryption_key = "vijaymistery";
    $encryption = openssl_encrypt($simple_string, $ciphering, $encryption_key, $options, $encryption_iv);  
    return $encryption;
}

function decryption($encryption) {    
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $options = 0;
    $decryption_iv = '1234567891011121';
    $decryption_key = "vijaymistery";  
    $decryption = openssl_decrypt($encryption, $ciphering, $decryption_key, $options, $decryption_iv);
    return $decryption;    
}





