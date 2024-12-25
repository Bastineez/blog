<?php
require '../partials/header.php';

// проверяем статус входа
if (!isset($_SESSION['user-id'])) {
    header('location: ' . ROOT_URL . 'signin.php');
    die();
}
