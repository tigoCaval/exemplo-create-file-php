<?php 
namespace App\Entities;

/**
 * Class Produto
 */
class Produto
{
   private $tipo;
   private $unidade;
   private $preco;
   private $marca;

   public function __construct($tipo, $unidade, $preco, $marca)
   {
        $this->tipo = $tipo;
        $this->unidade = $unidade;
        $this->preco = $preco;
        $this->marca = $marca;
   }

   public function getTipo()
   {
       return $this->tipo;
   } 

   public function getUnidade()
   {
       return $this->unidade;
   }

   public function getPreco()
   {
       return $this->preco;
   }

   public function getMarca()
   {
       return $this->marca;
   }

}