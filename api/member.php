<?php
include_once "db.php";
$res = $User->all();
echo json_encode($res);
