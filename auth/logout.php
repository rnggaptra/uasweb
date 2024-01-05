<?php
session_start();
session_destroy();
header('location: /UASLaluRendi/auth/login.php');
?>