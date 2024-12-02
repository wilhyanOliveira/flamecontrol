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
require('/../xampp/htdocs/flamecontrol/Controlers/Cad_atendimentos/selects_form.php/selects_atendimentos.php');
require('/../xampp/htdocs/flamecontrol/Controlers/listas/lista_atendimentos.php');


if (isset($_GET['cliente_id'])) {
    $cliente_id = $_GET['cliente_id'];


    $dados_cliente = buscar_dados_cliente($conexao);

    if (isset($dados_cliente['erro']))
    {
        echo $dados_cliente['erro']; 
    } 
}

$lista_atendimentos = buscaAtendimentos($conexao);
$lista_funcionario_clie = lista_funcionario_clie($conexao);
$lista_status = lista_status($conexao);
$lista_dificuldade = lista_dificuldade($conexao);
$lista_motivo_atend = lista_motivo_atend($conexao);
$lista_tipo_atend = lista_tipo_atend($conexao);

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
    <link rel="stylesheet" href="/flamecontrol/Views/CSS/botoes/button_news.css">
    <link rel="stylesheet" href="/flamecontrol/Views/CSS/botoes/button_cadastro.css">
    <link rel="stylesheet" href="/flamecontrol/Views/CSS/botoes/button_pesquisa.css">
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
                
                    <div class="button_novo_atendimento"></div>
                        <div class = "button_new">
                            <button class="btn" id="new_atendimento_clie"><b> Novo atendimento</b></button>
                        </div>
                    </div>
                
        </aside>
  
        <main>
        <div>
        <h2>Lista de Atendimentos</h2>

        <section id="atendimentos" class="section">
            <?php foreach ($lista_atendimentos as $atendimentos): ?>

        <section id="atendimento-<?php echo $atendimentos['id']; ?>" class="atendimento">
            
            <details>
            <summary>
                    <div class="atendimento-info">
                        <!-- Campo: a.ID -->
                        <div class="info-item">
                            <strong>ID:</strong> <?php echo $atendimento['a.ID']; ?>
                        </div>
                        <!-- Campo: a.DT_HR_CAD -->
                        <div class="info-item">
                            <strong>Data Cadastro:</strong> <?php echo $atendimento['a.DT_HR_CAD']; ?>
                        </div>
                        <!-- Campo: a.SOLICITAÇÃO_CLIE -->
                        <div class="info-item">
                            <strong>Solicitação:</strong> <?php echo $atendimento['a.SOLICITAÇÃO_CLIE']; ?>
                        </div>
                        <!-- Campo: a.DESCRICAO -->
                        <div class="info-item">
                            <strong>Descrição:</strong> <?php echo $atendimento['a.DESCRICAO']; ?>
                        </div>
                        <!-- Campo: ta.DESCRICAO -->
                        <div class="info-item">
                            <strong>Tipo Atendimento:</strong> <?php echo $atendimento['ta.DESCRICAO']; ?>
                        </div>
                        <!-- Campo: sa.DESCRICAO -->
                        <div class="info-item">
                            <strong>Status Atendimento:</strong> <?php echo $atendimento['sa.DESCRICAO']; ?>
                        </div>
                        <!-- Campo: da.DESCRICAO -->
                        <div class="info-item">
                            <strong>Dificuldade Atendimento:</strong> <?php echo $atendimento['da.DESCRICAO']; ?>
                        </div>
                        <!-- Campo: ma.DESCRICAO -->
                        <div class="info-item">
                            <strong>Motivo Atendimento:</strong> <?php echo $atendimento['ma.DESCRICAO']; ?>
                        </div>
                        <!-- Campo: fc.DESCRICAO -->
                        <div class="info-item">
                            <strong>Funcionário Cliente:</strong> <?php echo $atendimento['fc.DESCRICAO']; ?>
                        </div>
                        <!-- Campo: f.NOME -->
                        <div class="info-item">
                            <strong>Funcionário:</strong> <?php echo $atendimento['f.NOME']; ?>
                        </div>
                        <!-- Campo: c.ID -->
                        <div class="info-item">
                            <strong>ID Cliente:</strong> <?php echo $atendimento['c.ID']; ?>
                        </div>
                    </div>
                </summary>
            
            </details>

        </section>
    <?php endforeach; ?>
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
                                <?php foreach ($lista_funcionario_clie as $funcionario_clie): ?>
                                    <option value="<?=$funcionario_clie['ID'] ?>"><?=$funcionario_clie['DESCRICAO'] ?></option>
                                <?php endforeach; ?>
                        </select>

                        <select name="status" id="Status">
                            <option value="">status</option>
                                <?php foreach ($lista_status as $status): ?>
                                    <option value="<?=$status['ID'] ?>"><?=$status['DESCRICAO'] ?></option>
                                <?php endforeach; ?>
                        </select>
                    </div>

                    <div class ="motivo_atd">
                        <select name="motivo_atend" id="motivo_atend">
                            <option value="">Selecione um motivo</option>
                                <?php foreach ($lista_motivo_atend as $motivo): ?>
                                    <option value="<?=$motivo['ID'] ?>"><?=$motivo['DESCRICAO'] ?></option>
                                <?php endforeach; ?>
            
                        </select>
                    </div>

                    <div class="selects_tipe">
                        <select name="tipo_atend" id="tipo_atend">
                            <option value="">Tipo</option>
                            <?php foreach ($lista_tipo_atend as $tipo_atend): ?>
                                <option value="<?=$tipo_atend['ID'] ?>"><?=$tipo_atend['DESCRICAO'] ?></option>
                            <?php endforeach; ?>
                        </select>

                        <select name="dificul_atend" id="dificul_atend">
                            <?php foreach ($lista_dificuldade as $dificuldade): ?>
                                <option value="<?=$dificuldade['ID'] ?>"><?=$dificuldade['DESCRICAO'] ?></option>
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

                <button class ="cancelar" name="cancelar"> CANCELAR</button>
                <button class ="Salvar" id="salvar_atend" type="submit" name="salvar"> SALVAR</button>
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