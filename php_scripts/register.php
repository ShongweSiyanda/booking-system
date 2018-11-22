<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'connect.php';

if($_POST):
    
    $name = isset($_POST["name"])?$_POST["name"]:NULL;
    $surname = isset($_POST["surname"])?$_POST["surname"]:NULL;
    $number = isset($_POST["num"])?$_POST["num"]:NULL;
    $email = isset($_POST["mail"])?$_POST["mail"]:NULL;
    $pass = isset($_POST["pass"])?$_POST["pass"]:NULL;
    $passConfirm = isset($_POST["passConfirm"])?$_POST["passConfirm"]:NULL;
    
    if(!empty($name) && !empty($surname) && !empty($number) && !empty($email) &&  !empty($pass) && !empty($passConfirm)){    
        if($passConfirm==$pass){

                $insertQ = "insert into users(user_id,name,surname,email,password) values(null,'$name','$surname','$number','$email','$pass')";

                if(mysqli_query($conn, $insertQ)){
                    echo ("<script>
                    window.alert('User successfully registered!')
                </script>");
                    header("location:main.php");

                }
                else{
                    echo("<script>
                window.alert('insert error : '.mysqli_error());
                </script>");
                    header("location:registerUsers.php");

                }

                mysqli_close($conn);
            }
            else{
                echo("<script> window.alert('Password does not match!') </script>");
                header('location:index.php');
            }
        }
    endif;
?>
