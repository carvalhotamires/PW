<?php
// Cria um array com os nomes dos estados
$estados = array("Paraíba", "Pernambuco", "Ceará", "Rio de Janeiro", "São Paulo");

// Encontra o índice do estado "Rio de Janeiro" no array
$indice = array_search("Rio de Janeiro", $estados);

// Verifica se o estado foi encontrado
if ($indice !== false) {
    // Imprime "Rio de Janeiro" no navegador
    echo "Rio de Janeiro";
} else {
    // Se "Rio de Janeiro" não for encontrado, imprime uma mensagem de erro
    echo "Estado não encontrado.";
}
?>
