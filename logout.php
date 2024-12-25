<?php
require 'config/constants.php';
// убираем сессию и направляем на главную
session_destroy();
header('location: ' . ROOT_URL);
die();
