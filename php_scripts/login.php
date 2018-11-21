<?php
    include 'connect.php';
    session_start();
    
    if($_POST){
        
        $user = isset($_POST["mailLogin"])?$_POST["mailLogin"]:null;
        $pass = isset($_POST["passwordLogin"])?$_POST["passwordLogin"]:null;
        
        $loginQuery = "select user_id from users where email='$user' AND password='$pass'";
        $loginResults = mysqli_query($conn, $loginQuery);
        $loginRow = mysqli_fetch_array($loginResults,MYSQLI_ASSOC);
        $activeUser = $loginRow["user_id"];
        
        $count = mysqli_num_rows($loginResults);
        
        if($count==1){
            $_SESSION['login'] = $user;
            header("location:home.php");
            //echo("<script> window.alert('Successfully logged in;') </script>");
        }
        else{
            echo("<script> window.alert('Invalid user password. Please re-enter'); </script>");

     
        }
        
        
    }

?>