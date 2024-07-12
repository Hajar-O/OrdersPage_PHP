<?php

// declaration de la contion

function checkIfFormIsValid($request) {
    if ( 
        isset($request['lastname']) &&

        !empty($request['lastname']) && 
        !empty($request['email']) && 
        !empty($request['message']) &&

        preg_match("/^[a-zA-Z0-9.%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $request['email'])

     ) {
        return true;
     } else {
        return false;
     }
}