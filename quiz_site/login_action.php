<?php

require_once("classes/Login_Template.php");
require_once("includes.php");
include('users.php');

if (isset($_SESSION['isLoggedIn'])) {
  $_SESSION['isLoggedIn'] = false;
}

$_SESSION['errors'] = array();


//check if password and username are both set otherwise return error
if ( (isset($_POST['username']) && !empty($_POST['username'])) && (isset($_POST['password']) && !empty($_POST['password'])) ){


  #check if valid username and Password else return error
  if (array_key_exists( $_POST['username'] , $users) && password_verify($_POST['password'], $users[$_POST['username']]) === true){
    $_SESSION['isLoggedIn'] = true;
    $_SESSION['username'] = $_POST['username'];
    die(header("Location: " . AUTHENTICATED_HOME));
  }
  else{
    $_SESSION['errors'][] = "Invalid username or password has been entered";
    $_SESSION['isLoggedIn'] = false;
    die(header("Location: " . LOGIN_PAGE));
  }

}
else{
  $_SESSION['isLoggedIn'] = false;
  $_SESSION['errors'][] = "Please fill out the form";
  die(header("Location: " . LOGIN_PAGE));
}

$page = new Login_Template("Quiz login");

$page->addHeadElement('<link rel="stylesheet" href="styles/login.css">');

$page->finalizeTopSection();

$page->finalizeBottomSection();


print $page->getTopSection();

echo '
<div class="container-fluid bg">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-6 col-md-3">
        <!-- Form --->
        <form class="form-container" action="login_action.php" method="POST" role="form">
        <h2>Quiz Site<h2>
        <h3>Sign In</h3>
          <div class="form-group">
            <label for="username">Username</label>
            <div>
              <input type="text" class="form-control" id="username" name="username" >
            </div>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <div>
              <input type="password" class="form-control" placeholder="*******" id="password" name="password">
            </div>
          </div>
       <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
  </div>
</div>
';
echo "\n";

print $page->getBottomSection();


?>
