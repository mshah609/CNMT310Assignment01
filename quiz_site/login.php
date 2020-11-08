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
        <form class=form-container>
        <h3>Account Sign In</h3>
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" id="username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" id="password" placeholder="*******">
          </div>
          <button type="submit" class="btn btn-primary btn-block">Submit</button>
      </form>
    </div>
  </div>
</div>
';
echo "\n";

print $page->getBottomSection();


?>
