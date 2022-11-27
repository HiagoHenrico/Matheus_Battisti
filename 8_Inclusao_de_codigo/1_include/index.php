<?php

/* Incluude

- Com o include inserimos um arquivo de php, ou até mesmo um de HTML, em outro;
- Podendo assim ultilizar tudo que está declarado no arquivo incluído;
- O include não gera um erro fatal se o arquivo não existir e sim um warning;
- Exemplo:
include "arquivo.ext"
*/

include "teste.php";

?>

<p>Após Include</p>

<p>Imprimindo c: <?php echo $c . "<br>"; ?></p>