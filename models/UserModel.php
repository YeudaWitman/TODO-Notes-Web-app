<?php
    class UserModel {
        private $id;
        private $name;
        private $email;
        private $password;

        function __construct($usersParamsArray) {
            $this->id = $usersParamsArray['id'];
            $this->name = $usersParamsArray['name'];
            $this->email = $usersParamsArray['email'];
            $this->password = $usersParamsArray['password'];
        }

        function getID() {
            return $this->id;
        }

        function getName() {
            return $this->name;
        }

        function getEmail() {
            return $this->email;
        }
        function getPassword() {
            return md5($this->password);
        }

        function setName($name) {
            $this->name = $name;
        }
        function setDetails($email) {
            $this->email = $email;
        }
        function setPassword($password) {
            $this->password = $password;
        }
    }

?>