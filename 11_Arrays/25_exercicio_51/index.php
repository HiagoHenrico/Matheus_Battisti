<?php

$ranking = [
    'Hiago' => 344,
    'Emilio' => 234,
    'Matheus' => 223,
    'Henrique' => 300,
    'Samuel' => 320
];

arsort($ranking);

?>

<h1>Ranking:</h1>
<ol>
    <?php foreach($ranking as $pessoa => $pontuacao):  ?>
        <li><?= $pessoa ?> -> <?= $pontuacao ?> pontos</li>
        <?php endforeach; ?>
</ol>