<?php

session_start();

function buscaAtendimentos($conexao) 
{

    if (isset($_SESSION['cliente_id'])) 
    {
        $cliente_id = $_SESSION['cliente_id']; 
    } 
    else 
    {
        echo "Erro: Cliente não encontrado na sessão.";
        return; 
    }

    $sql = "SELECT 
                a.ID,
                a.DT_HR_CAD,
                a.SOLICITACAO_CLIE,
                a.DESCRICAO,
                ta.DESCRICAO,
                sa.DESCRICAO,
                da.DESCRICAO,
                ma.DESCRICAO,
                fc.DESCRICAO,
                f.NOME,
                c.ID

            FROM T_ATENDIMENTO a
            inner join T_TIPO_ATENDIMENTO ta
            on ta.ID = a.ID_TIPO_ATEND
            inner join T_STATUS_ATENDIMENTO sa
            on sa.ID = a.ID_STATUS_ATEND
            inner join T_DIFICUL_ATEND da
            on da.ID = a.ID_DIFIC_ATEND
            inner join T_MOTIVO_ATEND ma
            on ma.ID = a.ID_MOTIVO
            inner join T_FUNCIO_CLIE fc
            on fc.ID = a.ID_FUNCI_CLIE
            inner join T_FUNCIONARIO f
            on f.ID = a.ID_FUNCI
            inner join T_CLIENTE c
            on c.ID = a.ID_CLIE

            WHERE c.id = ?"; 

    if ($stmt = $conexao->prepare($sql)) 
    {

        $stmt->bind_param("i", $cliente_id); 
 
        $stmt->execute();

        $result = $stmt->get_result();

        $lista_atendimentos = array();

        while ($row = $result->fetch_assoc()) 
        {
            $lista_atendimentos[] = $row; 
        }

        return $lista_atendimentos;
    } 
    else 
    {
        echo "Erro ao preparar a consulta.";
        return null; 
    }

}
?>