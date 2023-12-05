<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OWL - Login</title>
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
            
            <h4>Entrar</h4>

            <form action="http://localhost/Owl-artist/" method="post">
                
                <label>E-mail:</label>
                <input type="email" id="email" name="email" required placeholder="Owlartists2023@gmail.com">
                
                <label>Senha:</label>
                <input type="password" id="senha" name="senha" required placeholder="1234">
        
                <div class="termos">
                    <div class="term">
                        <input type="checkbox" id="concordo" name="concordo" required>
                        <a>Ao clicar você concorda com os termos de uso da Owl Apps</a>
                    </div>
                    <a href="https://accounts.google.com/v3/signin/identifier?authuser=0&continue=https%3A%2F%2Fwww.google.com%2Fsearch%3Fq%3Desqueceu%2Ba%2Bsenha%26oq%3Desquceu%2Ba%2B%26aqs%3Dchrome.1.69i57j0i13i512l9.4037j0j9%26sourceid%3Dchrome%26ie%3DUTF-8&ec=GAlAAQ&hl=pt-BR&flowName=GlifWebSignIn&flowEntry=AddSession&dsh=S218608074%3A1692923971405584" id="esqueceu"> Esqueceu a senha? Clique Aqui </a>
                </div>
                <div class="but">
                    <button class="botoes" id="ce">Entrar</button>
                    <a href="http://localhost/Owl-artist/criarconta" class="botoes" id="v">Voltar</a>
                </div>
            </form>
        </div>
    </div>
    <script src="http://localhost/Owl-artist/public/js/script.js"></script>

</body>
</html>
