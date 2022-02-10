<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['user_type']);
unset($_SESSION['successMessage']);
header("location: login_form.php");