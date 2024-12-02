<?php
// Função para listar dificuldade
function lista_dificuldade($conexao) 
{
    $sql = "SELECT ID, DESCRICAO FROM T_DIFICUL_ATEND";
    $result = mysqli_query($conexao, $sql);  

    if ($result) 
    {
        
        $lista_dificuldade = [];
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $lista_dificuldade[] = $row;
        }
        print_r($lista_dificuldade);  
        return $lista_dificuldade;
    } 
    else 
    {
        return []; 
    }
}


// Função para listar tipo de atendimento
function lista_tipo_atend($conexao) 
{
    $sql = "SELECT ID, DESCRICAO FROM T_TIPO_ATENDIMENTO";
    $result = mysqli_query($conexao, $sql);  

    if ($result) 
    {
        
        $lista_tipo_atend = [];
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $lista_tipo_atend[] = $row;
        }
        return $lista_tipo_atend;
    } 
    else 
    {
        return []; 
    }
}

// Função para listar motivo de atendimento
function lista_motivo_atend($conexao) 
{
    $sql = "SELECT ID, DESCRICAO FROM T_MOTIVO_ATEND";
    $result = mysqli_query($conexao, $sql);  

    if ($result) 
    {
        
        $lista_motivo_atend = [];
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $lista_motivo_atend[] = $row;
        }
        return $lista_motivo_atend;
    } 
    else 
    {
        return []; 
    }
}

// Função para listar status
function lista_status($conexao) 
{
    $sql = "SELECT ID, DESCRICAO FROM T_STATUS_ATENDIMENTO";
    $result = mysqli_query($conexao, $sql);  

    if ($result) 
    {
        
        $lista_status = [];
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $lista_status[] = $row;
        }
        return $lista_status;
    } 
    else 
    {
        return []; 
    }
}

// Função para listar funcionário
function lista_funcionario_clie($conexao) 
{
    $sql = "SELECT ID, DESCRICAO FROM T_FUNCIO_CLIE" ;
    $result = mysqli_query($conexao, $sql);  

    if ($result) 
    {
    
        $lista_funcionario_clie = [];
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $lista_funcionario_clie[] = $row;
        }
        return $lista_funcionario_clie;
    } 
    else 
    {
        return []; 
    }
}

?>
