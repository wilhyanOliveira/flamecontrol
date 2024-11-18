<?php
    session_start();

    
    require('/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php');
    require('/../xampp/htdocs/flamecontrol/Controlers/listas/lista_motivo.php');

    $motivo = buscarMotivo($conexao);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/admin_cad/backgroud_cad_admin.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/cad_motivo.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/buttons/button_cadastro.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/buttons/buttons_news.css">
    <script src="/../flamecontrol/Views/JS/popup.js" defer></script>
    <title>Motivos de Atendimento</title>
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
            <button class="btn" id="new_motivo">Novo Motivo</button>
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
                    <th>ID</th> <th>DESCRICAO</th> 
                    </tr>
                </thead>

                <tbody>

                    <?php
                    
                    if (count($motivo) > 0) 
                    {
                        foreach ($motivo as $motivo) 
                        {
                            echo "<tr>";
                            echo "<td>" . $motivo['ID'] . "</td>";
                            echo "<td>" . $motivo['descricao'] . "</td>";
                            echo "</tr>";
                        }
                    } 
                    else 
                    {
                        echo "<tr><td colspan='6'>Nenhum motivo encontrado.</td></tr>";
                    }
                    ?>
                </tbody>
        </table>
    </main>

    <dialog>
            <div class="container_cadastro">

                <h1>CADASTRO DE MOTIVOS DE ATENDIMENTO</h1>

                <form action="novo_motivo" method="post">

                <div class="novo_motivo">
                    <div class="descri_motivo">
                        <label for="descricao">Descricao</label>
                        <input type="text" placeholder="Descrição" id="descricao">
                    </div>
                    <div class="status_motivo">
                        <label for="status_motivo">Ativo</label>
                        <input type="checkbox" id ="status_motivo">
                    </div>
                </div>
                    <div class ="buttons_motivo">
                        <button class ="cancelar" id="cancela_motivo"> CANCELAR</button>
                        <button class ="salvar" id="salvar_motivo"> SALVAR</button>
                    </div>
            </div>
            </form>
            </div>

        </dialog>
</body>
</html>
