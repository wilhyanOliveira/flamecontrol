<?php
function cadastro_atendimento()
{
    require '../flamecontrol/Models/ConexaoBD/conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $descricao = $_POST['descricao'];   
        $status = $_POST['status_equipe'];
    
        if (empty($errors)) {
           
            $conn = $conexao;
    
            $stmt = $conn->prepare("INSERT INTO sua_tabela (descricao, status_equipe) VALUES (?, ?)");
            $stmt->bind_param("sssssssssssss", $descricao, $status);
    
            if ($stmt->execute()) {
                echo "Dados inseridos com sucesso!";
            } else {
                echo "Erro: " . $stmt->error;
            }
    
            $stmt->close();
            $conn->close();
        } else {
    
            foreach ($errors as $error) {
                echo "<p style='color: red;'>$error</p>";
            }
        }
        header("Location: {$_SERVER['PHP_SELF']}");
    }
}

?>