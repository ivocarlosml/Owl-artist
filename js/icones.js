// script.js

document.addEventListener("DOMContentLoaded", function () {
    var imagem = document.getElementById("coracao");

    imagem.addEventListener("click", function () {
        if (imagem.src.endsWith("coracaoBranco.png")) {
            imagem.classList.add("hidden"); // Adiciona a classe "hidden" para iniciar a animação
            setTimeout(function () {
                imagem.src = "coracaoVermelho.png";
                imagem.alt = "coração vermelho";
                imagem.classList.remove("hidden"); // Remove a classe "hidden" para revelar a nova imagem
            }, 1000); // Tempo em milissegundos (0.5s)
        } else {
            imagem.classList.add("hidden");
            setTimeout(function () {
                imagem.src = "coracaoBranco.png";
                imagem.alt = "coração branco";
                imagem.classList.remove("hidden");
            }, 1000);
        }
    });
});
