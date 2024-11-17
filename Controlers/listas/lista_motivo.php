<?php

function buscarMotivo($conexao) {
    $sql = "SELECT ID, DESCRICAO FROM T_MOTIVO_ATEND";
    $result = mysqli_query($conexao, $sql); 

    if ($result) {
        $setor = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $motivo[] = $row;  
        }
        return $motivo;
    } else {
        return [];  
    }
}
?>
