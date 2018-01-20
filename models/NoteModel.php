<?php
    class NoteModel {
        private $id;
        private $name;
        private $details;
        private $date;
        private $user_id;
        private $isDone;

        function __construct($notesParamsArray) {
            $this->id = $notesParamsArray['id'];
            $this->name = $notesParamsArray['name'];
            $this->details = $notesParamsArray['details'];
            $this->date = $notesParamsArray['date'];
            $this->user_id = $notesParamsArray['user_id'];
            $this->isDone = $notesParamsArray['isDone'];
        }

        function getID() {
            return $this->id;
        }

        function getName() {
            return $this->name;
        }

        function getDetails() {
            return $this->details;
        }
        function getDate() {
            return $this->date;
        }
        function getUser_id() {
            return $this->user_id;
        }
        function getIsDone() {
            return $this->isDone;
        }

        function setName($name) {
            $this->name = $name;
        }
        function setDetails($details) {
            $this->details = $details;
        }
        function setDate($date) {
            $this->date = $date;
        }
        function setIsDone($isDone) {
            $this->isDone = $isDone;
        }
    }

?>

