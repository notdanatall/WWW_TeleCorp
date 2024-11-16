<?php
    Class Contact{
        private $id;
        private $telephone;
        private $email;
        private $userid;

        //Getters and setters
        function getId() {
            return $this->id;
        }

        function setTelephone($telephone) {
            $this->telephone = $telephone;
        }

        function getTelephone() {
            return $this->telephone;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function getEmail() {
            return $this->email;
        }

        function setUserId($userid) {
            $this->userid = $userid;
        }

        function getUserId() {
            return $this->userid;
        }
    }
?>