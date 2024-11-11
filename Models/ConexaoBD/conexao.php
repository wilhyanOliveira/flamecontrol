<?php
$conexao = mysqli_connect('localhost', 'root', 'will', 'ControlAtendimento');

if ($conexao->connect_errno) 
{
	echo "Falha na MySQL: (" . $conexao->connect_errno . ") " . $conexao->connect_error;
}
?>
