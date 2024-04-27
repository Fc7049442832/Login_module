<?php
// session_ delete 
    session_start();
    session_unset();
    session_destroy();

// redirect to signin Page 
    header('Location: signin.php');
    exit();
?>