<?php
function carregarPagina (){
    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
    if(file_exists('pages/page_'.$pagina.'.php')):
        require_once('pages/page_'.$pagina.'.php');
    else:
        require_once('pages/page_home.php');
    endif;
}
?>