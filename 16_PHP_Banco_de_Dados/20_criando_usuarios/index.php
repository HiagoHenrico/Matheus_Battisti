<?php

 /* Criando usuários
 
 - Podemos criar usuários no banco, depois utiliza-los para conectar e realizar as querys;
 - Além de criar precisamos adicionar previlégios;
 - Exemplo:
   CREATE USER 'usuario'@'localhost' INDETIFIED BY 'senha';
   GRANT ALL PRIVILEGES ON  * . * 'usuario'@'localhost';
   FLUSH PRIVILEGES;
 */