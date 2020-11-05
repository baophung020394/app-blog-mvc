<?php
require('model/database.php');
$db = new Database;
$db->connect();

/*Xử lý các request*/


$db->closeDatabase();
