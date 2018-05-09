<?php

// variavel que guarda o conteúdo de uma página web
$url = $_POST["link"];

$dados = file_get_contents($url);

//$padrao = "/<h1 ?.*>(.*)<\/h1>/";
$padrao = "h1";
// função que recupera as informações que contem as caracteristicas especificas dentro do $link e joga em $conteudo
/*$matches = preg_match_all($padrao, $dados, $conteudo);

if ($matches >= 1) {
    //print "casou";
    //var_dump($conteudo);
    echo $conteudo[0][0];

} else if ($matches === 0) {
    print "não casou";
    var_dump($matches);

} elseif ($matches === false) {
    print "ocorreu um erro";

}*/

// recupera somente o que desejamos
//$exibir = $conteudo[0][0];

//$retirar = array('mais moedas','atas Copom','mais detalhes','ORES-->','<!--');

//$exibir = str_replace($retirar, '', $exibir);

//echo $conteudo;


function pegaTextoTags($dados, $padrao){
    $d = new DOMDocument();
    $d->loadHTML($dados);
    $return = array();
    foreach($d->getElementsByTagName($padrao) as $item){
        $return[] = $item->textContent;
    }
    var_dump($return);

}

pegaTextoTags($dados,$padrao);


?>
