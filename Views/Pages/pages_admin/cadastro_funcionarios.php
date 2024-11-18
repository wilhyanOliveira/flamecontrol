<?php
    session_start();

require('/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php');
require('/../xampp/htdocs/flamecontrol/Controlers/listas/lista_funcionarios.php');

$funcionario = buscarFuncionario($conexao);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/admin_cad/backgroud_cad_admin.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/cad_funcionario.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_cadastro.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_news.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/style_popup/popups.css">
    <script src="/../flamecontrol/Views/JS/popup.js" defer></script>
    <title>Funcionarios</title>
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
            <button class="btn" id="new_funcionario">Novo Funcionario</button>
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
                        <th>ID</th> <th>NOME</th> <th>CPF</th> <th>SETOR</th> <th>TIPO USUARIO</th> <th>EQUIPE</th> 
                    </tr>
                </thead>
                <tbody>

                    <?php
                    
                    if (count($funcionario) > 0) {
                        foreach ($funcionario as $funcionario) {
                            echo "<tr>";
                            echo "<td>" . $funcionario['F.ID'] . "</td>";
                            echo "<td>" . $funcionario['F.NOME'] . "</td>";
                            echo "<td>" . $funcionario['F.CPF'] . "</td>";
                            echo "<td>" . $funcionario['SETO.DESCRICAO'] . "</td>";
                            echo "<td>" . $funcionario['TIPOU.DESCRICAO'] . "</td>";
                            echo "<td>" . $funcionario['EQUIPE.DESCRICAO'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>Nenhum funcionario encontrado.</td></tr>";
                    }

                    ?>
                </tbody>
            </table>
        </main>
    </main>


    <dialog>
            <div class="container_cadastro">

                <h1>CADASTRO DE CLIENTES</h1>

                <form action="/flamecontrol/Controlers/cadastros_admin/cad_funcionarios.php" method="post">

                        <div class="funcionario">
                            <input type="text" name="nome" placeholder="nome" id="nome" required>                      
                            <input type="text" name="cnpj" placeholder="CNPJ/CPF" id="cnpj" required>
                            <input type="text" name="senha" placeholder="senha" id="senha" required>
                        </div>
                    <div class="tipo">
                        <div class="minicipio">
                            <input type="text" name="cep" placeholder="CEP" id="cep" required>
                            <input type="text" name="municipio" placeholder="MUNICIPIO" id="municipio" required>
                            <input type="text" name="uf" placeholder="UF" id="uf" required>
                    </div>
                            <div class="status_funcio">
                                <label for="status">ATIVO</label>
                                <input type="checkbox" name="ativo" id="status" value="on">
                            </div>
                    </div>
                    <div class="buttons_clie">
                        <button type="button" class="btn" id="cancela_clie">CANCELAR</button>
                        <button type="submit" class="btn" id="salvar_clie">SALVAR</button>
                    </div>
                </form>
        </dialog>
</body>
</html>
