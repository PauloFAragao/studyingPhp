<?php
    class Obj_008
    {
        var $nome;
        var $idade;

        function SetNome($nome)
        {
            $this->nome = $nome;
        }
        function SetIdade($idade)
        {
            $this->idade = $idade;
        }
        function GetNome()
        {
            return $this->nome;
        }
        function GetIdade()
        {
            return $this->idade;
        }
        function ImprimirDados()
        {
            echo "Nome: $this->nome;<br>Idade: $this->idade;";
        }
    }
?>