<?php
    session_start();

    require('/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php');
    require('/../xampp/htdocs/flamecontrol/Controlers/listas/lista_setor.php');

    $setor = buscarSetor($conexao);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/admin_cad/backgroud_cad_admin.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/cad_setor.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/style_popup/popups_menores.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_news.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_cadastro.css">
    <script src="/../flamecontrol/Views/JS/popup.js" defer></script>
    <title>Setores</title>
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
            <button class="btn" id="new_setor">Novo Setor</button>
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
                    if (count($setor) > 0) {
                        foreach ($setor as $item) 
                        {
                        echo "<tr>";
                        echo "<td>" . $item['ID'] . "</td>";
                        echo "<td>" . $item['DESCRICAO'] . "</td>";  
                        echo "</tr>";
                        }

                    } 
                    else 
                    {
                    echo "<tr><td colspan='2'>Nenhum setor encontrado.</td></tr>";
                    }
?>
                </tbody>
        </table>
    </main>

        <dialog>
           
        <div class="container_cadastro">

                <h1>CADASTRO DE SETORES</h1>

            <form action="/flamecontrol/Controlers/cadastros_admin/cad_setor.php" method="post">

                <div class="novo_setor">
                    <div class="descri_setor">
                        <label for="descricao">Descricao</label>
                        <input type="text" placeholder="Descrição" id="descricao" name="descricao">
                    </div>
                    <div class="status_setor">
                        <label for="status_setor">Ativo</label>
                        <input type="checkbox" id="status_setor" name="id_setor">
                    </div>
                </div>
    
                <div class="buttons_setor">
                    <button class="cancelar" id="cancela_setor" name="cancela_setor"> CANCELAR</button>
                    <button class="salvar" id="salvar_setor"  type="submit" > SALVAR</button>
                </div>
    
            </form>
        </div>

        </dialog>
</body>
</html>
