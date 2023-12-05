<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=css('configuracoes')?>">
    <link rel="stylesheet" href="<?=css('dimensionamento')?>">

    <title>Owl Artist - ajustes</title>
</head>
<body>
    <header>
        
         <a href="configuracoes.html" class="interna" >
                <img src="http://localhost/Owl-artist/public/assets/engBrancaFormated.png" class="logos" id="logoEngrenagem">
                <h2 id="titulo">Ajustes</h2>
        </a>

        <div class="iconesDireita">
                <a  id="menuLink" >
                    <img src="http://localhost/Owl-artist/public/assets/menuBrancoFormated.png" class="logos" id="menu">
                </a>

             <div class="itens">
                <a href="http://localhost/Owl-artist/" class="linkCasa" id="casa" >
                    <img src="http://localhost/Owl-artist/public/assets/menu.png" class="logos">
                </a>
            </div>

        </div >
    </header>
<div class="division">
    <aside id="menuAside">
        <div class="parteUsuario">
            <img src="http://localhost/Owl-artist/public/assets/mulher.png" id="fotoUser">
            <div class="infoUser">
                <p class="user"><strong>Laura Maria Silva</strong></p>
                <p class="user">lauramariasilva2023@gmail.com</p>
            </div>

        </div>
          
        <div class="geralTopicos">
            <p class="topicos">Básicos</p>
            <p class="pontes"> <a href=" " class="linkPonte"> Mecanismo de pesquisas </a></p>
            <p class="pontes"> <a href=" " class="linkPonte"> Privacidade e segurança </a></p>
            <p class="pontes"> <a href=" " class="linkPonte">Gerenciar sua conta</a></p>
            <p class="pontes"> <a href=" " class="linkPonte"> Personalize seu perfil </a></p>
            <p class="pontes"> <a href=" " class="linkPonte"> Você e a Owl  </a></p>
        </div class="linkPonte">
            <div class="barraHorizontal"></div>

        <div class="geralTopicos">
            <p class="topicos">Avançados</p>
            <p class="pontes"> <a href=" " class="linkPonte"> Página inicial </a></p>
            <p class="pontes"> <a href=" " class="linkPonte"> Barra de ferramentas</a></p>
            <p class="pontes"> <a href=" " class="linkPonte"> Acessibilidade </a></p>
            <p class="pontes"> <a href=" " class="linkPonte"> Configurações do site </a></p>
            <p class="pontes"> <a href=" " class="linkPonte"> Idiomas </a></p>
            <p class="pontes"> <a href=" " class="linkPonte"> Sobre o Owl  </a></p>
   
        </div>

    </aside>
            <div class="barraVertical"></div>
        <main>
            <section>
                <h2 class="titulosMain">Opções de personalização</h2>
                <div>
                    <form>
                        <label>
                            <input  type="checkbox" name="Modo dark" id="idDark" value=""> <label class="opcPersonalizadas" for="idDark"> Modo dark </label> <br>
                            <input  type="checkbox" name="Bloquear notificacoes" id="idNotificacoes" value=""> <label class="opcPersonalizadas" for="idNotificacoes"> Bloquear notificações </label> <br>
                            <input  type="checkbox" name="Salvar senha" id="idSalvarSenha" value=""> <label class="opcPersonalizadas" for="idSalvarSenha"> Salvar senha e conta no dispositivo</label>
                        </label>
                    </div>
                    </form>
            </section>

            <section>
                <div  class="secPremium">
                    <h2 class="titulosMain">Premium</h2>
                    <img src="http://localhost/Owl-artist/public/assets/seloFormated.png" class="fotoSelo">
                </div>
                <div>
                    <p>Tenha acesso a conteúdos exclusivos da plataforma</p>
                    <button class="botaoPremium">
                        Cadastrar
                    </button>
                </div>
            </section>

            <section>
                <div>
                    <h2 class="titulosMain">Permissões</h2>
                </div>

                <div>
                    <a href=" " class="linkPo"> <p class="spt">Clique aqui para Ler o termo de permissões </p> </a> 
                
                </div>
            </section>


            <section class="ultimaSection">
                <h2 class="titulosMain">Suporte</h2>
                <div>
                <p>Entre em contato pelo nosso email: <span class="spt">owlartistsuport2023@gmail.com</span></p>
                </div>
            </section>


        </main>
    </div>

</body>
</html>
