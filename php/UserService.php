<?php
    class UserService {
        public static function GetUsers() {
            $jsonUsers = file_get_contents('./users.json');
            return json_decode($jsonUsers, true);
        }

        public static function AddUser($user) {
            $jsonUsers = file_get_contents('./users.json');
            $users = json_decode($jsonUsers, true);
            array_push($users, $user);
            $users = json_encode($users, JSON_PRETTY_PRINT);
            file_put_contents('./users.json', $users);
        }
    }
?>