
<?php
function check_admin_login(){
// Inialize session
   
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
// Check, if username session is NOT set then this page will jump to login page
    if (!isset($_SESSION['phone'])) {
        if (!isset($_SESSION['password'])) {
            header('Location: index.php');
            exit;
        }
    }
}

?>