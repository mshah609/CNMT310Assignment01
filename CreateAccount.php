<?php

require_once("Template.php");


$page = new Template("Register Account");
$page->addHeadElement("<script src='hello.js'></script>");
$page->finalizeTopSection();


//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>Register Account</h1>\n";
echo '<form action="registarationCom.php" method="post">
Enter username: <input type="text" name ="username" placeholder="Username">
Enter e-mail:  <input type="email" name ="mail" placeholder="E-mail">
Enter password  <input type="password" name ="Password" placeholder="Password">
  <input type ="submit" value ="Create Account">
</form>';
print $page->getBottomSection();
