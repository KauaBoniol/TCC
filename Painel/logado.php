<?php
if (isset($_GET['loggout'])) {
    Painel::loggout();
}

echo $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<title>EcoBag Painel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>css/jquery-ui.min.css">
    <link rel="stylesheet" href="../css/Painel/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <div class="menu">
        <div class="box-usuario">
            <div class="avatar-usuario">
                <i class="icon-usuario"></i>
            </div><!-- avatar-->
            <div class="nome-usuario">
                <p><?php echo $_SESSION['usuario'];?></p>
                <p>teste<p>
            </div>
        </div><!-- box-usuario-->

        <div class="items-menu">
		<h2>Cadastro</h2>
		<a <?php selecionadoMenu('cadastrar-depoimento'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-depoimento">Cadastrar Depoimento</a>
		<a <?php selecionadoMenu('cadastrar-servico'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-servico">Cadastrar Serviço</a>
		<a <?php selecionadoMenu('cadastrar-slides'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-slides">Cadastrar Slides</a>
		<br>
      
        <h2>Administração do painel</h2>
		<a <?php selecionadoMenu('editar-usuario'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-usuario">Editar Usuário</a>
		<a <?php selecionadoMenu('adicionar-usuario'); ?> <?php verificaPermissaoMenu(2); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>adicionar-usuario">Adicionar Usuário</a>
		<br>
        <h2>Configuração Geral</h2>
		<a <?php selecionadoMenu('editar-site'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>editar-site">Editar Site</a>
		<br>
        <h2>Gestão de clientes</h2>
		<a <?php selecionadoMenu('cadastrar-clientes'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-clientes">Cadastrar Clientes</a>
		<a <?php selecionadoMenu('gerenciar-clientes'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>gerenciar-clientes">Gerenciar Clientes</a>
		<br>
        
        <h2>Controle Financeiro</h2>
		<a <?php selecionadoMenu('visualizar-pagamentos'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>visualizar-pagamentos">Visualizar Pagamentos</a>
		<br>
        
        <h2>Controle Estoque</h2>
		<a <?php selecionadoMenu('cadastrar-produtos'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>cadastrar-produtos">Cadastrar Produtos</a>
		<a <?php selecionadoMenu('visualizar-produtos'); ?> href="<?php echo INCLUDE_PATH_PAINEL ?>visualizar-produtos">Visualizar Produtos</a>
		</div><!--items-menu-->
	</div><!--menu-wraper-->

    </div><!-- barra-lateral-->

    <header>
        <div class="center">
            <div class="menu-btn">
                <i class="fa fa-bars"></i>
            </div><!-- menu-btn-->
            <div class="loggout">
                <a href="?loggout">sair<i class="fa fa_win"></i></a>
            </div><!-- loggout-->

            <div class="clear"></div>
        </div><!-- center-->
    </header>
    <div class="clear"></div>

<script src="<?php echo INCLUDE_PATH ?>js/jquery.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.maskMoney.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.mask.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/jquery.ajaxform.js"></script>
<script src="<?php echo INCLUDE_PATH ?>js/constants.js"></script>
<script src="<?php echo INCLUDE_PATH_PAINEL ?>js/main.js"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>


</body>

</html>