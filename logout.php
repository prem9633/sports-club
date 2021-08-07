<?php
SESSION_START();
session_destroy();
 header('location:login.php');
 ?>