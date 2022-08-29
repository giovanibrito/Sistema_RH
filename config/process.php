<?php

    session_start();

    include_once("connection.php");
    include_once("url.php");

    $data = $_POST;

    //* Modificações no Banco
    if(!empty($data)) {

       
        //Cria a Vaga
        if($data["type"] === "create") {

            $titulo = $data["titulo"];
            $idanalista = $data["idanalista"];
            $idtipovaga = $data["idtipovaga"];
            $descricao = $data["descricao"];
            $salario = $data["salario"];
            $curriculolkd = $data["curriculolkd"];
            $tipovaga = $data["tipovaga"];

            $query = "INSERT INTO contacts (titulo, idanalista, idtipovaga, descricao, salario, curriculolkd, tipovaga) VALUES (:titulo, :idanalista, :idtipovaga, :descricao, :salario, :curriculolkd, :tipovaga)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":titulo", $titulo);
            $stmt->bindParam(":idanalista", $idanalista);
            $stmt->bindParam(":idtipovaga", $idtipovaga);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":salario", $salario);
            $stmt->bindParam(":curriculolkd", $curriculolkd);
            $stmt->bindParam(":tipovaga", $tipovaga);

            try {

                $stmt->execute();
                $_SESSION["msg"] = "Vaga criada com sucesso!";
                
            } catch (PDOException $e) {
                //erro de conexao
                $error = $e->getMessage();
                echo "Erro: $error";
        
            }

        } else if($data["type"] === "edit") {

            $titulo = $data["titulo"];
            $idanalista = $data["idanalista"];
            $idtipovaga = $data["idtipovaga"];
            $descricao = $data["descricao"];
            $salario = $data["salario"];
            $curriculolkd = $data["curriculolkd"];
            $tipovaga = $data["tipovaga"];
            

            $query = "UPDATE contacts SET (titulo = :titulo, idanalista = :idanalista, idtipovaga = :idtipovaga, descricao = :descricao, salario = :salario, curriculolkd = :curriculolkd, tipovaga = :tipovaga WHERE id = :id)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":titulo", $titulo);
            $stmt->bindParam(":idanalista", $idanalista);
            $stmt->bindParam(":idtipovaga", $idtipovaga);
            $stmt->bindParam(":descricao", $descricao);
            $stmt->bindParam(":salario", $salario);
            $stmt->bindParam(":curriculolkd", $curriculolkd);
            $stmt->bindParam(":tipovaga", $tipovaga);
            

            try {

                $stmt->execute();
                $_SESSION["msg"] = "Vaga atualizado com sucesso!";
                
            } catch (PDOException $e) {
                //erro de conexao
                $error = $e->getMessage();
                echo "Erro: $error";
        
            }

        } else if($data["type"] === "delete") {

            $id = $data["idvaga"];

            $query = "DELETE FROM contacts WHERE idvaga = :id";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":id", $id);

            
            try {

                $stmt->execute();
                $_SESSION["msg"] = "Vaga removido com sucesso!";
                
            } catch (PDOException $e) {
                //erro de conexao
                $error = $e->getMessage();
                echo "Erro: $error";
        
            }
        }

    //* Redirect Home
    header("Location:" . $BASE_URL . "../index.php");

    //* Seleção de Dados
    } else {

        $id;

    if(!empty($_GET)) {
        $id = $_GET["id"];
    }
    
    //Retorna o dado de uma vaga
    if(!empty($id)) {

        $query = "SELECT * FROM contacts WHERE idvaga = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contact = $stmt->fetch();

    } else {

    
    
    //Retorna todas as vagas
    $contacts = [];

    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $contacts = $stmt->fetchAll();

    }

    }

    //Fechar conexão
    $conn = null;

