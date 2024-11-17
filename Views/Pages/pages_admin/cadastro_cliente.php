<?php
session_start();

require('/../xampp/htdocs/flamecontrol/Models/ConexaoBD/conexao.php');
require('/../xampp/htdocs/flamecontrol/Controlers/listas/lista_cliente.php');


$clientes = buscarClientes($conexao); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/admin_cad/backgroud_cad_admin.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/Cad_cliente.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_cadastro.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/botoes/button_news.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/style_popup/popups.css">
    <script src="/../flamecontrol/Views/JS/popup.js" defer></script>
    <title>Clientes</title>
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
            <button class="btn" id="new_funcionario">Novo Cliente</button>
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

        <dialog>
            <div class="container_cadastro">

                <h1>CADASTRO DE CLIENTES</h1>

                <form action="/flamecontrol/Controlers/cadastros_admin/cad_clie.php" method="post">
                    <div class="inf_principais">
                        <div class="razao">
                            <input type="text" name="razao" placeholder="Razão Social" id="razao" required>
                            <input type="text" name="fantasia" placeholder="Nome Fantasia" id="fantasia" required>
                        </div>
                    </div>
                    <div class="documentos">
                        <label for="cnpj">CNPJ/CPF</label>
                        <input type="text" name="cnpj" placeholder="CNPJ/CPF" id="cnpj" required>
                        <label for="ie">IE/RG</label>
                        <input type="text" name="ie" placeholder="IE/RG" id="ie" required>
                    </div>
                    <div class="endereco">
                        <div class="minicipio">
                            <input type="text" name="cep" placeholder="CEP" id="cep" required>
                            <input type="text" name="municipio" placeholder="MUNICIPIO" id="municipio" required>
                            <input type="text" name="uf" placeholder="UF" id="uf" required>
                        </div>
                        <div class="rua">
                            <input type="text" name="rua" placeholder="RUA" id="rua" required>
                            <input type="text" name="numero" placeholder="NUMERO" id="numero" required>
                        </div>
                        <div class="bairro">
                            <input type="text" name="bairro" placeholder="BAIRRO" id="bairro" required>
                        </div>
                        <input type="text" name="referencia" placeholder="REFERENCIA" id="referencia">
                    </div>
                    <div class="email">

                        <input type="email" name="email" placeholder="EMAIL" id="email" required>
                    </div>


                    <div class="contatos">
                        
                        <div class="fone_cel">
                            <div class="telefone">
                                <label for="fone">TELEFONE</label>
                                <input type="tel" name="fone" placeholder="(__)____-____" id="fone" required>
                            </div>

                            <div class="tel_celular">
                                <label for="celular">CELULAR</label>
                                <input type="tel" name="celular" placeholder="(__)_____-____" id="celular" required>
                            </div>

                            <div class="atividade">
                                <label for="ramo_ativi">Atividade</label>
                                <input type="text" name="atividade" placeholder="Atividade" id="atividade" required>
                            </div>
                        </div>

                    </div>
                            <div class="revenda">
                                <label for="revenda">REVENDA</label>
                                <input type="checkbox" name="revendedor" id="revendedor">
                                <label for="status">ATIVO</label>
                                <input type="checkbox" name="ativo" id="status" value="on">
                            </div>
                    </div>
                    <div class="buttons_clie">
                        <button type="button" class="btn" id="cancela_funci">CANCELAR</button>
                        <button type="submit" class="btn" id="salvar_funci">SALVAR</button>
                    </div>
                </form>
        </dialog>
    </div>
</body>

</html>