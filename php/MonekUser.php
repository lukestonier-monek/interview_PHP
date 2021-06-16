<?php
    require_once('./User.php');

    class MonekUser extends User {
        public $companyId;
        public $positionTitle;

        function __construct($_name, $_age, $_postCode, $_companyId, $_positionTitle) {
            parent::__construct($_name, $_age, $_postCode, true);
            $this->companyId = $_companyId;
            $this->positionTitle = $_positionTitle;
        }
    }

    // CREATE TABLE users (id int, name varchar(255), age int, postcode varchar(10), companyid int, positiontitle varchar(255));

    $user = new User('Luke', 23, 'WS14 9DZ');
    print_r($user);

    $monekUser = new MonekUser('Luke', 23, 'WS14 9DZ', 100, 'Software Developer');
    print_r($monekUser);
?>