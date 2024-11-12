<?php

function cadastro_funcionario()
{

require '../flamecontrol/Models/ConexaoBD/conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $nome       = $_POST['nome'];
        $cpf        = $_POST['cpf'];
        $usuario    = $_POST['user'];
        $tipo_user  = $_POST['tipo_user'];
        $setor      = $_POST['setor'];
        $equipe     = $_POST['equipe'];

        if (empty($errors)) 
        {
        $conn = $conexao;
        $stmt = $conn->prepare("INSERT INTO sua_tabela (nome, cpf, usuario, tipo_user, setor, equipe) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssss", $nome, $cpf, $usuario, $tipo_user, $setor, $equipe);

            if ($stmt->execute()) 
            {
                echo "Dados inseridos com sucesso!";
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
            // Exibe os erros de validação
            foreach ($errors as $error) {
                echo "<p style='color: red;'>$error</p>";
            }
        }

    }

}

function cadastro_cliente()
{

require '../flamecontrol/Models/ConexaoBD/conexao.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $razao = $_POST['razao'];
    $fantasia = $_POST['fantasia'];
    $cnpj = $_POST['cnpj'];
    $ie = $_POST['ie'];
    $cep = $_POST['cep'];
    $municipio = $_POST['municipio'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $referencia = $_POST['referencia'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $celular = $_POST['celular'];
    $revendedor = isset($_POST['revendedor']) ? 1 : 0; 

    if (empty($errors)) {
       
        $conn = $conexao;

        $stmt = $conn->prepare("INSERT INTO sua_tabela (razao, fantasia, cnpj, ie, cep, municipio, rua, numero, bairro, referencia, email, fone, celular, revendedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssss", $razao, $fantasia, $cnpj, $ie, $cep, $municipio, $rua, $numero, $bairro, $referencia, $email, $fone, $celular, $revendedor);

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

}

}
function cadastro_funcio_clie()
{
require '../flamecontrol/Models/ConexaoBD/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{



    if (empty($errors)) {
       
        $conn = $conexao;

        $stmt = $conn->prepare("INSERT INTO sua_tabela (razao, fantasia, cnpj, ie, cep, municipio, rua, numero, bairro, referencia, email, fone, celular, revendedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssss", $razao, $fantasia, $cnpj, $ie, $cep, $municipio, $rua, $numero, $bairro, $referencia, $email, $fone, $celular, $revendedor);

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
}
}

function cadastro_dificul_atend()
{
    require '../flamecontrol/Models/ConexaoBD/conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        
    
    
        if (empty($errors)) {
           
            $conn = $conexao;
    
            $stmt = $conn->prepare("INSERT INTO sua_tabela (razao, fantasia, cnpj, ie, cep, municipio, rua, numero, bairro, referencia, email, fone, celular, revendedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssssss", $razao, $fantasia, $cnpj, $ie, $cep, $municipio, $rua, $numero, $bairro, $referencia, $email, $fone, $celular, $revendedor);
    
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
    }

}

function cadastro_status_atend()
{

    require '../flamecontrol/Models/ConexaoBD/conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        
    
    
        if (empty($errors)) {
           
            $conn = $conexao;
    
            $stmt = $conn->prepare("INSERT INTO sua_tabela (razao, fantasia, cnpj, ie, cep, municipio, rua, numero, bairro, referencia, email, fone, celular, revendedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssssss", $razao, $fantasia, $cnpj, $ie, $cep, $municipio, $rua, $numero, $bairro, $referencia, $email, $fone, $celular, $revendedor);
    
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
    }

}

function cadastro_tipo_atend()
{

    require '../flamecontrol/Models/ConexaoBD/conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        
    
    
        if (empty($errors)) {
           
            $conn = $conexao;
    
            $stmt = $conn->prepare("INSERT INTO sua_tabela (razao, fantasia, cnpj, ie, cep, municipio, rua, numero, bairro, referencia, email, fone, celular, revendedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssssss", $razao, $fantasia, $cnpj, $ie, $cep, $municipio, $rua, $numero, $bairro, $referencia, $email, $fone, $celular, $revendedor);
    
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
    }

}

function cadastro_setor()
{
    require '../flamecontrol/Models/ConexaoBD/conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        
    
    
        if (empty($errors)) {
           
            $conn = $conexao;
    
            $stmt = $conn->prepare("INSERT INTO sua_tabela (razao, fantasia, cnpj, ie, cep, municipio, rua, numero, bairro, referencia, email, fone, celular, revendedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssssss", $razao, $fantasia, $cnpj, $ie, $cep, $municipio, $rua, $numero, $bairro, $referencia, $email, $fone, $celular, $revendedor);
    
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
    }

}

function tipo_usuario()
{
    require '../flamecontrol/Models/ConexaoBD/conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        
    
    
        if (empty($errors)) {
           
            $conn = $conexao;
    
            $stmt = $conn->prepare("INSERT INTO sua_tabela (razao, fantasia, cnpj, ie, cep, municipio, rua, numero, bairro, referencia, email, fone, celular, revendedor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssssssssss", $razao, $fantasia, $cnpj, $ie, $cep, $municipio, $rua, $numero, $bairro, $referencia, $email, $fone, $celular, $revendedor);
    
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
    }

}
function cadastro_equipe_atend()
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
    }

}

