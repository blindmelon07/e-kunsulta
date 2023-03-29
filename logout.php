<?php
include 'core/int.php';
if(!$userobj->isLoggedIn()){
    $userobj->redirect('index.php');
}


$userobj->logout();