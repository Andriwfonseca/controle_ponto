<?php
session_start();
$_SESSION['nome'] = "";
header("location: index.php");