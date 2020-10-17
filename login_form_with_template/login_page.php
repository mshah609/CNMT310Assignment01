<?php

require_once("Template.php");


$page = new Template("Register Account");
$page->addHeadElement('<link rel="stylesheet" href="Style.css">');
//$page->addHeadElement('<script src="JavaScript.js"></script>');

$page->finalizeTopSection();


//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.
$page->addBottomElement('<script src="JavaScript.js"></script>');
$page->finalizeBottomSection();

print $page->getTopSection();


echo
'  <div class="container">
  <div class ="header">
  <h1 id= h1> Register Account</h1>
<div/>
<form name="myForm"  action="validation_page.php" method="post" class ="form" onsubmit="return validateForm()">
      <div class = "form-control ">
           <label>Username</label>
           <input type ="text" placeholder="Enter Username" name ="Username">

           <small>Invalid Input</small>
              </div>
                                  <div class = "form-control">
                                       <label>Password</label>
                                       <input type ="password" placeholder="Enter Numbers Only" name ="password">
                                      
                                       <small>Invalid Input</small>
                                          </div>
                                              <button name = submit>Submit</button>

          </form>
     </div>

';



print $page->getBottomSection();
