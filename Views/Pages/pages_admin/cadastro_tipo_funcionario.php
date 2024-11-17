<?php
    session_start();

    require('/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php');
    require('/../xampp/htdocs/flamecontrol/Controlers/listas/lista_tipo_funci.php');


$tipo_user = buscarTipoUser($conexao); 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/admin_cad/backgroud_cad_admin.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/cad_tipo_funci.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/style_popup/popups_menores.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_cadastro.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_news.css">
    <script src="/../flamecontrol/Views/JS/popup.js" defer></script>
    <title>Tipo do funcionario</title>
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
            <button class="btn" id="new_tipo_funci">Novo Acesso</button>
        </div>
    </nav>

    <main>
    <table class="tabela">
                <thead>
                    <tr>
                        <th>ID</th> <th>Descrição</th> 
                    </tr>
                </thead>

                <tbody>

                    <?php
                    
                    if (count($tipo_user) > 0) {
                        foreach ($tipo_user as $tipo_user) {
                            echo "<tr>";
                            echo "<td>" . $tipo_user['ID'] . "</td>";
                            echo "<td>" . $tipo_user['descricao'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Nenhum cliente encontrado.</td></tr>";
                    }
                    ?>
                </tbody>
        </table>

    </main>

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

        <dialog>
        <div class="container_cadastro">

            <h1>CADASTRO DE ACESSOS</h1>

            <form action="novo_tipo_funci" method="post">

                <div class="novo_tipo_funci">
                    <div class="descri_tipo_funci">
                        <label for="descricao">Descricao</label>
                        <input type="text" placeholder="Descrição" id="descricao">
                    </div>
                    <div class="status_tipo_funci">
                        <label for="status_tipo_funci">Ativo</label>
                        <input type="checkbox" id ="status_tipo_funci">
                    </div>
                </div>
                    <div class ="buttons_tipo_funci">
                        <button class ="cancelar" class="btn" id="cancela_tipo_funci"> CANCELAR</button>
                        <button class ="salvar" class="btn" id="salvar_tipo_funci"> SALVAR</button>
                    </div>
                </div>
            </form>
        </div>
    </dialog>

    </header>
    <aside>
        </div>
    </aside>
</body>
</html>
