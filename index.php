<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/xadrez.css">
    <link rel="icon" type="image/jpg" href="img/pecas/icone.ico"/>
    <title>Xadrez</title>
</head>

<body>
    <?php 
        require_once('class/Xadrez.class.php');
        $xadrez = new Xadrez();
        $xadrez->gerarTabuleiro();
        $xadrez->posicionarPecas();
    ?>
    <section id="box">
        <div id="listaNum">
            <?php
            //listanto as partes numericas do tabuleiro 
                for($i = 1; $i <= count($xadrez->letras); $i++){
                    echo '<p>'.$i.'</p>';
                }
            ?>
        </div><!-- fim listagem numerica do tabuleiro -->
        <div id="tabuleiro">
            <?php
            //Imprimindo as casas com suas cores respectivas
            $cores = array(0 => 'branco', 1 => 'preto');
            $contador = 0;
            $rowImpar = array(9, 17, 25, 33, 41, 49, 57);
            foreach ($xadrez->tabuleiro as $indice => $valor) :
                $contador++;
                if (in_array($contador, $rowImpar)) {
                    $cores = array_reverse($cores);
                }
                $exibirPecas = (strstr($valor, 'branco') || strstr($valor, 'preto')) ? '<img class="pecas" src="img/pecas/' . $valor . '.png" />' : null;
            ?>
                <div class="quadrado <?php echo $cores[$contador % 2]; ?>">
                    <?php echo $exibirPecas ?>
                </div>
            <?php endforeach; ?>
            <!-- fim Impressão das casas -->
        </div><!-- tabuleiro -->
        <div id="listaLetras">
        <?php
            //listanto as partes alfabeticas do tabuleiro 
                for($i = 0; $i < count($xadrez->letras); $i++){
                    echo '<p>'.$xadrez->letras[$i].'</p>';
                }
            ?>
        </div><!-- fim listagem alfabetica do tabuleiro -->
    </section><!-- box -->

</body>

</html>