<?php
/*
session_start();

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario']; 
} 
else 
{
    echo "Você não está logado.";
}
*/
require('/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php');
require('/../xampp/htdocs/flamecontrol/Controlers/consultas_atend/consulta_clie.php');
//require('/../xampp/htdocs/flamecontrol/Controlers/listas/lista_atendimentos.php');


if (isset($_GET['cliente_id'])) {
    $cliente_id = $_GET['cliente_id'];


    $dados_cliente = buscar_dados_cliente($conexao);

    if (isset($dados_cliente['erro']))
    {
        echo $dados_cliente['erro']; 
    } 
}

//$atendimentos = buscaAtendimentos($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/admin_cad/backgroud_cad_admin.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/style_popup/popups.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/atendimento.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/Cad_atendimento.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_news.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_cadastro.css">
    <script src="/../flamecontrol/Views/JS/popup.js" defer></script>
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

    </nav>

    <div class="container">
        
        <aside class="menu-lateral">
            <nav> 
                <div>
                    <div class = "seleção de dados">

                    </div>
                    <div class = "button_new">
                        <button class="btn" id="new_atendimento_clie"><b> NOVO</b></button>
                    </div>
                </div>
            </nav>
        </aside>
  
        <main>
        <div>
        <h2>Lista de Atendimentos</h2>

    
    </div>


</section>
    </div>
        
        </main>

    <dialog>
        <div class="container_cadastro">

            <h1>CADASTRO DE ATENDIMENTO</h1>

            <form action="/flamecontrol/Controlers/Cad_atendimentos/cad_atendi.php" method="post">

                <div class="selects">

                    <div class = "funci_status">
                        <select name="funcionario" id="funcionario">
                            <option value="">Funcionario</option>
                                <?php foreach ($motivos as $motivo): ?>
                                    <option value="<?php echo htmlspecialchars($motivo['id']); ?>">
                                        <?php echo htmlspecialchars($motivo['motivo']); ?>
                                    </option>
                                <?php endforeach; ?>
                        </select>

                        <select name="status" id="Status">
                            <option value="">status</option>
                                <?php foreach ($motivos as $motivo): ?>
                                    <option value="<?php echo htmlspecialchars($motivo['id']); ?>">
                                        <?php echo htmlspecialchars($motivo['motivo']); ?>
                                    </option>
                                <?php endforeach; ?>
                        </select>
                    </div>

                    <div class ="motivo_atd">
                        <select name="motivo_atend" id="motivo_atend">
                            <option value="">Selecione um motivo</option>

                                <?php foreach ($motivos as $motivo): ?>
                                    <option value="<?php echo htmlspecialchars($motivo['id']); ?>">
                                        <?php echo htmlspecialchars($motivo['motivo']); ?>
                                    </option>
                                <?php endforeach; ?>
            
                        </select>
                    </div>

                    <div class="selects_tipe">
                        <select name="tipo_atend" id="tipo_atend">
                            <option value="">Tipo</option>
                                <?php foreach ($motivos as $motivo): ?>
                                    <option value="<?php echo htmlspecialchars($motivo['id']); ?>">
                                        <?php echo htmlspecialchars($motivo['motivo']); ?>
                                    </option>
                                <?php endforeach; ?>
                        </select>

                        <select name="dificul_atend" id="dificul_atend">
                            <option value="">Dificuldade</option>
                                <?php foreach ($motivos as $motivo): ?>
                                    <option value="<?php echo htmlspecialchars($motivo['id']); ?>">
                                        <?php echo htmlspecialchars($motivo['motivo']); ?>
                                    </option>
                                <?php endforeach; ?>
                        </select>
                    </div>

                </div>

                <div class = "descricoes">
                    <label for="solicitacao">Solicitação</label>
                    <textarea name="solicitação"></textarea>
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao"></textarea>
                </div>

                <div class ="buttons">

                <button class ="cancelar"> CANCELAR</button>
                <button class ="Salvar" id="salvar_atend" type="submit"> SALVAR</button>
                </div>
            </form>

        
        </div>
    </dialog>
</body>
</html>

<script>

document.getElementById('dataForm').addEventListener('submit', function(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const info = document.getElementById('info').value;

    const card = document.createElement('div');
    card.classList.add('card');
    card.innerHTML = `<h3>${name}</h3><p>${info}</p>`;

    document.getElementById('cardContainer').appendChild(card);

    document.getElementById('dataForm').reset();
});

</script>

<?php

function buscarMotivos($conexão) {
    $sql = "SELECT id, motivo FROM motivos_atendimento"; 
    $stmt = $conexão->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>