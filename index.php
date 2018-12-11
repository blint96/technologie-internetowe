<?php
    
    // Display errors
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    // Session
    session_start();

    // Path
    define('__ROOT__', dirname(__FILE__)); 

    // Database
    require_once 'db.php';

    // Functions
    require_once 'functions.php';
    
    // Home page or login
    if(!isset($_GET['page']) || $_GET['page'] === "login" || $_GET['page'] === "home") {
        if(isset($_SESSION['user_id']))
            loadController('home');
        else
            loadController('login');
    }
    if(isset($_GET['page'])) {
        if($_GET['page'] === "logout") {
            session_destroy();
            header('Location: index.php');
        }
    }