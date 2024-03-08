<?php
include("../set.php");

unset($_SESSION["user"]);
session_destroy();

$msg = "You have been logged out successfuly!";
header("location: ../index.php?msg=$msg");

?>