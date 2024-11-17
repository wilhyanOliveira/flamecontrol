<?php

function buscarSetor($conexao) {
    $sql = "SELECT ID, DESCRICAO FROM T_SETOR";
    $result = mysqli_query($conexao, $sql); 

    if ($result) {
        $setor = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $setor[] = $row;  
        }
        return $setor;
    } else {
        return [];  
    }
}
?>
