<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=css('style')?>">
    <link rel="stylesheet" href="<?=css('cadastrologin')?>">
    <link rel="stylesheet" href="<?=css('configuracoes')?>">
    <link rel="stylesheet" href="<?=css('dimensionamento')?>">
    <link rel="stylesheet" href="<?=css('perfil')?>">
    <link rel="stylesheet" href="<?=css('botaoThemeBw')?>">
    <link rel="stylesheet" href="<?=css('efects')?>">
    <title>OWl - Artes</title>
</head>
<body >
    <header id="header">
       
        <div class="trasintionSuave"id="divisor">
        <div class="user-profile">
            <a href="login.html">
                <img classe ="iconInicial"src="assets/imagens/clperfil.png" alt="Perfil do Usuário">
            </a>
            
            <div class="detalhesPerfil">
                <a href="perfil.html"><div id="nome"><p>Convidado0909</p></div></a>
                <a href="login.html">
                <div id="tipoDeArte"><p>Seja um artista</p></div>
                </a>
            </div>
            
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Pesquisar">
        </div>
        </div>
        <div class="icon-group">
            <input type="checkbox" class="toggle"onclick="turnColorPage()"id="btnTurnMode"type="button">
           <a href=""><img class="icon" src="assets/suporte.png" alt="Ícone 1"></a>
            <a href=""><img class="icon" src="assets/criar.png" alt="Ícone 2"></a>
            <a href="configuracoes.html"><img class="icon" src="assets/config.png" alt="Ícone 3"></a>
            <a href=""><img class="icon"src="assets/menu.png" alt="Ícone 4"></a>
            
            
        </div>
        
    </header>