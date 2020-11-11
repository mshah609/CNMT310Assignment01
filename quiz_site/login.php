<?php

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
          </div>
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </div>
  </div>
</div>
';
echo "\n";

print $page->getBottomSection();


?>
