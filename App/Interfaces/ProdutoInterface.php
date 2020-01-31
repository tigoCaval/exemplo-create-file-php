<?php
namespace App\Interfaces;
require_once "App/Entities/Produto.php";

use App\Entities\Produto;

interface ProdutoInterface
{

     public function create(Produto $produto);

}