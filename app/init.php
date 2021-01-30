<?php 
// init.php berfungsi untuk mengisialiasi kan file yang ingin dipanggil.

// aplikasi
require_once 'cores/App.php' ;
// controller
require_once 'cores/Controller.php' ;

// Database Wrapper
require_once'cores/database.php';

// Flash Message
require_once'cores/flasher.php';

// Base URL
require_once'config/config.php';

?> 