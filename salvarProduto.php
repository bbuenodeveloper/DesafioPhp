<?php

function addProduto($nome, $categoria, $descricao, $quantidade, $preco, $img){
    $jsonProdutos = file_get_contents('Produtos.json');
    $produtos = json_decode($jsonProdutos, true);

    $chave = count($produtos['Produtos']) + 1;
    $novoProduto = ["id"=>"produto$chave","nome"=>$nome, "categoria"=>$categoria, "descricao"=>$descricao, "quantidade"=>$quantidade, "preco"=>$preco, "img"=>$img];

    $produtos["Produtos"][]=$novoProduto;

    $jsonProdutos = json_encode($produtos);
    file_put_contents('Produtos.json', $jsonProdutos);

    return true;
    }

$contadorInputVazio = 0;
foreach($_POST as $item){
    $item == ""?$contadorInputVazio++:0;
}

if($contadorInputVazio == count($_POST)){
echo "<h1>Você não enviou nenhuma informação sobre o produto</h1>";
echo '<a class="btn btn-primary" href="index.php">Voltar para o cadastro</a>';
exit;
}
$imgAceitas = ["image/png","image/jpg","image/jpeg"];
$erroEnvio = $_FILES['arquivo']['error'];

$nomeProduto = $_POST['nomeProduto'];
$categoriaProduto = $_POST['categoriaProduto'];
$desProduto = $_POST['desProduto'];
$quantiProduto = $_POST['quantiProduto'];
$precoProduto = $_POST['precoProduto'];
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivoTmp = $_FILES['arquivo']['tmp_name'];
$imgProduto = "img/$nomeArquivo";
$typeFile = $_FILES['arquivo']['type'];

if($erroEnvio !==0){
echo "<h1>Houve um erro no envio do arquivo verifique e tente novamente.</h1>";
echo '<a class="btn btn-primary" href="index.php">Voltar para o cadastro</a>';
exit;
}

if(array_search($typeFile,$imgAceitas) == false){
echo "<h1>Extensão do arquivo invalida, verifique se o arquivo é uma imagem do tipe png,jpg,jpeg.</h1>";
echo '<a class="btn btn-primary" href="index.php">Voltar para o cadastro</a>';
exit;  
}

move_uploaded_file($arquivoTmp, "img/$nomeArquivo");

addProduto($nomeProduto, $categoriaProduto, $desProduto, $quantiProduto, $precoProduto, $imgProduto);

?>