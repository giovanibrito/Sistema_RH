<?php
        include_once("templates/header.php");
    ?>
    <div class="mb-3">
        <?php include_once("templates/backbtn.html"); ?> 
        <h1 id="main-title">Cadastrar Vagas</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <imput type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="titulo">Título da Vaga:</label>
                <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Insira o título" required>
            </div>
            <div class="form-group">
                <label for="idanalista">ID Analista:</label>
                <input type="text" id="idanalista" name="idanalista" class="form-control" placeholder="Insira o ID do analista" required>
            </div>
            <div class="form-group">
                <label for="idtipovaga">ID do Tipo da Vaga:</label>
                <input type="text" id="idtipovaga" name="idtipovaga" class="form-control" placeholder="Insira o ID do tipo da vaga" required>
            </div>
            <div class="form-group">
                <label for="descricao">Descrição da Vaga:</label>
                <textarea type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição da vaga" rows="3"> </textarea>
            </div>
            <div class="form-group">
                <label for="salario">Salário:</label>
                <input type="text" id="salario" name="salario" class="form-control" placeholder="Insira o valor do salário" required>
            </div>
            <div class="form-group">
                <label for="curriculolkd">Link do Currículo no Linkedinn:</label>
                <input type="text" id="curriculolkd" name="curriculolkd" class="form-control" placeholder="Insira o link do currículo do Linkedin" required>
            </div>
            <div class="form-group">
                <label for="tipovaga">Tipo da Vaga:</label>
                <input type="text" id="tipovaga" name="tipovaga" class="form-control" placeholder="Insira o tipo da vaga" required>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
    <?php
        include_once("templates/footer.php");
    ?>
