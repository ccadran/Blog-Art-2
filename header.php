<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Art</title>
    <!-- Load CSS -->
    <link rel="stylesheet" href="./src/css/index.css">
        <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
</head>

<?php
//load config
require_once 'config.php';
//load php scripts
// session_start();
// if (session_status() === PHP_SESSION_ACTIVE) {
//     echo 'La session est lancée.';
// } else {
//     echo 'La session n\'est pas lancée.';
// }

?>
<body>

<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BORD'UP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/all-articles.php">Nos Articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="">Contact</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="/views/backend/dashboard.php">Admin</a>
        </li>
      </ul>
    </div>
    <!--right align-->
    <div class="d-flex">
      <a class="btn btn-primary m-1" href="/views/backend/login.php" role="button">Login</a>
      <a class="btn btn-dark m-1" href="/views/backend/register.php" role="button">Register</a>
      <a class="btn btn-primary m-1" href="/views/backend/login.php" role="button">Mon compte</a>
    </div>
  </div>
</nav>

