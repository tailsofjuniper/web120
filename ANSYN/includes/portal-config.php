<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//site key
//6Le7MrAUAAAAANEtwGs7oFPou5_XzOWTUwGILaBC
//    
//secret key
//6Le7MrAUAAAAAPmYDHRKgmp-FvYmLxMSvy-5iCry

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

echo $_SERVER['PHP_SELF'];

die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = "Juniper's WEB120 Porthole";
        $logo = 'fa-home';
        $pageID = 'Welcome';
    break;
        
    case 'big/index.php':
        $title = "Juniper's BIG Website";
        $logo = 'fa-home';
        $pageID = 'BIG';
    break;

    case 'contact.php':
        $title = "Juniper's WEB120 Contact Page";
        $logo = 'fa-paper-square-o';
        $PageID = 'Contact Juniper';
    break;
        
    case 'table.php':
        $title = "Juniper's Responsive Table";
        $logo = 'fa-paper-square-o';
        $PageID = 'Responsive Table';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';  
        $pageID = 'Welcome';
}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['contactme.php'] = "Contact Juniper";
$nav1['table.php'] = "Responsive Table";


////Creating a function to generate links and apply the class=selected to currently called page
//
//      <li><a href="index.php" class="selected">Welcome</a></li>
//      <li><a href="big/index.php">Big</a></li>
//      <li><a href="fp/index.php">Final Project</a></li>
//      <li><a href="contact.php">Contact Juniper</a></li>
//      <li><a href="table.php">Responsive Table</a></li>

function makeLinks($nav1)
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
    }
    
    return $myReturn;
}



?>
