/**
 * Created by PhpStorm.
 * User: User
 * Date: 16-Apr-17
 * Time: 3:11 AM
 */
<?php

session_start();

session_unset();

session_destroy();

header("Location: /");
?>