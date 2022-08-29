    <?php
        include_once("templates/header.php");
    ?>
        <div class="container">
            <?php if(isset($printMsg) && $printMsg != ''): ?>
                <p id="msg"><?= $printMsg ?></p>
            <?php endif; ?>
            <h1 id="main-title">Sistema de RH</h1>
            <?php if(count($contacts) > 0): ?>
                <table class="table" id="contacts-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID Analista</th>
                            <th scope="col">ID Tipo Vaga</th>
                            <th scope="col">Título</th>
                            <th scope="col">Salário</th>
                            <th scope="col">Tipo de Vaga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($contacts as $contact): ?>
                            <tr>
                                <td scope="row" class="col-id"><?= $contact["idvaga"] ?></td>
                                <td scope="row"><?= $contact["idanalista"] ?></td>
                                <td scope="row"><?= $contact["idtipovaga"] ?></td>
                                <td scope="row"><?= $contact["titulo"] ?></td>
                                <td scope="row"><?= $contact["salario"] ?></td>
                                <td scope="row"><?= $contact["tipovaga"] ?></td>
                                <td class="actions">
                                    <a href="<?= $BASE_URL ?>show.php?id=<?= $contact["idvaga"] ?>"><i class="fas fa-eye check-icon"></i></a>
                                    <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["idvaga"] ?>"><i class="far fa-edit edit-icon"></i></a>
                                    <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                                        <imput type="hidden" name="type" value="delete">
                                        <imput type="hidden" name="idvaga" value="<?= $contact["idvaga"] ?>">
                                        <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                                
                    
          <?php else: ?>
                <p id="empty-list-text">Ainda não há vagas, <a href="<?= $BASE_URL ?>create.php">clique aqui para cadastrar vaga</a>.</p>
            <?php endif; ?>
        </div>  

    
    