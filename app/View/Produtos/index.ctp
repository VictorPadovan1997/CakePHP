<?php
$detalhe = array();

foreach ($produtos as $produto){
    $detalhe[] = array(
        $produto['Produto']['nome'],
        $produto['Produto']['quantidade'],
        $produto['Produto']['valor'],
        $produto['Produto']['modelo']
    );
}

echo $this->Html->tag('h1', 'Produtos');

$titulos = array('Nome', 'Quantidade', 'Valor', 'Modelo');
$header = $this->Html->tableHeaders($titulos);
$body = $this->Html->tableCells($detalhe);

echo $this->Html->tag('table', $header . $body);


?>
