<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['valid_login'] = True;
    } else {
        $_SESSION['valid_login'] = False;
    }
}

?>