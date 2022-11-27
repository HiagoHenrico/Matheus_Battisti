<?php

$pessoas = [
    'Hiago' => 29,
    'Aléxia' => 23,
    'Pedro' => 33,
    'Jonathan' =>30
];


?>

<table border="1">
    <tr>
      <th>Nome</th>
      <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade): ?>

        <tr>
            <td><?= $nome; ?></td>
            <td><?= $idade; ?></td>

        </tr>
        <?php endforeach; ?>
</table>