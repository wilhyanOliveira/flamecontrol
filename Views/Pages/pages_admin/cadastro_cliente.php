<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Cadastros.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/Forms/Cad_cliente.css">
    <link rel="stylesheet" href="/../flamecontrol/Views/CSS/buttons/button_cadastro.css">
    <script src="/../flamecontrol/Views/JS/popup.js" defer></script>
    <title>Clientes</title>
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
        <div class = "button_clie">
            <button class="btn" id="new_cliente"><b> Novo cliente</b></button>
        </div>
    </div>
    </aside>
    <dialog>
        <div class="container_cadastro">

            <h1>CADASTRO DE CLIENTES</h1>

            <form action="novo_cliente" method="post">
                <div class="inf_principais">
                    <div class = "razao">
                        <input type="text" placeholder="Razão Social" id = "razao">
                        <input type="text" placeholder="Nome Fantasia" id = "fantasia" >
                    </div>
                </div>
                <div class="documentos">
                    <label for="cnpj">CNPJ/CPF</label>
                    <input type="text" placeholder="CNPJ/CPF" id = "cnpj">
                    <label for="ie">IE/RG</label>
                    <input type="text" placeholder="IE/RG" id = "ie">
                </div>
                <div class = "endereco">
                    <div class="minicipio">
                        <input type="text" placeholder="CEP" id = "cep">
                        <input type="text" placeholder="MUNICIPIO" id = "municipio">
                    </div>
                    <div class = "rua">
                        <input type="text" placeholder="RUA" id ="rua"> 
                        <input type="" placeholder="NUMERO" id = "numero">
                    </div>
                    <div class ="bairo">
                        <input type="bairo" placeholder="BAIRRO" id="bairro">
                    </div>
                    <div class="referencia"></div>
                        <input type="text" placeholder="REFERENCIA" id="referencia">   
                    </div>
                    <div class="contatos">
                        <input type="email" placeholder="EMAIL" id="email">

                        <div class=fone_cel>
                            <div class="telefone">
                                <label for="fone">TELEFONE</label>
                                <input type="text" placeholder="(__)____-____" id="fone">
                            </div>
                            <div class="tel_celular">
                                <label for="celular">CELULAR</label>
                                <input type="text" placeholder="(__)_____-____" id="celular">
                            </div>
                            <div class="revenda">
                                <label for="revenda">REVENDA</label>
                                <input type="checkbox" placeholder="revenda" id ="revendedor">
                            </div>
                        </div>
                    </div>
            <div class ="buttons_clie">
                <button class ="cancelar" id="cancela_clie"> CANCELAR</button>
                <button class ="salvar" id="salvar_clie"> SALVAR</button>
            </div>
            </form>
    </dialog>
    <main>
    </main>
    <footer></footer>
</body>
</html>
