<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'connect.php';
session_start();

if(session_destroy()){
 
//echo ("<script> window.alert('Successfully logged out!');</script>");
 
    header("location:index.php");
}

?>