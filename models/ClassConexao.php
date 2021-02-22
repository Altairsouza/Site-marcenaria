<?php

abstract class ClassConexao{

    public function Conectar(){
        try {
            $pdo=new PDO("mysql:host=localhost;dbname=wef_db","root","");
            return $pdo;
        } catch (PDOException $Erro) {
            return $Erro->getMessage();
        }
    }
}