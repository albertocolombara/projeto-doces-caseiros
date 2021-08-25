<?php
require_once('dados/dados.php');
?>

<section class="produtos">
        <div class="produtos_container">
            <h1>Nossos produtos</h1>
            <p>Feitos com carinho!</p>
            <div class="produtos_lista">
            <?php for ($i=0; $i < 6; $i++): ?>
                <div class="produtos_item">
                    <div class="imagem">
                        <img src="<?php echo $images[$i] ?>" alt="Cocada Abacaxí">
                    </div>
                    <div class="info">
                        <div class="info_left">
                            <h2>Cocada <?php echo $nome[$i] ?></h2>
                            <h3>R$ <span style="font-size: 36px;"><?php echo $preco[$i]?></span></h3>
                            <h5>Linha <?php echo $linha[$i] ?></h5>
                        </div>
                        <div class="info_btn">
                            <a href="?p=<?php echo $codigolink[$i]?>">Saiba mais</a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
            </div>
        </div>
    </section>