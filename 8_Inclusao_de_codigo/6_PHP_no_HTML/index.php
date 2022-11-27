<?php

/* Inserindo PHP ao HTML
- Como abordado nas seções iniciais, esta é uma das principais funcionalidades PHP;
- Podemos inserir código dinâmico entre nossas tags;
- As extensões para este tipo de arquivo podem ser de .php ou .phtml;
- Exemplo:

  <h1> <?= $titulo ?> </h1>

*/


include_once "backend.php";



?>

<h1>Seja bem-vindo ao nosso site</h1>
<p> <?= $nome; ?> Veja as nossas ofertas</p>

<h2>Confira nossos principais produtos: </h2>

<ul>
  <?php foreach($produtos as $produto): ?>
  <li><?= $produto; ?></li>
  <?php endforeach; ?>

</ul>