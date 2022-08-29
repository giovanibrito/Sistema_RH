<?php

    include_once("config/url.php");
    include_once("config/process.php");

    //limpa a mensagem
    if(isset($_SESSION['msg'])) {
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }

  //require_once("globals.php");
  require_once("db.php");
  require_once("models/Message.php");
  require_once("dao/UserDAO.php");

  $message = new Message($BASE_URL);

  $flassMessage = $message->getMessage();

  if(!empty($flassMessage["msg"])) {
    // Limpar a mensagem
    $message->clearMessage();
  }

  $userDao = new UserDAO($conn, $BASE_URL);

  $userData = $userDao->verifyToken(false);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de RH</title>
    <!-- BOOTSTRAP --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
                <img src="<?= $BASE_URL ?>img/logorh.jpeg" alt="Sistema de RH">
            </a> 
            <div>
                <div class="navbar-nav">
                    <a class= "nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Home</a>
                    <a class= "nav-link active" href="<?= $BASE_URL ?>cadvagas.php">Cadastrar Vagas</a>
                    <a class= "nav-link active" href="<?= $BASE_URL ?>#">Cadastrar Analista</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="navbar-nav">
          <?php if($userData): ?>
            <li class="nav-item">
              <a href="<?= $BASE_URL ?>editprofile.php" class="nav-link bold">
                <?= $userData->name ?>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= $BASE_URL ?>logout.php" class="nav-link">Sair</a>
            </li>
          <?php else: ?>
            <li class="nav-item">
              <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar / Cadastrar</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
           
            </div>   
        </nav>
        
       
  
  <?php if(!empty($flassMessage["msg"])): ?>
    <div class="msg-container">
      <p class="msg <?= $flassMessage["type"] ?>"><?= $flassMessage["msg"] ?></p>
    </div>
  <?php endif; ?>
    </header>