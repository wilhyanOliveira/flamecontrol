<?php
// Função para obter atendimentos do banco de dados
function buscaAtendimentos() 
{
    // Dados de conexão (substitua com suas credenciais)
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "nome_do_banco";
    
    // Criando a conexão
    $conn = new mysqli($host, $user, $pass, $dbname);

    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    // Consulta SQL para pegar os dados dos atendimentos
    $sql = "SELECT 
                atendimentos.id, 
                atendimentos.data_inicio, 
                atendimentos.data_fim, 
                usuarios.nome AS usuario, 
                tipos_atendimento.tipo, 
                funcionarios.nome AS funcionario, 
                atendimentos.descricao, 
                solicitacoes.descricao_cliente 
            FROM atendimentos
            JOIN usuarios ON atendimentos.usuario_id = usuarios.id
            JOIN tipos_atendimento ON atendimentos.tipo_atendimento_id = tipos_atendimento.id
            JOIN funcionarios ON atendimentos.funcionario_id = funcionarios.id
            JOIN solicitacoes ON atendimentos.solicitacao_id = solicitacoes.id";

    $result = $conn->query($sql);

    $atendimentos = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $atendimentos[] = $row;
        }
    } else {
        echo "Nenhum atendimento encontrado.";
    }

    $conn->close();

    return $atendimentos;
}
?>