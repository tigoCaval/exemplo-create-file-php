<?php 
namespace App\File;

require_once "App/Interfaces/ProdutoInterface.php";
require_once "App/Entities/Produto.php";

use App\Entities\Produto;
use App\Interfaces\ProdutoInterface;

/**
 * Class FileDoc
 * Exemplo Gerar arquivos com extensão doc
 */
class FileDoc implements ProdutoInterface
{

     /**
      * @param Produto $produto
      * @access private
      * @return array
      */
     private function arrayProduto(Produto $produto)
     {
          $data = [];
          $data['tipo'] = $produto->getTipo();
          $data['unidade'] = $produto->getUnidade();
          $data['preco'] = $produto->getPreco();
          $data['marca'] = $produto->getMarca();
          return $data;
     } 

     /**
      * Gerar um arquivo e escrever o conteúdo 
      * @param Produto $produto
      * 
      * @return void
      */
     public function create(Produto $produto)
     {
        $data = $this->arrayProduto($produto); 
        $file = fopen('file.doc','w'); 
        foreach($data as $item) 
           fwrite($file,$item);
        return fclose($file);
     }


}