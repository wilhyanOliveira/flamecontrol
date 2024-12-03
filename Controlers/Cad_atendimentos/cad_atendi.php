<?php

function cadastro_atendimento()
{
    require '../flamecontrol/Models/ConexaoBD/conexao.php'; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        
        $funcionario = $_POST['funcionario'];  
        $status = $_POST['status'];            
        $motivo_atend = $_POST['motivo_atend']; 
        $tipo_atend = $_POST['tipo_atend'];   
        $dificul_atend = $_POST['dificul_atend']; 
        $solicitacao = $_POST['solicitacao'];   
        $descricao = $_POST['descricao'];       
        $id_clie = 1; 
        $datahora_atual = date("Y-m-d H:i:s");

        $errors = [];
        if (empty($funcionario)) 
        {
            $errors[] = "O campo 'Funcionario' é obrigatório.";
        }
        if (empty($status)) 
        {
            $errors[] = "O campo 'Status' é obrigatório.";
        }
        if (empty($motivo_atend)) 
        {
            $errors[] = "O campo 'Motivo de Atendimento' é obrigatório.";
        }
        if (empty($tipo_atend)) 
        {
            $errors[] = "O campo 'Tipo de Atendimento' é obrigatório.";
        }
        if (empty($dificul_atend)) 
        {
            $errors[] = "O campo 'Dificuldade de Atendimento' é obrigatório.";
        }
        if (empty($solicitacao)) 
        {
            $errors[] = "O campo 'Solicitação' é obrigatório.";
        }
        if (empty($descricao)) 
        {
            $errors[] = "O campo 'Descrição' é obrigatório.";
        }

        if (empty($errors)) {
            
            $conn = $conexao;

            $stmt = $conn->prepare(
                "INSERT INTO sua_tabela (
                    ID_TIPO_ATEND, ID_STATUS_ATEND, ID_DIFIC_ATEND, ID_MOTIVO, ID_FUNCI_CLIE, ID_FUNCI, ID_CLIE, DT_HR_CAD, SOLICITACAO_CLIE, DESCRICAO
                ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
            );

            $stmt->bind_param("iiiiiiisss", $tipo_atend, $status, $dificul_atend, $motivo_atend, 
                $funcionario, $funcionario, $id_clie, $datahora_atual, $solicitacao, $descricao);

            if ($stmt->execute()) 
            {
                header("Location: /flamecontrol/Views/Pages/pages_admin/cadastro_setor.php");
                exit;  
            }
             else 
            {
                echo "Erro: " . $stmt->error;
            }

            $stmt->close();
            $conn->close();
        } 
        else 
        {
            
            foreach ($errors as $error) {
                echo "<p style='color: red;'>$error</p>";
            }
        }

        header("Location: {$_SERVER['PHP_SELF']}");
    }
}


?>