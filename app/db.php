<?php

if (!defined('COMMERCE_MYSQL_DB_SERVER')) {
    define('COMMERCE_MYSQL_DB_SERVER', getenv('MYSQL_DB_SERVER') ?: 'mysql');
}

if (!defined('COMMERCE_MYSQL_USER')) {
    define('COMMERCE_MYSQL_USER', getenv('MYSQL_USER') ?: 'root');
}

if (!defined('COMMERCE_MYSQL_PASSWORD')) {
    define('COMMERCE_MYSQL_PASSWORD', getenv('MYSQL_PASSWORD') ?: 'root');
}

if (!defined('COMMERCE_MYSQL_DB_NAME')) {
    define('COMMERCE_MYSQL_DB_NAME', getenv('MYSQL_DB_NAME') ?: 'ecommerece');
}

// Create connection
$con = mysqli_connect(COMMERCE_MYSQL_DB_SERVER, COMMERCE_MYSQL_USER, COMMERCE_MYSQL_PASSWORD, COMMERCE_MYSQL_DB_NAME);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

