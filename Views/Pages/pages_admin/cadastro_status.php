<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Cadastros.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/cad_status.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/buttons/buttons_news.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/buttons/button_cadastro.css">
    <script src="/../flamecontrol/Views/JS/popup.js" defer></script>
    <title>Status de Atendimento</title>
</head>
<body> 
    <header> 
        <div class="logo_empresa" >
            <img src="/../flamecontrol/Views/IMG/logo_control_100.png" alt="logo">
        </div>
    <nav> 
        <ul class="exo-menu">
                <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_cliente.php"><i class="fa fa-cogs"></i> CLIENTES</a></li>
                <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_funcionarios.php"><i class="fa fa-cogs"></i> FUNCIONARIOS</a>
                <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_equipe.php"><i class="fa fa-cogs"></i> EQUIPE</a>
                <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_dificldade.php"><i class="fa fa-cogs"></i>  DIFICULDADE</a>
                <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_setor.php"><i class="fa fa-cogs"></i> SETOR</a>
                <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_status.php"><i class="fa fa-cogs"></i> STATUS</a>
                <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_tipo_atend.php"><i class="fa fa-cogs"></i> TIPOS</a>
                <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_motivo_atenid.php"><i class="fa fa-cogs"></i> MOTIVOS</a>
                <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_tipo_funcionario.php"><i class="fa fa-cogs"></i> ACESSOS</a>
                <li class="drop-down"><a href="/../flamecontrol/Views/Pages/pages_admin/cadastro_tipo_atend.php"><i class="fa fa-cogs"></i> TIPO ATENDIMENTO</a>
            
    </nav>

    </header>
    <aside>
    <div>
        <div class = "button_status">
            <button class="btn" id="new_setor"><b> Novo Status</b></button>
        </div>
    </div>
    </aside>
    
        <dialog>
            <div class="container_cadastro">

                <h1>CADASTRO DE STATUS DE ATENDIMENTO</h1>

                <form action="novo_status" method="post">

                <div class="novo_status">
                    <div class="descri_status">
                        <label for="descricao">Descricao</label>
                        <input type="text" placeholder="Descrição" id="descricao">
                    </div>
                    <div class="status_status">
                        <label for="status_status">Ativo</label>
                        <input type="checkbox" id ="status_status">
                    </div>
                </div>
                    <div class ="buttons_status">
                        <button class ="cancelar" id="cancela_status"> CANCELAR</button>
                        <button class ="salvar" id="salvar_status"> SALVAR</button>
                    </div>
            </div>
            </form>

            </div>

        </dialog>
    <main>
    </main>
    <footer>rodapé</footer>
</body>
</html>
