<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/admin_cad/backgroud_cad_admin.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/cad_setor.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/buttons/buttons_news.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/buttons/button_cadastro.css">
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
        <ul>
            <li><button class="btn">Incluir</button></li>
            <li><button class="btn">Editar</button></li>
        </ul>
    </nav>

    <main>
    <table class="tabela">
                <thead>
                    <tr>
                        <th>ID</th> <th>Razão Social</th> <th>Nome Fantasia</th> <th>CNPJ</th> <th>Email</th> <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    
                    if (count($clientes) > 0) {
                        foreach ($clientes as $cliente) {
                            echo "<tr>";
                            echo "<td>" . $cliente['ID'] . "</td>";
                            echo "<td>" . $cliente['RAZAO_SOCIAL'] . "</td>";
                            echo "<td>" . $cliente['NOME_FANTASIA'] . "</td>";
                            echo "<td>" . $cliente['CNPJ'] . "</td>";
                            echo "<td>" . $cliente['EMAIL'] . "</td>";
                            echo "<td>" . $cliente['TELEFONE'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Nenhum cliente encontrado.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </main>
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

    </header>
    <aside>
    <div>
        <div class = "button_setor">
            <button class="btn" id="new_setor"><b> Novo Setor</b></button>
        </div>
    </div>
    </aside>
        <dialog>
           
        <div class="container_cadastro">

                <h1>CADASTRO DE EQUIPES</h1>

            <form action="novo_equipe" method="post">

                <div class="novo_setor">
                    <div class="descri_setor">
                        <label for="descricao">Descricao</label>
                        <input type="text" placeholder="Descrição" id="descricao">
                    </div>
                    <div class="status_setor">
                        <label for="status_setor">Ativo</label>
                        <input type="checkbox" id="status_equipe">
                    </div>
                </div>
    
                <div class="buttons_equipe">
                    <button class="cancelar" id="cancela_setor"> CANCELAR</button>
                    <button class="salvar" id="salvar_setor"> SALVAR</button>
                </div>
    
            </form>
        </div>

        </dialog>
</body>
</html>
