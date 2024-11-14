<?php
session_start();
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
            <button class="btn" id="new_cliente">Novo Cliente</button></li>
            <button class="btn">Editar </button></li>
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
                    <div class="contatos">
                        <input type="email" name="email" placeholder="EMAIL" id="email" required>
                        <div class="fone_cel">
                            <div class="telefone">
                                <label for="fone">TELEFONE</label>
                                <input type="text" name="fone" placeholder="(__)____-____" id="fone" required>
                            </div>
                            <div class="tel_celular">
                                <label for="celular">CELULAR</label>
                                <input type="text" name="celular" placeholder="(__)_____-____" id="celular" required>
                            </div>
                            <div class="atividade">
                                <input type="text" name="atividade" placeholder="atividade" id="atividade">
                            </div>
                            <div class="revenda">
                                <label for="revenda">REVENDA</label>
                                <input type="checkbox" name="revendedor" id="revendedor">
                                <label for="status">ATIVO</label>
                                <input type="checkbox" name="ativo" id="status" value="on">
                            </div>
                        </div>
                    </div>
                    <div class="buttons_clie">
                        <button type="button" class="btn" id="cancela_clie">CANCELAR</button>
                        <button type="submit" class="btn" id="salvar_clie">SALVAR</button>
                    </div>
                </form>
        </dialog>
        <main>
            <div container_grid>
                
            </div>
        </main>
        <footer></footer>
</body>

</html>