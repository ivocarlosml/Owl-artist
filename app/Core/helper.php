<?php
function css($arquivo):string
{
    return URL_BASE."/public/css/{$arquivo}.css";
}

function componente($componente){
    require  PASTA_VIEW."componentes/{$componente}.view.php";
}

function linkrota($rota = "") {
    return URL_BASE . "{$rota}";
}