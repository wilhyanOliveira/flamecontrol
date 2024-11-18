<?php
    session_start();

if (isset($_SESSION['cliente'])) {
    $cliente = $_SESSION['cliente']; 


    $nome = htmlspecialchars($cliente['nome']);
    $cnpj = htmlspecialchars($cliente['cnpj']);
    $endereco = htmlspecialchars($cliente['endereco']);
} else 
{
    header("location: /../flamecontrol/Views/pages/homes/home.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Views/CSS/home/home_clie.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_cadastro.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_news.css">
    <title>Admin</title>
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
            <nav> 
                <div>
                    <div class = "seleção de dados">

                    </div>
                    <div class = "button_new">
                        <button class="btn" id="new_atendimento"><b> Novo Atendimento</b></button>
                    </div>
                </div>
            </nav>
        </aside>
  
    </div>

    <main>
    <form action="some_action.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="<?php echo $nome; ?>" readonly><br><br>

        <label for="cnpj">CNPJ:</label>
        <input type="text" id="cnpj" name="cnpj" value="<?php echo $cnpj; ?>" readonly><br><br>

        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" value="<?php echo $endereco; ?>" readonly><br><br>
    </main>
</body>
</html>
