<?php
        include_once("templates/header.php");
    ?>
     <div class="container" id="view-contact-container">
        <?php include_once("templates/backbtn.html"); ?>    
     <h1 id="main-title"><?= $contact["titulo"] ?></h1>
         <p class="bold">#:</p>
         <p><?= $contact["idvaga"] ?></p>
         <p class="bold">ID Analista:</p>
         <p><?= $contact["idanalista"] ?></p>
         <p class="bold">ID Tipo de Vaga:</p>
         <p><?= $contact["idtipovaga"] ?></p>
         <p class="bold">Descrição da Vaga:</p>
         <p><?= $contact["descricao"] ?></p>
         <p class="bold">Salário:</p>
         <p><?= $contact["salario"] ?></p>
         <p class="bold">Tipo de Vaga:</p>
         <p><?= $contact["tipovaga"] ?></p>
     </div>
    <?php
        include_once("templates/footer.php");
    ?>
