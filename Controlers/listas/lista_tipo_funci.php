<?php

function buscarTipoUser($conexao) {
    $sql = "SELECT ID, DESCRICAO FROM T_TIPO_USUARIO";
    $result = mysqli_query($conexao, $sql); 

    if ($result) {
        $tipo_user = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $tipo_user[] = $row; 
        }
        return $tipo_user;
    } else {
        return []; 
    }
}
?>