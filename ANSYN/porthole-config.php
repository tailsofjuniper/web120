<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

echo THIS_PAGE;

die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Sara's WEB120 Title Page";
    break;

    default:
        $title = THIS_PAGE;
}

?>

