<?php

require_once("classes/Home_Template.php");
require_once("includes.php");

if (isset($_SESSION['isLoggedIn']) == false || $_SESSION['isLoggedIn'] != true) {
  $_SESSION['isLoggedIn'] = false;
  $_SESSION['errors'][] = "Please fill out the form";
  die(header("Location: " . LOGIN_PAGE));
}


if ( (isset($_POST['answer']) && !empty($_POST['answer'])) && (isset($_SESSION['answer']) && !empty($_SESSION['answer'])) ){
  if (strtolower($_POST['answer']) == strtolower($_SESSION['answer'])) {
    $question_status = "correct";
    $_SESSION["correct_count"] = $_SESSION["correct_count"] + 1;
  } else {
    $question_status = "incorrect";
  }
  $_POST['answer'] = '';
}
else{
  die(header("Location: " . "quiz.php"));
}



$page = new Home_Template("home page");

$page->addHeadElement('<link rel="stylesheet" href="styles/login.css">');

$page->finalizeTopSection();

$page->finalizeBottomSection();


print $page->getTopSection();


//navigation bar
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



echo '
  <h1 align="center" >
		<font face="Lato" color="#fff" size="7">
    Your answer was ' . $question_status . '
    </font>
	</h1>'."\n";

echo '<h1 align="center">
		<font face="Lato" color="#fff" size="6">
    ' . $_SESSION["correct_count"] . ' question(s) answered correctly
    </font>
	</h1>'."\n";

echo '<h1>
         <a align="center" href="quiz.php">
      		<font face="Lato" color="#fff" size="6">
          Try another question
          </font>
      	</a>
      </h1>'."\n";

echo '<h1>
         <a align="center" href="home.php">
      		<font face="Lato" color="#fff" size="6">
          Go to dashboard
          </font>
      	</a>
      </h1>'."\n";

print $page->getBottomSection();


?>
