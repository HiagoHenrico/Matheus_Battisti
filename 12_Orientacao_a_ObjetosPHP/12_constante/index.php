<?php


/* Constante em classes

- As constantes são parecidas com variáveis, salvam valores em memória;
- Porém o seu valor não pode ser alterado;
- Exemplo:
  public const CHAVE_API = "ASO793mJJs39";
*/


class Humano {
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNAS = 2;

    FUNCTION mostrarConst(){

      echo self:: BRACOS . "<br>";

    }

}

$hiago = new Humano;

echo $hiago::OLHOS . "<br>";

$hiago -> mostrarConst();