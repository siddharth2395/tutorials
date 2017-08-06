<?php

DEFINE('DB_USER','root');
DEFINE('DB_PASSWORD','root');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','php_tutorial');

$dbcon = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die('mysql connect error'.mysqli_connect_errno());

mysqli_set_charset($dbcon,'utf-8');

?>
