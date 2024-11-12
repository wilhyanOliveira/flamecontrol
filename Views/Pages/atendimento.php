<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/atendimento.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/Cad_atendimento.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/buttons/buttons_news.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/buttons/button_cadastro.css">
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

    <div class="container">
        
        <aside class="menu-lateral">
            <nav> 
                <div>
                    <div class = "button_new">
                        <button class="btn" id="new_atendimento"><b> Novo Atendimento</b></button>
                    </div>
                </div>
            </nav>
        </aside>
  
    </div>

    <dialog>
        <div class="container_cadastro">

            <h1>CADASTRO DE ATENDIMENTO</h1>

            <form action="novo_atendimento" method="post">

                <div class="selects">

                    <div class = "funci_status">
                        <select name="funcionario" id="funcionario">
                            <option value="">Funcionario</option>
                        </select>

                        <select name="status" id="Status">
                            <option value="">status</option>
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
                        </select>

                        <select name="dificul_atend" id="dificul_atend">
                            <option value="">Dificuldade</option>
                        </select>
                    </div>

                </div>

                <div class = "descricoes">
                    <label for="solicitacao">Solicitação</label>
                    <textarea name="solicitação"></textarea>
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao"></textarea>
                </div>

            </form>
        <div class ="buttons">
            <button class ="cancelar"> CANCELAR</button>
            <button class ="alvar" id="salvar_atend"> SALVAR</button>
        </div>
        
        </div>
    </dialog>

<footer></footer>
</body>
</html>

<script>
/*
document.getElementById('dataForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita o envio do formulário

    const name = document.getElementById('name').value;
    const info = document.getElementById('info').value;

    // Cria um novo card
    const card = document.createElement('div');
    card.classList.add('card');
    card.innerHTML = `<h3>${name}</h3><p>${info}</p>`;

    // Adiciona o card ao contêiner
    document.getElementById('cardContainer').appendChild(card);

    // Limpa o formulário
    document.getElementById('dataForm').reset();
});
*/
</script>

<?php

function buscarMotivos($conexão) {
    $sql = "SELECT id, motivo FROM motivos_atendimento"; 
    $stmt = $conexão->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

?>