<?php

class Connection
{

    protected $Host;
    protected $User;
    protected $Password;
    protected $DataBase;
    protected $Conn;
    protected $Query;
    protected $CommandSql;

    //CONEXAO COM O SERVIDOR LOCALHOST
    public function __construct()
    {

        $this->Host = "localhost";
        $this->User = "root";
        $this->Password = "";
        $this->DataBase = "CentralMotos";
        self::Connect();
    }

    /****************** CONEXAO *******************/
    public function Connect()
    {

        //FAZER CONEXAO COM O SERVER
        $this->Conn = @mysqli_connect(
            $this->Host,
            $this->User,
            $this->Port,
            $this->Password
        ) or die("Não Foi Possivel Conectar-se ao SERVER (localhost) <br>");

        //FAZER CONEXAO COM O BANCO DE DADOS
        $this->DataBase = @mysqli_select_db(
            $this->Conn,
            $this->DataBase
        ) or die("Não Foi Possivel Conectar-se ao BANCO DE DADOS (CentralMotos) <br>");
    }

    //EXECUTAR OS COMANDOS SQL
    public function ExecutarCommandSql($CommandSql)
    {

        $this->Query = @mysqli_query($this->Conn, $CommandSql)
            or die("Erro ao Executar o COMANDO SQL: {$CommandSql} <br>");

        return $this->Query;
    }
}
