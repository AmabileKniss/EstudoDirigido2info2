<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/11/2018
 * Time: 01:19
 */

class Funcionario{
    public $nome;
    public $departamento;
    public $salario;
    public $dataEntrada;

    public function __toString(){
        return $this->nome;
        return $this->departamento;
        return $this->salario;
        return $this->dataEntrada;
    }
}
class Data{
    public $dia;
    public $mes;
    public $ano;
}


