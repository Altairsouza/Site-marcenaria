<?php

/* essa pagina inserir é so pra testar se o banco de dados está funcioando */
require_once("../models/ClassConexao.php");

class ClassTeste extends ClassConexao{

    public function __construct()
    {
        var_dump($this->Conectar());
    }
}

$objteste=new ClassTeste();