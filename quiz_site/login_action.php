<?php

$users = array('admin_user' => '$2y$10$XmCRHa/h.eEk2gwKisYPK.yMQoBqDxD2AaU6ZVLDAs5suxGfxuqlO','munim' => '$2y$10$K43Vc9NBMS/Pypm8dga6fuycNL0YrLzwr3AofMY0KpnN0ImOGXbJu' );
$errors = array();
$isloggedin = false;

//check if password and username are both set otherwise return error
if ( (isset($_POST['username']) && !empty($_POST['username'])) && (isset($_POST['password']) && !empty($_POST['password'])) ){


  #check if valid username and Password else return error
  if (array_key_exists( $_POST['username'] , $users) && password_verify($_POST['password'], $users[$_POST['username']]) === true){
    $isloggedin = true;
  }
  else{
    $errors[] = "Invalid username or password has been entered";
    $isloggedin = false;
  }

}
else{
  $errors[] = "Please fill out the form";
}

require_once("classes/Login_Template.php");

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
          </div>' . "\n";

          if ($isloggedin){
            print "       <p>Hello, you are logged in</p>";
          }
          else{
            foreach ($errors as $error) {
              print "        <p>" . $error . "</p>";
            }
          }

          echo'<button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
  </div>
</div>
';
echo "\n";

print $page->getBottomSection();


?>
