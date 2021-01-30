<?php  

if (!session_id() ) session_start();

// file Home

// Memanggil file init.php
require_once '../app/init.php';

// Memanggil class App dari folder cores/App.php
$app = new App;

?> 