<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="estilo.css" rel="stylesheet">
    <title>Home</title>
</head>
<body>
    <div class="altura">
    <h1>Todos os Produtos</h1>
    </div>
    <div class="container-fuild dividi">   
        <table class="table divi">
                
                <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Preço</th>
                  </tr>
                </thead>
        </table>

    <div class="jumbotron jumbotron-fluid0 dividir">
        <div class="container"> 
        <h2>Cadastrar Produto</h2>
        
            <form action="salvarProduto.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nomeProduto">Nome</label>
                  <input type="text" class="form-control" id="nomeProduto" nome="nomeProduto">
                </div>
                <div class="form-group">
                  <label for="categoriaProduto">Categoria</label>
                  <select type="select" class="form-control" id="categoriaProduto" placeholder="Selecione a sua categoria" nome="categoriaProduto">
                    <option value="categoria">Selecione a sua categoria</option>
                    <option value="nike">Tenis Nike</option>
                    <option value="camiseta">Camiseta</option>
                    <option value="relogio">Relogio</option>
                    <option value="perfume">Perfume</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="desProduto">Descrição</label>
                  <textarea type="text" class="form-control" id="desProduto" nome="desProduto"></textarea>
                </div>
                <div class="form-group">
                  <label for="quantiProduto">Quantidade</label>
                  <input type="number" class="form-control" id="quantiProduto" nome="quantiProduto">
                </div>
                <div class="form-group">
                  <label for="precoProduto">Preço</label>
                  <input type="number" class="form-control" id="precoProduto">
                </div>
                
                    
                <div class="form-group">
                <label for="imgProduto">Imagem do Produto</label>
                <input type="file" name="arquivo" id="imgProduto">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
   
    
    
</div>
</div>
</div>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>