<?php

require_once("classes/Login_Template.php");
require_once("includes.php");
include('users.php');


$page = new Login_Template("Quiz page");

$page->addHeadElement('<link rel="stylesheet" href="styles/login.css">');

$page->finalizeTopSection();

$page->finalizeBottomSection();


print $page->getTopSection();

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quiz_page.php">Quiz </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout </a>
      </li>
    </ul>
  </div>
</nav>';

echo "\n";

echo '
<div class="container-fluid bg">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-6 col-md-3">
        <!-- Form --->
        <form class="form-container" role="form">
        <h2>Quiz Questions<h2>
        <h2> <h2>

          <div class="form-group">
            <label >first question?</label>
            <div>
              <input type="text" class="form-control" placeholder="answer">
            </div>
          </div>
          <div class="form-group">
            <label >second question?</label>
            <div>
              <input type="text" class="form-control" placeholder="answer">
            </div>
          </div>
          <div class="form-group">
            <label >third question?</label>
            <div>
              <input type="text" class="form-control" placeholder="answer">
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
