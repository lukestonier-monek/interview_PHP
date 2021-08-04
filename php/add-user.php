<?php
    require_once('./UserService.php');
    require_once('./User.php');

    $_POST = file_get_contents('php://input');
    $_POST = json_decode($_POST, true);

    $user = new User($_POST['name'], $_POST['age'], $_POST['postCode']);
    UserService::AddUser($user);
?>