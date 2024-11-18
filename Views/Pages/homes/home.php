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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/home/home.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_news.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_cadastro.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_pesquisa.css">

    <script src="../JS/popup.js" defer></script>
    <title>Atendimento</title>
</head>
<body>
<header> 
        <div class="logo_empresa">
            <img src="/../flamecontrol/Views/IMG/logo_control_100.png" alt="logo">
        </div>

            <h1 class="titulo-header">Central de Atendimentos</h1> 
    </header>

    <nav class="menu-bar">
        <h1>Buscar Cliente </h1>
        <div class="consulta_clie">
            <input type="search" class="consulta" placeholder="Pesquisa por CNPJ" id="pesquisar">
        </div>
        <button class ="btn" id="btn_pesquisar" name="buscar_cliente" > BUSCAR </button>
    </nav>


    <div class="container">
        
        <aside class="menu-lateral">
 
        </aside> 
  
    </div>

    <main>

    </main>
</body>
</html>
