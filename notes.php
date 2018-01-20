<?php
session_start();
include_once 'view/header.php';
require_once 'models/BL.php';
$username = $_SESSION['username'];
$userID = $_SESSION['userID'];


include_once 'view/addNotes-form.php';

$buissnesLogic = new BL();
$notesArray = $buissnesLogic->getNotes($userID);

if (isset($_POST['submitTask'])) {
    if (isset($_POST['name']) && !empty($_POST['name'])) {
    insertNote($_POST, $userID);
    header("Refresh:0");
    }
    else {
        echo "error: task empty";
    }
}
//set data data to sql
function insertNote($note, $userID) {
    $businessLogic = new BL();
    $businessLogic->insertNotes($note, $userID);
}

include_once 'view/notes-render.php';

//delete note
if (isset($_GET['deleteTask']) && !empty($_GET['deleteTask']) ) {
    $noteById = $_GET['deleteTask'];
    $buissnesLogic->deleteNotes($noteById);
    header("Location: notes.php");
    exit;
}
//mark as done 
if (isset($_GET['markAsDone']) && !empty($_GET['markAsDone']) ) {
    $noteById = $_GET['markAsDone'];
    $buissnesLogic->markAsDone($noteById);
    header("Location: notes.php");
    exit;
}
//mark back as not done 
if (isset($_GET['notDone']) && !empty($_GET['notDone']) ) {
    $noteById = $_GET['notDone'];
    $buissnesLogic->markAsNotDone($noteById);
    header("Location: notes.php");
    exit;
}

include_once 'view/footer.php';

?>