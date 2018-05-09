<?php

// variavel que guarda o conteúdo de uma página web
$url = $_POST["link"];

$dados = file_get_contents($url);

// função que recupera as informações que contem as caracteristicas especificas dentro do $link e joga em $conteudo
//preg_match_all('/ORES--&gt;(.+)<!--/s', $dados, $conteudo);

// recupera somente o que desejamos
//$exibir = $conteudo[0][0];

//$retirar = array('mais moedas','atas Copom','mais detalhes','ORES-->','<!--');

//$exibir = str_replace($retirar, '', $exibir);

echo $dados;

?>
