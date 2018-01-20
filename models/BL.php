<?php
require_once 'dal.php';
require 'NoteModel.php';
require 'UserModel.php';

class BL {
    function getNotes($userID) {
        $adapter = new DAL();
        $query = 'SELECT * FROM `notes` WHERE `user_id`='.$userID.'';
        $notesArray = $adapter->fetch($query);
        $notesObjectsArray = array();
        foreach($notesArray as $note) {
            array_push($notesObjectsArray, new NoteModel($note));
        }
        return $notesObjectsArray;
    }

    function insertNotes($note, $userID) {
        $adapter = new DAL();
        $query = 'INSERT INTO `notes`(`name`, `details`, `date`, `user_id`)
            VALUES ("'.$note['name'].'","'.$note['details'].'","'.$note['date'].'","'.$userID.'")';
        $notesArray = $adapter->fetch($query);
        //check which user insert the note
    }

    function deleteNotes($uniqueId) {
        $adapter = new DAL();
        $query = 'DELETE FROM `notes` WHERE `id`="'.$uniqueId.'"';
        $notesArray = $adapter->fetch($query);
    }

    function markAsDone($uniqueId) {
        $adapter = new DAL();
        $query = 'UPDATE `notes` SET `isDone`= 1 WHERE `id`="'.$uniqueId.'"';
        $notesArray = $adapter->fetch($query);
    }

    function markAsNotDone($uniqueId) {
        $adapter = new DAL();
        $query = 'UPDATE `notes` SET `isDone`= 0 WHERE `id`="'.$uniqueId.'"';
        $notesArray = $adapter->fetch($query);
    }

    function getUser($username, $pwd) {
        $adapter = new DAL();
        $query = "SELECT * FROM `users` WHERE `name`= '$username' AND `password`= '".md5($pwd)."'";
        $usersArray = $adapter->fetch($query);
        $usersObjectsArray = array();
        foreach($usersArray as $user) {
            array_push($usersObjectsArray, new UserModel($user));
        }
        return $usersObjectsArray;
    }

    function getEmailUser($email) {
        $adapter = new DAL();
        $query = "SELECT * FROM `users` WHERE `email`= '$email'";
        $usersArray = $adapter->fetch($query);
        $usersObjectsArray = array();
        return $usersObjectsArray;
    }

    function insertUser($user) {
        $adapter = new DAL();
        $query = 'INSERT INTO `users`(`name`, `email`, `password`)
            VALUES ("'.$user['username'].'","'.$user['email'].'","'.md5($user['password']).'")';
            //change to values from the form
        $usersArray = $adapter->fetch($query);
    }

    
}

?>
