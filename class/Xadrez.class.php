<?php 

class xadrez{
    //Atributos
    public $tabuleiro = array();
    public $letras = array("a","b","c","d","e","f","g","h");
    public $pecas = array(
        'brancas' => array(
            'torre_branco',
            'cavalo_branco',
            'bispo_branco',
            'rei_branco',
            'rainha_branco',
            'peao_branco'
        ),
        'pretas' => array(
            'torre_preto',
            'cavalo_preto',
            'bispo_preto',
            'rei_preto',
            'rainha_preto',
            'peao_preto'
        )
    );

    //Métodos
    public function gerarTabuleiro(){
        //64 posicoes - (8*8)
        $contar = count($this->letras);//8
        foreach($this->letras as $indice => $valor){
            for($i = 1; $i <= $contar; $i++){
                /*O indice do tabuleiro recebe ele mesmo
                para saber o que contem dentro da casa
                mais para frente será posicionada as
                pecas no lugar
                /*
                valores esperados
                a1 => a1,
                a2 => a1... 
                b1 => b1,
                b2 => b2... etc.
                */
                $this->tabuleiro[$valor.$i] = $valor.$i; 
            }//termina for
        }//termina foreach
        return $this->tabuleiro;
    }//termina gerarTabuleiro

    public function posicionarPecas(){

        for($i = 0; $i < count($this->pecas['brancas']); $i++){
            if($i == 0):
                $this->tabuleiro['h1'] = $this->pecas['brancas'][$i];
                $this->tabuleiro['a1'] = $this->pecas['brancas'][$i];
            elseif($i == 1):
                $this->tabuleiro['g1'] = $this->pecas['brancas'][$i];
                $this->tabuleiro['b1'] = $this->pecas['brancas'][$i];
            elseif($i == 2):
                $this->tabuleiro['f1'] = $this->pecas['brancas'][$i];
                $this->tabuleiro['c1'] = $this->pecas['brancas'][$i];
            elseif($i == 3):
                $this->tabuleiro['e1'] = $this->pecas['brancas'][$i];
            elseif($i == 4):
                $this->tabuleiro['d1'] = $this->pecas['brancas'][$i];
            else:
                for($n = 0; $n < count($this->letras); $n++){
                    $this->tabuleiro[$this->letras[$n].'2'] = $this->pecas['brancas'][$i];
                }
            endif;
        }//termina posicionamento brancas

        for($i = 0; $i < count($this->pecas['pretas']); $i++){
            if($i == 0):
                $this->tabuleiro['h8'] = $this->pecas['pretas'][$i];
                $this->tabuleiro['a8'] = $this->pecas['pretas'][$i];
            elseif($i == 1):
                $this->tabuleiro['g8'] = $this->pecas['pretas'][$i];
                $this->tabuleiro['b8'] = $this->pecas['pretas'][$i];
            elseif($i == 2):
                $this->tabuleiro['f8'] = $this->pecas['pretas'][$i];
                $this->tabuleiro['c8'] = $this->pecas['pretas'][$i];
            elseif($i == 3):
                $this->tabuleiro['e8'] = $this->pecas['pretas'][$i];
            elseif($i == 4):
                $this->tabuleiro['d8'] = $this->pecas['pretas'][$i];
            else:
                for($n = 0; $n < count($this->letras); $n++){
                    $this->tabuleiro[$this->letras[$n].'7'] = $this->pecas['pretas'][$i];
                }
            endif;
        }//termina posicionamento pretas

    }//termina posicionarPecas

}

?>