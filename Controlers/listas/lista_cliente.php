<?php

function buscarClientes($conexao) 
{
    $sql = "SELECT ID, RAZAO_SOCIAL, NOME_FANTASIA, CNPJ, EMAIL, TELEFONE FROM T_CLIENTE";
    $result = mysqli_query($conexao, $sql);  

    if ($result) 
    {
        $clientes = [];
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $clientes[] = $row;
        }
        return $clientes;
    } 
    else 
    {
        return []; 
    }
}
?>