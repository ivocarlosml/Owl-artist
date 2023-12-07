<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OWL - Cadastro</title>
<link rel="stylesheet" href="http://localhost/Owl-artist/public/css/cadastrologin.css">
<link rel="stylesheet" href="http://localhost/Owl-artist/public/css/efects.css">
</head>
<body>

    <div class="container">
            <img class="" id="postP" src="http://localhost/Owl-artist/public/assets/R.jpg" alt="" srcset="">
            <div class="container-logcad">
                <img src="http://localhost/Owl-artist/public/assets/imagens/clperfil.png" alt="logo" class="logcad">
                <h1>Bem-vindo a OWL</h1>
                <div class="redes-logcad"> 
                    <div class="gf-logcad"id="gg">
                        <img src="http://localhost/Owl-artist/public/assets/imagens/google.png" alt="google">
                        <h5>Google</h5>
                    </div>
                    <div class="gf-logcad" id="ff">
                        <img src="http://localhost/Owl-artist/public/assets/imagens/clfacebook.webp" alt="facebook">
                        <h5>Facebook</h5>
                    </div>
                </div>
                <hr>
                
                <h4>Cadastre-se</h4>
                <?=flash()?>
                <form method="POST" action="<?=linkrota('cadastrarconta')?>">
                    <label>Nome:</label>
                        <input type="text"  id="nome" name="nome"  placeholder="Corujinha" value="<?=getValue('nome')?>" 
                    >
                    <label>E-mail:</label>
                        <input type="email" id="email" name="email" placeholder="Owlartists2023@gmail.com" value="<?=getValue('email')?>">
                    
                    <label>Senha:</label>
                       <input type="password" id="senha" name="senha"  placeholder="1234" >
                    
                    <label>Telefone:</label>
                        <input type="tel"  id="telefone" name="telefone"  placeholder="+55 77 999999999" value="<?=getValue('telefone')?>">
                    
                    <div class="termos">
                            <div class="term">
                                <input type="checkbox" id="concordo" name="termosdeuso" value = 1 <?=checked('termosdeuso',1)?>>
                                <a>Ao clicar você concorda com os  termos de uso da Owl Apps</a>
                            </div>
                            <a href="login.html" id="esqueceu"> Já é cadastrado? Clique Aqui </a>
                    </div>
                    <div class="but">
                    <button  class="botoes" id="ce">Cadastrar</button>
                    <a href="http://localhost/Owl-artist/login"class="botoes" id="v">Voltar</a>
                    </div>
                </form>

                
            </div>
    </div>
    <script src="http://localhost/Owl-artist/public/js/script.js"></script>
</body>
</html>
