<?php

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'accueil';
}

// $page = isset($GET['page']) ? $page :'accueil'; la meme chose que le if else
require './includes/' . $page . '.php';