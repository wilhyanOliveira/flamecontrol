<?php

function buscarFuncionario($conexao)
 {
    $sql = "SELECT 
    F.ID, 
    F.NOME, 
    F.CPF,
    SETO.DESCRICAO,
    TIPOU.DESCRICAO,
    EQUIPE.DESCRICAO

    FROM T_FUNCIONARIO F

    INNER JOIN T_SETOR SETO
    ON F.ID_SETOR = SETO.ID 
    INNER JOIN T_TIPO_USUARIO TIPOU
    ON F.ID_TIPO_USER = TIPOU.ID
    INNER JOIN T_EQUIPE_ATENDIMENTO EQUIPE
    ON F.ID_EQUIPE_ATEND = EQUIPE.ID";

    $result = mysqli_query($conexao, $sql); 

    if ($result) 
    {
        $funcionario = [];
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $funcionario[] = $row;  
        }
        return $funcionario;
    } else 
    {
        return [];  
    }
}
?>