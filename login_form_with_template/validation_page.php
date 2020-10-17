<?php

require_once("Template.php");


$page = new Template("Register Account");
$page->addHeadElement('<link rel="stylesheet" href="validation.css">');
$page->finalizeTopSection();


//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();

echo "<body>";

print "<h1> login Form Validation </h1>\n";

if ( isset($_POST['Username']) && $_POST['Username'] != "" )
{
  print "<h2>Username field was set</h2>\n";
}
else
{
  print "<h2>Username field was not set</h2>\n";
}


if ( isset($_POST['password']) && $_POST['password'] != "" )
{
  print "<h2>Password field was set</h2>\n";
}
else
{
  print "<h2>Password field was not set</h2>\n";
}

echo "</body>";

print $page->getBottomSection();
