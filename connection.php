<?php

function openConnection() {

    $dbhost  = 'localhost';
    $db   = 'BeCode';
    $dbuser = 'root';
    $dbpass = 123456;
 
    $pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
     // Why we do this here
     return $pdo;
   }