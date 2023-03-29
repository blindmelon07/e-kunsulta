<?php 

session_start();
require 'classes/DB.php';
require 'classes/User.php';


$userobj = new User;

define('BASE_URL','http://localhost/sireugene/');