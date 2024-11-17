<?php

function buscarEquipe($conexao)
 {
    $sql = "SELECT 
    ATEND.ID, 
    ATEND.NOME, 
    ATEND.CPF,
    SETO.DESCRICAO,
    TIPOU.DESCRICAO,
    EQUIPE.DESCRICAO

    FROM T_EQUIPE_ATENDIMENTO ATEND

    INNER JOIN T_SETOR SETO
    ON ATEND.ID_SETOR = SETO.ID 
    INNER JOIN T_TIPO_USUARIO TIPOU
    ON ATEND.ID_TIPO_USER = TIPOU.ID
    INNER JOIN T_EQUIPE_ATENDIMENTO EQUIPE
    ON ATEND.ID_EQUIPE_ATEND = EQUIPE.ID";

    $result = mysqli_query($conexao, $sql); 

    if ($result) {
        $equipes = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $equipes[] = $row;  
        }
        return $equipes;
    } else {
        return [];  
    }
}
?>