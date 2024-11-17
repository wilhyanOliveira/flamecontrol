<?php

function buscarEquipe($conexao) {
    $sql = "SELECT ID, DESCRICAO FROM T_EQUIPE_ATENDIMENTO";
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