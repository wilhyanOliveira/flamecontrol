<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/admin_cad/backgroud_cad_admin.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/cad_equipe.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/buttons/button_cadastro.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/buttons/buttons_news.css">
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
        <ul>
            <li><button class="btn">Incluir</button></li>
            <li><button class="btn">Editar</button></li>
        </ul>
    </nav>

<!--
    <nav class="menu-bar">
    <div>
        <div class = "button_equipe">
            <button class="btn" id="new_equipe"><b> Nova Equipe</b></button>
            <button class="btn" id="alter_equipe"><b> Editar Equipe</b></button>
        </div>
    </div>
-->
    </nav>
    <main>
        
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
    <aside>
    <div>
        <div class = "button_equipe">
            <button class="btn" id="new_equipe"><b> Nova Equipe</b></button>
        </div>
    </div>
    </aside>
    <dialog>
        <div class="container_cadastro">

            <h1>CADASTRO DE EQUIPES</h1>

            <form action="novo_equipe" method="post">

                <div class="novo_equipe">
                    <div class="descri_equipe">
                        <label for="descricao">Descricao</label>
                        <input type="text" placeholder="Descrição" id="descricao">
                    </div>
                    <div class="status_equipe">
                        <label for="status_equipe">Ativo</label>
                        <input type="checkbox" id ="status_equipe">
                    </div>
                </div>
                    <div class ="buttons_equipe">
                        <button class ="cancelar" id="cancela_equipe"> CANCELAR</button>
                        <button class ="salvar" id="salvar_equipe"> SALVAR</button>
                    </div>
                </div>
            </form>
        </div>
    </dialog>
</body>
</html>
