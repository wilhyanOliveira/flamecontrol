<?php
require '/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php';

$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $descricao = $_POST['descricao'];
    $ativo = isset($_POST['ativo']) ? 1 : 0; 

    $conn = $conexao;
    

    $verifica_existente = "SELECT COUNT(*) AS total FROM T_EQUIPE_ATENDIMENTO WHERE DESCRICAO = ?";
    $stmt = mysqli_prepare($conn, $verifica_existente);
    mysqli_stmt_bind_param($stmt, "s", $descricao);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] > 0) 
    {
        $mensagem = "Já existe uma equipe cadastrada com essa descrição.";
    } 
    else 
    {
 
        $sql = "INSERT INTO T_EQUIPE_ATENDIMENTO (DESCRICAO, ATIVO) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "si", $descricao, $ativo); 
        if (mysqli_stmt_execute($stmt)) 
        {
            header("Location: /../flamecontrol/Views/Pages/pages_admin/cadastro_equipe.php");
            exit;
        } 
        else 
        {
            echo "Erro ao inserir dados: " . mysqli_error($conn);
        }
    }
    mysqli_stmt_close($stmt); 
    mysqli_close($conn); 
}
?>
