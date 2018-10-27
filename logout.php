<?php

session_start();
unset($_SESSION['loggedIN']);
unset($_SESSION['facultyloggedIN']);
session_destroy();
header('Location: index.php');
exit();
?>
