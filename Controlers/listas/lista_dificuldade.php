<?php

function buscarDificuldade($conexao) {
    $sql = "SELECT ID, DESCRICAO FROM T_DIFICUL_ATEND";
    $result = mysqli_query($conexao, $sql); 

    if ($result) 
    {
        $dificuldade = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $dificuldade[] = $row;  
        }
        return $dificuldade;
    } else {
        return [];  
    }
}
?>