<?php
//connect DB
require_once 'config.php';
$db = mysqli_connect(DATABASE_HOSTNAME, DATABASE_USERNAME, DATABASE_PASSWORD, DATABASE_DATABASE) or die(mysqli_error($db));
mysqli_query($db, "SET NAMES 'utf8'");

//echo 'DATABASE_HOSTNAME : '.DATABASE_HOSTNAME . ' DATABASE_USERNAME : '.DATABASE_USERNAME .' DATABASE_PASSWORD : '. DATABASE_PASSWORD .' DATABASE : '. DATABASE_DATABASE;