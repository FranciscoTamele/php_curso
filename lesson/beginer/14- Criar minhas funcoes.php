<?php

/**
 * @Info Os metodo no php podem ser definidos sem informar na construcao do metodo se
 * tera retorno ou nao.
 */

// Sintaxe de criacao de um metodo sem retorno
function exibir():void{
    echo "Meu nome e Francisco!<br>";
}

// Metodo sem especificar se tem retorno ou nao
function exibirMgs(){
    echo "Neste metodo nao foi definido se tera retorno ou nao!<br>";
}

// Metodo com parametro
function exibirApelido($nome):void{
    echo "Meu nome e ".$nome."<br>";
}

// Sintaxe criacao metodo com retorno
function calcularMedia($teste1,$teste2):float{
    return ($teste1+$teste2)/2;
}

exibir();
exibirMgs();
exibirApelido("Tamele");
echo "Minha media e ".calcularMedia(12,13);

