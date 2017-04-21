<?php
session_start();

if (isset($_GET['exit_admin'])) {
    unset($_SESSION['admin']);
    header("Location: /admin");
}

