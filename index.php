<?php
require 'model/database.php';
$db = new Database();

require('controller/client/header.php'); /*giao diện header*/

if (isset($_GET['controller'])) {
    var_dump('index.php - controller');
    require '../../route/admin/web.php'; /*xử lý các request trong Route/web.php*/
} else {
    var_dump('index.php - home');
    require 'view/client/pages/home.php'; /*require giao diện trang chủ*/
}

require 'view/client/layouts/footer.php'; /*giao diện footer*/

$db->closeDatabase();
