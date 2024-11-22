<?php

require '/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php';

function consulta_clie_atend($conexao)
{
    if (isset($_POST['cnpj']) && !empty($_POST['cnpj'])) {
        $cnpj = $_POST['cnpj'];
        $cnpj = $conexao->real_escape_string($cnpj);  


        $sql = "SELECT ID FROM T_CLIENTE WHERE CNPJ = '$cnpj'";
        $result = $conexao->query($sql);

        if ($result && $result->num_rows > 0) {
            $cliente = $result->fetch_assoc();
            $_SESSION['cliente_id'] = $cliente['ID'];  

            header('Location: http://localhost/flamecontrol/Views/Pages/homes/Home_clie.php?cliente_id=' . $cliente['ID']);
            exit; 
        } else {
            
            echo "Cliente não encontrado!";
        }
    } else {
        echo "CNPJ não informado!";
    }

}

consulta_clie_atend($conexao);


function buscar_dados_cliente($conexao) 
{  
    if (isset($_SESSION['cliente_id'])) 
    {
        $cliente_id = $_SESSION['cliente_id'];

        $sql = "SELECT id, razao_social, nome_fantasia, cnpj, ie, email, telefone, celular, cep, municipio, endereco, bairro, referencia 
                FROM T_CLIENTE 
                WHERE ID = '$cliente_id'";

        $result = $conexao->query($sql);

        if ($result && $result->num_rows > 0)
        {
            $cliente = $result->fetch_assoc();

            $dados_cliente = array(
                'id' => $cliente['id'],
                'razao_social' => $cliente['razao_social'],
                'nome_fantasia' => $cliente['nome_fantasia'],
                'cnpj' => $cliente['cnpj'],
                'ie' => $cliente['ie'],
                'email' => $cliente['email'],
                'telefone' => $cliente['telefone'],
                'celular' => $cliente['celular'],
                'cep' => $cliente['cep'],
                'municipio' => $cliente['municipio'],
                'endereco' => $cliente['endereco'],
                'bairro' => $cliente['bairro'],
                'referencia' => $cliente['referencia']
            );

            return $dados_cliente;
        } 
        else 
        {          
            return array('erro' => 'CNPJ não informado ou cliente não encontrado.');
        }
    } 
    else 
    {
        return array('erro' => 'ID do cliente não encontrado na sessão.');
    }
}
?>
