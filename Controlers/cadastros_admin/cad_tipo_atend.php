<?php

require '/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php';

$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $descricao = $_POST['descricao']; 
    $ativo = isset($_POST['ativo']) ? 1 : 0;

    $conn = $conexao;

    $verifica_existente = "SELECT COUNT(*) AS total FROM T_TIPO_ATENDIMENTO WHERE descricao = '$descricao'";
    $consulta_tipo_atend = mysqli_query($conn, $verifica_existente);

    if (!$consulta_tipo_atend) {
        die('Erro na consulta: ' . mysqli_error($conn));
    }

    $row = mysqli_fetch_assoc($consulta_tipo_atend);

    if ($row['total'] > 0) 
    {
        $mensagem = "Já existe uma equipe cadastrada";
    } 
    else 
    {

        $sql = "INSERT INTO T_TIPO_ATENDIMENTO (DESCRICAO, ATIVO) 
                VALUES ('$descricao', '$ativo')";
        
        if (mysqli_query($conn, $sql)) 
        {
            header("location: /../flamecontrol/Views/Pages/pages_admin/cadastro_tipo_atend.php");
            exit;
        } 
        else 
        {
            echo "Erro ao inserir dados: " . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}

?>