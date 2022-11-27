<?php

/* Foreach e arrays

- Anteriormente vimos a estrutura foreach com arrays, podemos iterar facilmente com ela;
- ultilizando a notação de chave => valor, temos acesso rápido também a arrays associativos;
- Exemplo: foreach($itens as $key => $value) {código}
*/

$Toninho =[
    'nome' => 'Toninho',
    'idade' => '28',
    'profissao' => 'programador'
];

$Karna =[
    'nome' => 'Karna',
    'idade' => '29',
    'profissao' => 'eletricista'
];

foreach($Toninho as $carac => $value){

    echo "$carac => $value <br>";

}

foreach($Karna as $carac => $value){

    echo "$carac => $value <br>";
    
}