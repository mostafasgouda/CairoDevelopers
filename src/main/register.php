<?php

switch($_REQUEST['login']) {

    case 'sublogin': //action for html here
        header( 'Location: sublogin.html' );
                break;

    case 'subregister': //action for css here
        header( 'Location: subregister.html' );
                break;

   
}

?>