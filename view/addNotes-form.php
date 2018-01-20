<div class="container" id="formContainer">
<?php echo 'you logged in as <b>' . $username. ' </b>id: '. $userID. '  '.
'<a href="index.php?option=logout">log out</a>'; ?>
    <form novalidate action="notes.php" method="post" id="addNoteForm">
        <input type="text" id="noteDateInput" class="form-control" name="date" placeholder="Enter Date" tabindex="1" required>
        <input type="text" id="nameInput" class="form-control" name="name" placeholder="Enter Task Name" tabindex="2">
        <textarea id="textAreaForm" class="form-control" name="details" tabindex="3" placeholder="Task details..."></textarea>
        <button type="submit" class="btn btn-primary" name="submitTask" tabindex="4">Save Task</button>
    </form>
</div>