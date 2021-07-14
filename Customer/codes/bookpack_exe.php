<?php
session_start();
require_once("../../connectionclass.php");
$obj=new ConnectionClass();

$email=$_SESSION['email']; 
$emp_name=$_REQUEST['pid'];





?>