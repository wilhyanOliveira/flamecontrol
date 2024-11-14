<?php
/*
session_start();

if((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha'])== true))
    {
        header('location :login.php');

    }
    $logado = $_SESSION['login'];
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/atendimento.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/Cad_atendimento.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/buttons/buttons_news.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/buttons/button_cadastro.css">
    <script src="../JS/popup.js" defer></script>
    <title></title>
</head>
<body>
<header> 
        <div class="logo_empresa">
            <img src="/../flamecontrol/Views/IMG/logo_control_100.png" alt="logo">
        </div>

            <h1 class="titulo-header">Central de Atendimentos</h1> 
    </header>

    <div class="container">
        
        <aside class="menu-lateral">
 
        </aside>
  
    </div>

<footer></footer>
</body>
</html>
