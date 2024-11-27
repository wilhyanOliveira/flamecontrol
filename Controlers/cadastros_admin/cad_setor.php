<?php
require '/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php';

$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $descricao = $_POST['descricao'];
    $ativo = isset($_POST['ativo']) ? 1 : 0;  

    if (!empty($descricao)) 
    {
        $conn = $conexao;
        

        $verifica_existente = "SELECT COUNT(*) AS total FROM T_SETOR WHERE descricao = '$descricao'";
        $consulta_setor = mysqli_query($conn, $verifica_existente);
        $row = mysqli_fetch_assoc($consulta_setor);


        if ($row['total'] > 0) 
        {
            $mensagem = "Já existe um setor cadastrado com essa descrição!";
        } 
        else 
        {

            $sql = "INSERT INTO T_SETOR (DESCRICAO, ATIVO) VALUES ('$descricao', '$ativo')";
        }


        if (mysqli_query($conn, $sql)) 
        {

            header("location: /flamecontrol/Views/Pages/pages_admin/cadastro_setor.php");
            exit;  
        } 
        else 
        {

            $mensagem = "Erro ao inserir dados: " . mysqli_error($conn);
        }


        mysqli_close($conn);
    } 
    else 
    {
        $mensagem = "O campo descrição é obrigatório.";
    }
}
?>
