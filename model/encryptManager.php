<?php 

function encrypt ($password) {
    return "aq1" . sha1($password . "123") . "25";
}