<?php

function buscarTipoAtend($conexao) {
    $sql = "SELECT ID, DESCRICAO FROM T_TIPO_ATENDIMENTO";
    $result = mysqli_query($conexao, $sql); 

    if ($result) {
        $tipo_atend = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $tipo_atend[] = $row; 
        }
        return $tipo_atend;
    } else {
        return []; 
    }
}
?>