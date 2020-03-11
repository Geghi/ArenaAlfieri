<?php
    session_start();
    $en = 'en';
    $it = 'it';

    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = $it;
    } else if(@ $_GET['lang'] && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if($_GET['lang'] === $it){
            $_SESSION['lang'] = $it;
        }
        else if($_GET['lang'] === $en){
            $_SESSION['lang'] = $en;
        }
    }

    require_once "php/" .$_SESSION['lang'] . ".php";

?>