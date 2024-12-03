<?php
session_start();  

require('/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php');
require('/../xampp/htdocs/flamecontrol/Controlers/consultas_atend/consulta_clie.php');

if (isset($_GET['cliente_id'])) {
    $cliente_id = $_GET['cliente_id'];  
    $_SESSION['cliente_id'] = $cliente_id;
}

$dados_cliente = buscar_dados_cliente($conexao);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/home/home_clie.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_news.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_cadastro.css">
    <link rel="stylesheet" href="/flamecontrol/Views/CSS/botoes/button_pesquisa.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/style_popup/popups_menores.css">
    <link rel="stylesheet" href="/flamecontrol/Views/CSS/atendimento/lista_Atendimento.css">
    <script src="/../flamecontrol/Views/JS/popup.js" defer></script>

    <title>CLIENTE</title>
</head>
<body> 
<header> 

        <div class="logo_empresa">
            <img src="/../flamecontrol/Views/IMG/logo_control_100.png" alt="logo">
        </div>
        <h1 class="titulo-header">Central de Atendimentos</h1> 

</header>
    <nav class="menu-bar">

    </nav>

    <div class="container">
        <aside class="menu-lateral">
        <div>
            <div class="button_new">
                <div class= "button_atendimentos">
                    <a href="/../flamecontrol/Views/Pages/atendimento/atendimento.php?cliente_id=<?php echo $_SESSION['cliente_id']; ?>">
                         <button class="btn" id="atendimentos"><b> Atendimentos</b></button>
                     </a>
                </div>

                <div class="button_funci_clie">
                    <button class="btn" id="new_funci_clie"><b> Funcionário</b></button>
                </div>
            </div>
        </div>
        
        </aside>
    </div>

<main>
    <?php
    if (isset($dados_cliente['erro'])) {
        echo "<p><strong>Erro:</strong> " . $dados_cliente['erro'] . "</p>";
    } else {
        echo "<p><strong>ID:</strong> " . $dados_cliente['id'] . "</p>";
        echo "<p><strong>Razão Social:</strong> " . $dados_cliente['razao_social'] . "</p>";
        echo "<p><strong>Nome Fantasia:</strong> " . $dados_cliente['nome_fantasia'] . "</p>";
        echo "<p><strong>CNPJ:</strong> " . $dados_cliente['cnpj'] . "</p>";
        echo "<p><strong>Inscrição Estadual (IE):</strong> " . $dados_cliente['ie'] . "</p>";
        echo "<p><strong>Email:</strong> " . $dados_cliente['email'] . "</p>";
        echo "<p><strong>Telefone:</strong> " . $dados_cliente['telefone'] . "</p>";
        echo "<p><strong>Celular:</strong> " . $dados_cliente['celular'] . "</p>";
        echo "<p><strong>CEP:</strong> " . $dados_cliente['cep'] . "</p>";
        echo "<p><strong>Município:</strong> " . $dados_cliente['municipio'] . "</p>";
        echo "<p><strong>Endereço:</strong> " . $dados_cliente['endereco'] . "</p>";
        echo "<p><strong>Bairro:</strong> " . $dados_cliente['bairro'] . "</p>";
        echo "<p><strong>Referência:</strong> " . $dados_cliente['referencia'] . "</p>";
    }
    ?>
</main>

        <dialog>
            <div class="container_cadastro">

                <h1>FUNCIONARIOS</h1>

                <form action="/flamecontrol/Controlers/cad_atendimentos/cad_funci_clie.php" method="post">

                <div class="novo_funci_clie">
                    <div class="nome_funci_clie">
                        <label for="descricao">Descricao</label>
                        <input type="text" placeholder="Descrição" id="descricao" name="DESCRICAO">
                    </div>
                    <div class="status_funci_clie">
                        <label for="status_funci_clie">Ativo</label>
                        <input type="checkbox" id ="status_funci_clie" name="ativo">
                    </div>
                </div>
                    <div class ="buttons_funci_clie">
                        <button class ="cancelar" id="cancela_funci_clie" name="cancela_funci_clie"> CANCELAR</button>
                        <button class ="salvar" id="salvar_funci_clie" name = "salvar_funci_clie" type="submit"> SALVAR</button>
                    </div>
            </div>
            </form>
            </div>

        </dialog>
</body>
</html>
