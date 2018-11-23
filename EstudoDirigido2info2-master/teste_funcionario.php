<?php
    require "funcionario.php";


    new Funcionarios();
    $funcionarios = new Funcionario();
    $funcionarios -> nome = "Claudio da Silva";
    $funcionarios -> departamento = "limpeza";
    $funcionarios -> salario = "1500";



    new Data();
    $data = new Data();
    $data -> dia = "12";
    $data -> mes = "12";
    $data -> ano = "2018";

    function mostra(){

         return "O funcionario {$funcionarios->nome} do departamento de {$funcionarios->departamento}, desde {$data->dia/$data->mes/$data->ano}, possui salario de {$funcionarios->salario}";
    }

    
    mostra($funcionarios, $data);
