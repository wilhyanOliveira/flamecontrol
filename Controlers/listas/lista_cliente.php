<?php
// Função para buscar clientes no banco de dados
function buscarClientes($conexao) {
    $sql = "SELECT ID, RAZAO_SOCIAL, NOME_FANTASIA, CNPJ, EMAIL, TELEFONE FROM T_CLIENTE";
    $result = mysqli_query($conexao, $sql);  // Executa a consulta no banco

    if ($result) {
        $clientes = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $clientes[] = $row;  // Armazena cada cliente no array
        }
        return $clientes;
    } else {
        return [];  // Retorna um array vazio caso não haja resultados ou erro na consulta
    }
}
?>