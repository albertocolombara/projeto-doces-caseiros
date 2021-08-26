<?php
function carregarPagina (){
    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
    if(file_exists('pages/page_'.$pagina.'.php')):
        require_once('pages/page_'.$pagina.'.php');
    else:
        require_once('pages/page_home.php');
    endif;
}

function alterarTitulo (){
    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
    switch ($pagina):
        case 'home':
            $titulo = "Cocadinhas - A melhor cocada da região.";
            break;

        case 'quemsomos':
            $titulo = "Quem somos - Cocadinhas";
            break;
              
        case 'produtos':
            $titulo = "Produtos - Cocadinhas";
            break;  

        case 'contato':
            $titulo = "Contato - Cocadinhas";
            break;  

        case 'contato':
            $titulo = "Contato - Cocadinhas";
            break;    

        case 'abacaxi':
            $titulo = "Cocada de Abacaxí - Cocadinhas";
            break; 

        case 'chocolate':
            $titulo = "Cocada de Chocolate - Cocadinhas";
            break;

        case 'maracuja':
            $titulo = "Cocada de Maracujá - Cocadinhas";
            break;    

        case 'docedeleite':
            $titulo = "Cocada de Doce de Leite - Cocadinhas";
            break; 

        case 'goiaba':
            $titulo = "Cocada de Goiaba - Cocadinhas";
            break;    

        default:
            $titulo = "Cocadinhas - A melhor cocada da região.";
            break; 

        endswitch;
        return $titulo;
}
?>