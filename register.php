<?php
if (isset($_POST['submit'])) {
    include_once 'models/BL.php';
    include_once 'models/UserModel.php';
    $username = $_POST['username'];
    $pwd = $_POST['password'];//DOTO! hashing the password
    $email = $_POST['email'];
    if (empty($username) || empty($pwd) || empty($email)) {
        echo "error: empty";
        //TODO: check if the user already registered
    } else {
        //insert to DB
        insertUser($_POST);
        header("Location: index.php");
    }
}
//TODO: check if the user already registered
//set data to sql
function insertUser($user) {
    $businessLogic = new BL();
    $businessLogic->insertUser($user);
}

function checkEmail($email) {
    $businessLogic = new BL();
    $businessLogic->getEmailUser($email);
}