<?php

require_once("classes/Login_Template.php");
require_once("classes/WebServiceClient.php");
require_once("includes.php");

if (isset($_SESSION['isLoggedIn']) == false || $_SESSION['isLoggedIn'] != true) {
  $_SESSION['isLoggedIn'] = false;
  $_SESSION['errors'][] = "Please fill out the form";
  die(header("Location: " . LOGIN_PAGE));
}

//retreving question
$client = new WebServiceClient(QUESTION_WEBSERVICE);

$data = array('apikey' => APIKEY,
              'apiuser' => APIUSER
              );

$client->setPostFields($data);
$Request = $client->send();
$RequestObject = json_decode($Request);

if (!is_object($RequestObject)) {
  die(header("Location: " . QUIZ_ERROR));
}

if ($RequestObject->result == "Success") {
  $_SESSION['answer'] = $RequestObject->answer;
  $_SESSION['question'] = $RequestObject->question;
} else {
  die(header("Location: " . QUIZ_ERROR));
}


$page = new Login_Template("Quiz page");

$page->addHeadElement('<link rel="stylesheet" href="styles/login.css">');

$page->finalizeTopSection();

$page->finalizeBottomSection();


print $page->getTopSection();

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Quiz Site</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quiz.php">Quiz </a>
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
        <form class="form-container" action="quiz_action.php" method="POST" role="form">
        <h2>Question<h2>
        <h2> <h2>

          <div class="form-group">';

      echo  '<label for="answer">'. $_SESSION['question'] . $_SESSION['answer'] .'</label>
            <div>
              <input type="text" class="form-control" placeholder="answer" id="answer" name="answer">
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
