<?php
include_once "db.php";
echo  $User->count($_POST);
// echo  $User->count(['acc' => $_POST['acc'], 'pw' => $_POST['pw']]);
//精進
// if ($res > 0) {
//     echo 1;
// } else {
//     echo 0;
// }
