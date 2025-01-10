<?php
session_start();
require '../../Class/Authentication.php';
require '../../db.php';

$auth = new Authentication($pdo);
$auth->logout();