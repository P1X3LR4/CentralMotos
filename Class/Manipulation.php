<?php

include_once("Connection.php");

class Manipulation extends Connection
{
    protected $Tables;
    protected $Inputs;
    protected $Dados;
    protected $DadosValues;


    public function setDadosValues($Values)
    {

        $this->DadosValues = $Values;
    }

    public function setCodId($CodId)
    {
        $this->CodAlter = $CodId;
    }

    public function AlterarFuncionario($Table, $NomeFuncionario, $SobrenomeFuncionario, $Telefone, $EmailFuncionario, $IdadeFuncionario, $UsernameFuncionario)
    {

        $this->UpdateAlter = "UPDATE $Table SET Nome='$NomeFuncionario', Sobrenome='$SobrenomeFuncionario', Telefone='$Telefone', Email='$EmailFuncionario', Idade='$IdadeFuncionario', Username='$UsernameFuncionario' WHERE id = '$this->CodAlter'";

        if (parent::ExecutarCommandSql($this->UpdateAlter)) {
            $_SESSION['msg-funcionario-alterado-sucess'] = true;
            header('Location: http://localhost/CentralMotos/Pages/Views/02-ViewFuncionarios.php');
        }
    }

    // INSERIR INFORMACOES NO BANCO DE DADOS
    public function InsertTableDados($Tables)
    {

        $this->CommandSql = "INSERT INTO $Tables VALUES ($this->DadosValues)";

        if (parent::ExecutarCommandSql($this->CommandSql)) {

            switch ($Tables) {
                case 'FUNCIONARIOS (Nome, Sobrenome, Telefone, Email, CPF, Idade, Username, Senha, Acesso)':
                    $_SESSION['msg-cadastroFuncionario-sucess'] = true;
                    header('Location: http://localhost/CentralMotos/Pages/05-PageCadastroFuncionario.php');
                    exit();
                    break;

                default:
                    $_SESSION['msg-cadastroClient-sucess'] = true;
                    header('Location: http://localhost/CentralMotos/Pages/02-PageCadastroClient.php');
                    exit();
                    break;
            }
        }
    }

    // INSERIR INFORMACOES DE AGENDAMENTO NO BANCO DE DADOS
    public function InsertTableDadosAgendamento($Tables)
    {

        $this->CommandSql = "INSERT INTO $Tables VALUES ($this->DadosValues)";

        if (parent::ExecutarCommandSql($this->CommandSql)) {

            $_SESSION['msg-agend-sucess'] = true;
            header('Location: http://localhost/CentralMotos/Pages/06-PageAgendarAluguel.php');
            exit();
        }
    }

    // PERCORRER TODA A TABELA E ARMAZENAR OS DADOS EM UM ARRAY
    public function PercorrerTable($CommandSql)
    {

        $this->Dados = @mysqli_fetch_array($CommandSql);
        return $this->Dados;
    }

    //PERCORRER TODA A TABELA E RETORNAR UM RESULTADO NUMERICO
    public function BuscarDados($CommandSql)
    {

        $this->Dados = @mysqli_num_rows($CommandSql);
        return $this->Dados;
    }
}
