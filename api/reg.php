<?php
include_once "db.php";
unset($_POST['pw2']);
$User->save($_POST);
//實務要給前端0或1的回傳資料，用以判斷是否已寫入資料庫
