<?php

class User {
  //variables
  private $username;
  private $password;
  private $emailAddress;
  private $isLoggedIn;

  //methods
  function __construct($username, $password, $emailAddress, $isLoggedIn) {
    $this->username = $username;
    $this->password = $password;
    $this->emailAddress = $emailAddress;
    $this->isLoggedIn = $isLoggedIn;
  }
  function getLoginStatus() {
    return $this->isLoggedIn;
  }
  function getEmailAddress() {
    return $this->emailAddress;
  }
  function authenticate($username, $password) {
    ;
  }
  function logout() {
    ;
  }
}

?>
