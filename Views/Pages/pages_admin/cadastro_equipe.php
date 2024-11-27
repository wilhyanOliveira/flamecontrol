<?php
    session_start();

require('/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php');
require('/../xampp/htdocs/flamecontrol/Controlers/listas/lista_equipe.php');


$equipes = buscarEquipe($conexao); 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/admin_cad/backgroud_cad_admin.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/cad_equipe.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/style_popup/popups_menores.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_news.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_cadastro.css">
    <script src="/../flamecontrol/Views/JS/popup.js" defer></script>
    <title>Equipes</title>
</head>
<body>
    <header>
        <div class="logo_empresa">
            <img src="/../flamecontrol/Views/IMG/logo_control_100.png" alt="logo">
        </div>

        <h1 class="titulo-header">Central de Atendimentos</h1>
    </header>

    <nav class="menu-bar">
        <div class="crud_button">
            <button class="btn" id="new_equipe">Nova Equipe</button></li>
        </div>
    </nav>

    <div class="container">

        <aside class="menu-lateral">
            <nav>
                <ul class="exo-menu">
                    <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_cliente.php"><i class="fa fa-cogs"></i> CLIENTES</a></li>
                    <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_funcionarios.php"><i class="fa fa-cogs"></i> FUNCIONÁRIOS</a></li>
                    <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_equipe.php"><i class="fa fa-cogs"></i> EQUIPE</a></li>
                    <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_dificldade.php"><i class="fa fa-cogs"></i> DIFICULDADE</a></li>
                    <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_setor.php"><i class="fa fa-cogs"></i> SETOR</a></li>
                    <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_status.php"><i class="fa fa-cogs"></i> STATUS</a></li>
                    <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_tipo_atend.php"><i class="fa fa-cogs"></i> TIPOS</a></li>
                    <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_motivo_atenid.php"><i class="fa fa-cogs"></i> MOTIVOS</a></li>
                    <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_tipo_funcionario.php"><i class="fa fa-cogs"></i> ACESSOS</a></li>
                    <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_tipo_atend.php"><i class="fa fa-cogs"></i> TIPO ATENDIMENTO</a></li>
                </ul>
            </nav>
        </aside>

    <main>
        <table class="tabela">
                <thead>
                    <tr>
                        <th>ID</th> <th>Descrição</th> 
                    </tr>
                </thead>

                <tbody>
                <?php
if (count($equipes) > 0) 
{
    foreach ($equipes as $equipe) 
    { 
        echo "<tr>";
        echo "<td>" . $equipe['ID'] . "</td>";  
        echo "<td>" . $equipe['DESCRICAO'] . "</td>";  
        echo "</tr>";
    }
} else 
{
    echo "<tr><td colspan='2'>Nenhuma equipe encontrada.</td></tr>";
}
?>
                </tbody>
        </table>
    </main>

    <dialog>
        <div class="container_cadastro">

            <h1>CADASTRO DE EQUIPES</h1>

            <form action="/flamecontrol/Controlers/cadastros_admin/cad_equipes.php" method="post">

                <div class="novo_equipe">
                    <div class="descri_equipe">
                        <label for="descricao">Descricao</label>
                        <input type="text" placeholder="Descrição" id="descricao" name="descricao">
                    </div>
                    <div class="status_equipe">
                        <label for="status_equipe">Ativo</label>
                        <input type="checkbox" id ="status_equipe">
                    </div>
                </div>
                    <div class ="buttons_equipe">
                        <button class ="cancelar" class="btn" id="cancela_equipe"> CANCELAR</button>
                        <button class ="salvar" class="btn" id="salvar_equipe" type="submit"> SALVAR</button>
                    </div>
                </div>
            </form>
        </div>
    </dialog>
</body>
</html>
