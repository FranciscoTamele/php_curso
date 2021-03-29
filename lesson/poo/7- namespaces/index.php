<?php


require 'models/produto.php';
require 'classes/Produto.php';


// $produto=new Produto();

/** @namespace
 *  Os namespace sao usados para identificar um certo arquivo php, a instanciacao acima retornara erro
 * pois os dois arquivos acima tem uma classe com nome Produto, o php nao sabe a qual classe nos referimos
 * na instanciacao..
 * Para criar uma especificidade ou diferenciar cada um dos arquivos teria que ter um namespace que
 * servira de prefixo na hora de criar uma instancia, assim o compilador sabera qual classe produto
 * esta sendo instanciada !
 */

   // Formas de instanciar com namesapce

   $produto=new \modelo\Produto();

   $produto1=new \classe\Produto();

   $produto->exibirInfo();

   $produto1->exibirInfo();

   // Ou podemos instanciar dessa forma

   use modelo\Produto as ProdutoM;
   use classe\Produto as ProdutoC;

   $produto2=new ProdutoM();

   $produto2->exibirInfo();

   $produto3=new ProdutoC();

   $produto3->exibirInfo();

?>