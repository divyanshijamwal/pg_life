<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration process </title>
</head>
<body>

        your name is: <?php 
        echo $_POST["name"];
        ?>
        your email adress is : <?php
        echo $_POST ["email"] ;
        ?>
        password : <?php
        echo $_POST ["password"];
        ?>
        gender :<?php
         echo $_POST ["gender"];
        ?>
        Age :<?php
         echo $_POST ["age"];
        ?>
        university :<?php
        echo $_POST ["university"];
        ?>
        </body>
        </html>