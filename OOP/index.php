<?php
include_once 'classes/User.php';
include_once 'classes/Building.php';
//$building = new Building();
$user = new User('admin', 'admin', "admin@user.com");

//echo $user->getUserDescription();
//echo $user;

$building = new Building(4,8,10);

echo $building;



