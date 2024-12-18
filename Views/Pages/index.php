<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/login.css">

</head>
<body>
    <div class="container"> 

        <form action="login.php" method="POST"> 

            <h1>Login</h1> 

            <div class = input-login>
                <input type="text" id="login" placeholder="Login" required>     
            </div>

            <div class = input-senha>   
                <input type="password" id="senha" placeholder="Senha" required>
             </div> 

             <button type="submit" id ="button_login" class="button-entrar">Entrar</button>
        </form>     
    </div>

</body>
</html>

<?php

include('/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
session_start();

$login = $_POST['login'] ?? null;
$senha = $_POST['senha'] ?? null;

$sql = "SELECT f.id, f.senha, f.id_tipo_user FROM t_funcionario WHERE cpf = :login";
$stmt = $conexao->prepare($sql);

$stmt->bindParam(':login', $login);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (password_verify($senha, $row['senha'])) 
    {
        $_SESSION['usuario_id'] = $row['id'];
        $_SESSION['login'] = $row['login'];
        $_SESSION['tipo_user_id'] = $row['id_tipo_user'];

        if($_SESSION['tipo_user_id'] === '1')
        {
            header('Location: /../flamecontrol/Views/Pages/homes/home/Admin.php');
            exit();
        }
        if($_SESSION['tipo_user_id'] === '2')
        {
            header('Location: /../flamecontrol/Views/Pages/homes/home/home.php');
            exit();
        }
    } 
    else 
    {
        $acessado = false;
    }
} else
{
    $acessado = false;
}
}
?>
