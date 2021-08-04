<?php

    class User {
        public $name;
        public $age;
        public $postCode;
        public $monekUser;

        function __construct($_name, $_age, $_postCode, $_monekUser = false) {
            $this->name = $_name;
            $this->age = $_age;
            $this->postCode = $_postCode;
            $this->monekUser = $_monekUser;
        }
    }

?>