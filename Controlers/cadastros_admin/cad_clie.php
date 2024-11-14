<?php

require '/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php';

$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    $razao = $_POST['razao'];
    $fantasia = $_POST['fantasia'];
    $cnpj = $_POST['cnpj'];
    $ie = isset($_POST['ie']) && !empty($_POST['ie']) ? $_POST['ie'] : null;
    $cep = $_POST['cep'];
    $municipio = $_POST['municipio'];
    $uf = $_POST['uf'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $bairro = isset($_POST['bairro']) && !empty($_POST['bairro']) ? $_POST['bairro'] : null;
    $referencia = isset($_POST['referencia']) && !empty($_POST['referencia']) ? $_POST['referencia'] : null;
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $celular = isset($_POST['celular']) && !empty($_POST['celular']) ? $_POST['celular'] : null;
    $revendedor = isset($_POST['revendedor']) ? 1 : 0;
    $data_cadastro = date("Y-m-d H:i:s");
    $atividade = $_POST['atividade'];
    $ativo = isset($_POST['ativo']) ? 1 : 0;

    if (!empty($razao) && !empty($fantasia) && !empty($cnpj) && !empty($email) && !empty($fone)) 
    {
        $conn = $conexao;
        
        $verifica_existente = "SELECT COUNT(*) AS total FROM T_CLIENTE WHERE CNPJ = '$cnpj'";
        $consulta_cnpj = mysqli_query($conn, $verifica_existente);
        $row = mysqli_fetch_assoc($consulta_cnpj);

        if ($row['total'] > 0) 
        {
            $mensagem = "Já existe um cliente cadastrado com esse CNPJ!";
        } 
        else 
        {
        
            $sql = "INSERT INTO T_CLIENTE (ATIVO, RAZAO_SOCIAL, NOME_FANTASIA, CNPJ, IE, EMAIL, TELEFONE, CELULAR, DT_HR_CADASTRO, ATIVIDADE, CEP, UF, MUNICIPIO, ENDERECO, BAIRRO, REFERENCIA, REVENDEDOR) 
                VALUES ('$ativo', '$razao', '$fantasia', '$cnpj', '$ie', '$email', '$fone', '$celular', '$data_cadastro', '$atividade', '$cep', '$uf', '$municipio', '$rua', '$bairro', '$referencia', '$revendedor')";
        }
        if (mysqli_query($conn, $sql)) 
        {
            header("location: /../flamecontrol/Views/Pages/pages_admin/cadastro_cliente.php");

            exit;
            

        } 
        else 
        {
            echo "Erro ao inserir dados: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    } 
    
}
?>
