<?php

$controller = $_GET['controller'];
var_dump('web.php', $controller);
require('../../controller/admin/' . $controller . '.php'); /*require controller tương ứng*/
$controller = ucfirst($controller); /*chuyển đổi chữ cái đầu tiên của chuỗi thành chữ hoa */
$request = new $controller; /*khởi tạo một class controller tương ứng với biến $controller*/