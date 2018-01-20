<?php
if (isset($_POST['submit'])) {
    include_once 'models/BL.php';
    include_once 'models/UserModel.php';
    $username = $_POST['username'];
    $pwd = $_POST['password'];//TODO! hashing the password
    //check if empty
    if (empty($username) || empty($pwd)) {
        echo "error: empty";
    } 
    else {
        //get user data from db
        $user = new BL();
        $userArray = $user->getUser($username, $pwd);
        foreach($userArray as $row){
            $userResult = $row->getName();
            $pwdResult = $row->getPassword();
            $idResult = $row-> getID();
            echo $userResult . " you are logged in "; //this is the return from DB and model
            session_start();
            $_SESSION['username'] = $userResult;
            $_SESSION['userID'] = $idResult;
            header("Location: notes.php");
        } //check if data in db match to inputs
        if (empty($userResult)) {
            echo "error: result unmatch ";
        }
        else {
            echo "massage: result match ";
        }
    }
}
else {
 //   echo "error: no submit";
}
?>