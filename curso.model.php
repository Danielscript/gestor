<?php
//criacao da classe curso
class Curso{
    private $id;
    private $id_status;
    private $curso;
    private $data_cadastrado;

//recebe  atributo e retorna o atributo
public function __get($atributo){
    return $this->$atributo;
    }
    //com base nesse atributo recebido e encaminha
    public function __set($atributo,$valor){
        $this->$atributo = $valor;
    }
}
?>