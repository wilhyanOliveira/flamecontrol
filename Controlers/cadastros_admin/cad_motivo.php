<?php

require '/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php';

$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    $descricao = $_POST['descricao'];
    $ativo = isset($_POST['ativo']) ? 1 : 0;

        $conn = $conexao;
        
        $verifica_existente = "SELECT COUNT(*) AS total FROM T_MOTIVO_ATEND WHERE descricao = '$descricao'";
        $consulta_motivo = mysqli_query($conn, $verifica_existente);
        $row = mysqli_fetch_assoc($consulta_motivo);

        if ($row['total'] > 0) 
        {
            $mensagem = "Já existe uma equipe cadastrada";
        } 
        else 
        {
        
            $sql = "INSERT INTO T_MOTIVO_ATEND (DESCRICAO, ATIVO, ) 
                VALUES ('$descricao''$ativo')";
        }
        if (mysqli_query($conn, $sql)) 
        {
            header("location: /../flamecontrol/Views/Pages/pages_admin/cadastro_equipe.php");

            exit;
            

        } 
        else 
        {
            echo "Erro ao inserir dados: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    
}
?>