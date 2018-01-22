<?php

if (isset($_POST['submit'])) {
    include_once 'models/BL.php';
    include_once 'models/UserModel.php';
    $username = $_POST['username'];
    $pwd = $_POST['password'];//DOTO! hashing the password
    $email = $_POST['email'];
    if (empty($username) || empty($pwd) || empty($email)) {
        echo "error: empty";
    }
    else {
        //check if the user already registered
        if (checkEmail($email, $username) > 0) {
            echo "mail or username taken";
        }
        else {
        //insert to DB
        insertUser($_POST);
        header("Refresh:0");
        }
    }
}

//set data to sql
function insertUser($user) {
    $businessLogic = new BL();
    $businessLogic->insertUser($user);
}

function checkEmail($email, $username) {
    $businessLogic = new BL();
    $result = $businessLogic->getEmailUser($email, $username);
    return $result;
}