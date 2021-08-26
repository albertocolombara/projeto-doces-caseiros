<?php
require_once('dados/dados.php');
?>
    
    <section class="produto_item">
        <div class="wrapper">
            <a href="?p=abacaxi">Voltar</a>
            <a href="?p=maracuja">Próximo</a>
        </div>
        <div class="produto_item_container">
            <img src="<?php echo $images[1] ?>" alt="Cocada de Chocolate">
            <div class="produto_item_descricao">
                <h1>Cocada de <?php echo $nome[1] ?></h1>
                <h5>Linha <?php echo $linha[1] ?></h5>
                <h2>Ingredientes</h2>
                <p><?php echo $ingredientes[1] ?></p>
                <h2>Peso</h2>
                <p><?php echo $peso[0] ?>mg</p>
                <h2>Preço: <strong>R$ <?php echo $preco[1] ?></strong></h2>
                <a href="?p=contato">Eu quero!</a>
            </div>
        </div>
    </section>