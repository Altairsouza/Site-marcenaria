<?php
require_once("../models/ClassConexao.php");

 class ClassInsercao extends ClassConexao{
    private $id;
    private $codinterno;
    private $codestrangeiro;
    private $nome;
    private $email;
    private $telefone;
    private $idade;

    #Método construtor
    public function __construct($nome,$email,$telefone,$idade)/* nome email e telefone sao atributos q seram usados mais tarde nao tem ligação com as variaveis em private */
    {
        $this->id=0;
        $this->codinterno=rand(1,1000000000000);/* só pra gerar um numero rand(numero qualquer entre 1 e 1000000...) */
        $this->codestrangeiro=rand(1,1000000000000);/* só pra gerar um numero rand(numero qualquer entre 1 e 1000000...) */
        $this->nome=$nome;
        $this->email=$email;
        $this->telefone=$telefone;
        $this->idade=$idade;
    }


#método de inserção(inserir informacoes no banco dea daos)
public function InserirBD(){
    $crud=$this->Conectar()->prepare("INSERT INTO clientes VALUES(?,?,?,?,?,?,?)");/* ele esta pegando a conexão do banco de dados com a class Conectar que está na pasta models(ClassConexao.php) e prepare para passando a quantidade de valores(id,nome etc...) */
    $crud->bindParam(1,$this->id,PDO::PARAM_INT);/* Ele esta falando q o parametro é inteiro(param_int) */
    $crud->bindParam(2,$this->codinterno,PDO::PARAM_INT);
    $crud->bindParam(3,$this->codestrangeiro,PDO::PARAM_INT);
    $crud->bindParam(4,$this->nome,PDO::PARAM_STR);/* aqui ja muda o parametro é string */
    $crud->bindParam(5,$this->email,PDO::PARAM_STR);
    $crud->bindParam(6,$this->telefone,PDO::PARAM_STR);
    $crud->bindParam(7,$this->idade,PDO::PARAM_STR);
    $crud->execute();
}

}