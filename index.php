<?php
require './lib/autoload.php';

$smarty = new Template();
Rotas::get_Pagina();


// valores para o template
$smarty->assign('NOME', 'Alex Bruno Ramos Rodio');

$smarty->display('index.tpl');
?>