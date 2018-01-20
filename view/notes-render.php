<?php
echo '<div class="container" id="notesArea">';
    //check if the user have any notes
    if (empty($notesArray)) {
        echo 'you dont have notes yet.<br>you can add one in the form above';
    }
foreach(array_reverse($notesArray) as $row){
    echo '<div class="note form-control">';
    echo '<div class="buttonsContainer">
    <a href="notes.php?editTask='.$row->getID().'" title="Edit Task"><i class="fas fa-edit"></i></a>
    <a href="notes.php?deleteTask='.$row->getID().'" title="Delete Task"><i class="fas fa-trash"></i></a></div>';
    echo "Task Name: " .$row->getName() . "<br>";
    echo "Details: " .$row->getDetails() . "<br>";
    if ($row->getIsDone() == 1) {
        echo '<a href="notes.php?notDone='.$row->getID().'" title="Not Done"><i class="fas fa-check-square"></i></a> The task is done';
    } else {
        echo '<a href="notes.php?markAsDone='.$row->getID().'" title="Mark as done"><i class="far fa-square"></i></a> The task not done yet';
    }
    echo '<span class="taskDateLabel">Date: ' . $row->getDate() . '</span>';
    echo '</div>';
}
echo '</div>';
?>