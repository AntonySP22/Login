<?php

// session_start();

// require "../vendor/autoload.php";

// use myPHPnotes\Microsoft\Auth;
#Hecho por Danely Carranza


// $tenant = "common";
// $client_id = "bc9875e1-e493-4550-bf7d-0d8992ceb941";
// $client_secret = "ktc8Q~g4JZHnHJHYU.XWJGfm8Ybs4MksmSXpmaWO";
// $callback = "http://localhost/loginmicro/callback.php";
// $scopes = ["User.Read"];

// $microsoft = new Auth($tenant, $client_id, $client_secret,$callback, $scopes);

// header("location: " . $microsoft->getAuthUrl());

session_start();



require "vendor/autoload.php";



use myPHPnotes\Microsoft\Auth;




$tenant = "common";

$client_id = "bc9875e1-e493-4550-bf7d-0d8992ceb941";

$client_secret = "ktc8Q~g4JZHnHJHYU.XWJGfm8Ybs4MksmSXpmaWO";

$callback = "http://localhost/loginmicro/prueba2.html";

$scopes = ["User.Read"];



$microsoft = new Auth($tenant, $client_id, $client_secret,$callback, $scopes);

header("location: " . $microsoft->getAuthUrl());
 
?>