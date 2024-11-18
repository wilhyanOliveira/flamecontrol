<?php

require('/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php');

function consulta_clie_atend ($conexao)
{

if (isset($_POST['cnpj']) && !empty($_POST['cnpj'])) {
    $cnpj = $_POST['cnpj'];

   
    $cnpj = $conexao->real_escape_string($cnpj);

    $sql = "SELECT * FROM clientes WHERE cnpj = '$cnpj'";
    $result = $conexao->query($sql);

    
    if ($result && $result->num_rows > 0) {
        echo 'encontrado';  
    } else {
        echo 'não encontrado';  
    }
} else {
    echo 'CNPJ inválido';
}

$conexao->close();
}

function verifica_cliente_url($conexao)
{
    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    }
    
    if (isset($_GET['id'])) 
    {
        $clienteId = $_GET['id'];  
    
        $clienteId = $conexao->real_escape_string($clienteId);
    
        $sql = "SELECT * FROM clientes WHERE id = '$clienteId'";
        $result = $conexao->query($sql);
    
        if ($result->num_rows > 0) 
        {
            $cliente = $result->fetch_assoc();
            $_SESSION['cliente'] = $cliente;  
    
        
            header("Location: home_clie.php");
            exit();
        } else 
        {
            echo 'CNPJ não encontrado';
        }
    }
    $conexao->close();
}
?>


