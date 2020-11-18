<?php

require_once("classes/Home_Template.php");
require_once("includes.php");
include('users.php');

$page = new Home_Template("home page");

$page->addHeadElement('<link rel="stylesheet" href="styles/login.css">');

$page->finalizeTopSection();

$page->finalizeBottomSection();


print $page->getTopSection();

//echo '<h1>hello ' .$_SESSION['username'] . ' you logged in </h1>';

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

echo '<h1 align="center">
		<font face="Lato" color="#fff" size="7">
			Hello, Welome ' . $_SESSION['username'] .' you are logged in !</font>
	</h1>';

print $page->getBottomSection();


?>
