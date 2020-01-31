<?php
namespace App\File;
require_once "App/Interfaces/ProdutoInterface.php";
require_once "App/Entities/Produto.php";
use App\Entities\Produto;
use App\Interfaces\ProdutoInterface;

/**
 * Class FileTxt
 * Gerar arquivo com extensão txt
 */
class FileTxt implements ProdutoInterface
{
    /**
     * @var string
     */
    private $file_name = "file.txt";

    /**
     * Gerar arquivo e escrever conteúdo 
     * @param Produto $produto
     * 
     * @return void
     */
    public function create(Produto $produto)
    {
        $file = fopen($this->file_name,'w');
        $data = [$produto->getTipo(),$produto->getUnidade(),$produto->getPreco(),$produto->getMarca()];
        foreach($data as $item)
           fwrite($file,$item);
        return fclose($file);   
    }
    
}