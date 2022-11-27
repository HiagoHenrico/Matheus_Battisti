<?php


/* Visibilidade

- Temos três formatos de visibilidade: public, protected e private;
- public: A propriedade ou método pode ser acessada de qualquer forma;
- protected: A propriedade ou método pode ser acessada apenas pela classe de origem ou as que recebem a mesma de herança;
- private: A propriedade ou método pode ser acessada apenas pela classe que foi criada;
*/

class Car{

    public  $rodas = 4;
    private $vidro = "Sem película";
    protected $portas = 4;

    public function peliculaDeFabrica($pelicula){
        $this->vidro = $pelicula;
    }

    public function getVidro(){
        return $this->vidro;
    }

    public function getPortas(){
        return $this->portas;
    }

}

Class Mecanico {

    public function alterarRodas($obj){

        $obj->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula){
        $carro->vidro = $pelicula;
    }
}

$carro = new Car;

echo $carro->rodas . "<br>";

$hiago = new Mecanico;

$hiago -> alterarRodas($carro);

echo $carro->rodas . "<br>";

// Não pode alterar porque é privado!
//$hiago->colocarPelicula($carro, "G20");

// $carro->colocarPelicula($carro, "G20");

//echo $carro->vidro . "<br>";

echo $carro->getVidro() . "<br>";

// $carro->vidro = "Não é possivel alterar um valor privado";

echo $carro->getPortas() . "<br>";