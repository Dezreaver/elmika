<?php

$db['db_host'] = "localhost";
$db['db_user'] = "elmika88";
$db['db_pass'] = "hc6ydzn4dh";
$db['db_name'] = "elmika";


//Defining Constants
foreach($db as $key => $value) {
    define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

