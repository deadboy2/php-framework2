<?php
if (isset($_SESSION['admin'])) {
    echo"<div class='container-fluid text-right'><a href='/?exit_admin'>Выйти</a></div>";
}