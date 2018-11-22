<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'connect.php';
session_start();

$userCheck = $_SESSION["login"];
$sess_sql = "select username from users where username='$userCheck'";
$results = mysqli_query($conn, $sess_sql);
$row = mysqli_fetch_array($results,MYSQLI_ASSOC);
$login_user_session = $row["username"];

if(!isset($_SESSION["login"])){
echo("");
    header("location:index.html");
}


?>