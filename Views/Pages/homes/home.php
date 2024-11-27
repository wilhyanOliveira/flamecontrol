<?php
session_start();

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario']; 
    echo "Bem-vindo, " . $usuario['nome']; 
} 
else 
{
    echo "Você não está logado.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Central de Atendimento</title>

    <link rel="stylesheet" href="/flamecontrol/Views/CSS/home/home.css">
    <link rel="stylesheet" href="/flamecontrol/Views/CSS/botoes/button_news.css">
    <link rel="stylesheet" href="/flamecontrol/Views/CSS/botoes/button_cadastro.css">
    <link rel="stylesheet" href="/flamecontrol/Views/CSS/botoes/button_pesquisa.css">

</script>

    </script>
</head>
<body>
    <header>
        <div class="logo_empresa">
            <img src="/flamecontrol/Views/IMG/logo_control_100.png" alt="Logo">
        </div>
        <h1 class="titulo-header">Central de Atendimentos</h1>
    </header>

    <nav class="menu-bar">
        <h1>Buscar Cliente</h1>
        <form action="/../flamecontrol/Controlers/consultas_atend/consulta_clie.php" method="POST">
            <input type="text" name="cnpj" placeholder="Digite o CNPJ" required>

            <button type="submit">Consultar</button>
    </form>
    </nav>

    <div class="container">
        <aside class="menu-lateral">
            
        </aside>
    </div>

    <main>
    <div class="usuario">

  </div>
  
  <div class="atendimento_prestado">
        <h1> Atendimentos</h1>
    <table>
      <tr>
        <th>CNPJ</th>
        <th>STATUS</th>
      </tr>
   
    </table>
  </div>

  <div class="pendencias">
    <h1>Pendencias</h1>
    <table>
      <tr>
        <th>ID</th>
        <th>CLIENTE</th>
        <th>TIPO ATENDIMENTO</th>
        <th>GRAVIDADE</th>
        <th>STATUS</th>
      </tr>

    </table>
  </div>
       
    </main>
</body>
</html>

