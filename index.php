<?php
/*** 
 * Testando a criação dos arquivos(doc e txt) 
 */
require_once "App/Entities/Produto.php";
require_once "App/File/FileDoc.php";
require_once "App/File/FileTxt.php";
use App\Entities\Produto;
use App\File\FileDoc;
use App\File\FileTxt;

$produto = new Produto('Tipo: macarrão ','Unidade: 1 ','Preço: 1,00R$ ','Marca:XXX ');
$doc = new FileDoc();
$txt = new FileTxt();

$doc->create($produto);//create txt file extension
$txt->create($produto);//create doc file extension