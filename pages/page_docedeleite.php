<?php
require_once('dados/dados.php');
?>     
    
    <section class="produto_item">
        <div class="wrapper">
            <a href="?p=leitecond">Voltar</a>
            <a href="?p=goiaba">Próximo</a>
        </div>
        <div class="produto_item_container">
            <img src="<?php echo $images[4] ?>" alt="Cocada de Doce de Leite">
            <div class="produto_item_descricao">
                <h1>Cocada de <?php echo $nome[4] ?></h1>
                <h5>Linha <?php echo $linha[4] ?></h5>
                <h2>Ingredientes</h2>
                <p><?php echo $ingredientes[4] ?></p>
                <h2>Peso</h2>
                <p><?php echo $peso[0] ?>mg</p>
                <h2>Preço: <strong>R$ <?php echo $preco[4] ?></strong></h2>
                <a href="?p=contato">Eu quero!</a>
            </div>
        </div>
    </section>