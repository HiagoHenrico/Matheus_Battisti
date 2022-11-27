<?php

/* Removendo tags HTML

- Podemos remover as tags de HTML de uma string com a função;
  strip_tags;
- Geralmente para salvar dados no banco removemos as tags;
*/

$textoHTML = "<p> Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

echo $textoHTML;

$savarTextoBanco = strip_tags($textoHTML);
echo $savarTextoBanco;