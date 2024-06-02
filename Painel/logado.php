<?php
if (isset($_GET['loggout'])) {
    Painel::loggout();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoBag Painel</title>
    <link rel="stylesheet" href="../css/Painel/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <div class="barra-lateral">
        <div class="box-usuario">
            <div class="avatar-usuario">
                <i class="icon-usuario"></i>
            </div><!-- avatar-->
            <div class="nome-usuario">
                <p><?php echo $_SESSION['nome'];?></p>
            </div>
        </div><!-- box-usuario-->
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

</body>

</html>