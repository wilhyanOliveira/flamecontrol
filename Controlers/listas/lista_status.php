<?php

function buscarStatus($conexao) {
    $sql = "SELECT ID, DESCRICAO FROM T_STATUS_ATENDIMENTO";
    $result = mysqli_query($conexao, $sql); 

    if ($result) {
        $status = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $status[] = $row;  
        }
        return $status;
    } else {
        return [];  
    }
}
?>