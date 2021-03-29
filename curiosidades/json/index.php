<?php

require 'carro.php';


/** @notes quando os atributos da classe estao privados, o objecto json a
 * ser criado fica vazio.
 */
 $carro=new Carro("Mercedez",2016,3000000);
 $myJson=json_encode($carro);

 echo  $myJson;
