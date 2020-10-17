<?php

require_once("User.php");

$apple = new User("Munim", "12345","myemail","True");

echo "Login Status: " . $apple->getLoginStatus();

 ?>
