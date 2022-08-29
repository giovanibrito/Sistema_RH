<?php
        include_once("templates/header.php");
    ?>
    <div class="mb-3">
        <?php include_once("templates/backbtn.html"); ?> 
        <h1 id="main-title">Editar Vagas</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <imput type="hidden" name="type" value="edit">
            <imput type="hidden" name="id" value="<?= $contact['id'] ?>">
            <div class="form-group">
                <label for="titulo">Título da Vaga:</label>
                <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Insira o título" value="<?= $contact['titulo'] ?>" required>
            </div>
            <div class="form-group">
                <label for="idanalista">ID Analista:</label>
                <input type="text" id="idanalista" name="idanalista" class="form-control" placeholder="Insira o ID do analista" value="<?= $contact['idanalista'] ?>" required>
            </div>
            <div class="form-group">
                <label for="idtipovaga">ID do Tipo da Vaga:</label>
                <input type="text" id="idtipovaga" name="idtipovaga" class="form-control" placeholder="Insira o ID do tipo da vaga" value="<?= $contact['idtipovaga'] ?>" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição da Vaga:</label>
                <textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição da vaga" rows="3"><?= $contact['descricao'] ?> </textarea>
            </div>
            <div class="form-group">
                <label for="salario">Salário:</label>
                <input type="text" id="salario" name="salario" class="form-control" placeholder="Insira o valor do salário" value="<?= $contact['salario'] ?>" required>
            </div>
            <div class="form-group">
                <label for="curriculolkd">Link do Currículo no Linkedinn:</label>
                <input type="text" id="curriculolkd" name="curriculolkd" class="form-control" placeholder="Insira o link do currículo do Linkedin" value="<?= $contact['curriculolkd'] ?>" required>
            </div>
            <div class="form-group">
                <label for="tipovaga">Tipo da Vaga:</label>
                <input type="text" id="tipovaga" name="tipovaga" class="form-control" placeholder="Insira o tipo da vaga" value="<?= $contact['tipovaga'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
    <?php
        include_once("templates/footer.php");
    ?>
