<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Banco</title>
</head>
    <body>
        <?php
            class ContaBanco
            {
                public $nConta;
                protected $tipo;
                private $dono;
                private $saldo;
                private $status;

                //construtor
                public function __construct()
                {
                    $this->nConta="";
                    $this->tipo="";
                    $this->dono="";
                    $this->saldo=0;
                    $this->status=false;
                }

                //---metodos---
                //metodo que abre uma conta e recebe como paremetro o tipo da conta
                public function abrirConta($value)
                {   
                    //setando o tipo da conta
                    $this->setTipo($value);
                    //setando o status da conta
                    $this->setStatus(true);

                    if($value == "CC")//conta corrente
                        $this->setSaldo(50);
                    else if($value == "CP")//conta poupansa
                        $this->setSaldo(150);

                }
                //metodo que fecha a conta
                public function fecharConta()
                {
                    if($this->getSaldo() > 0 )//verifica se tem dinheiro na conta
                        echo "<p>conta com saldo, impossivel fecha-la!</p>";
                    else if($this->getSaldo() < 0)//verifica se tem divida
                        echo "<p>conta com debito, impossivel fecha-la!</p>";
                    else//fecha a conta
                    {
                        $this->setStatus(false);
                        echo "<p>conta de: ".$this->dono." fechada com exito</p>";
                    }
                }
                //metodo de deposito
                public function depositar($value)
                {
                    if($this->getStatus())//verifica se a conta está ativa e realiza o acréssimo
                    {
                        $this->setSaldo($this->getSaldo()+$value);
                        echo "<p>Deposito de: ".$value." realizado com sucesso na conta de: $this->dono</p>";
                    }
                    else
                        echo "<p>Conta encerrada, impossivel realizar deposito</p>";
                }
                //metodo de sacar
                public function sacar($value)
                {
                    if($this->getStatus())//verifica se a conta está ativa
                    {
                        if($this->getSaldo()>=$value)//verifica se a conta tem saldo suficiente
                        {
                            $this->setSaldo($this->getSaldo()-$value);
                            echo "<p>Saque de: ".$value." realizado com sucesso na conta de: $this->dono</p>";
                        }
                        else
                            echo "<p>Conta sem saldo suficiente, impossivel realizar Saque</p>";
                    }
                    else
                        echo "<p>Conta encerrada, impossivel realizar Saque</p>";
                }
                //metodo de cobrança da pensalidade
                public function pagarMensal()
                {
                    if($this->getStatus() && $this->getTipo() == "CP")//verifica se a conta está ativa e o tipo da conta (conta poupança)
                    {
                        $this->setSaldo($this->getSaldo()-12);//faz a cobrança de 12
                        echo "<p>Cobrança mensal de 12 Reais realizada na conta de: ".$this->dono."</p>";
                    }   
                    else if($this->getStatus() && $this->getTipo() == "CC")//verifica se a conta está ativa e o tipo da conta (conta corrente)
                    {
                        $this->setSaldo($this->getSaldo()-20);//faz a cobrança de 20
                        echo "<p>Cobrança mensal de 20 Reais realizada na conta de: ".$this->dono."</p>";
                    }
                }
                //metodo de checagem de status da conta
                public function printStatus()
                {   
                    echo "<p>";
                    echo "Titular da conta: $this->dono";
                    
                    echo "<br>";
                    echo "Numero da conta: $this->nConta";
                    
                    echo "<br>";
                    if($this->tipo=="CC")
                        echo "Tipo de conta: conta corrente";
                    else if($this->tipo=="CP")
                        echo "Tipo de conta: conta poupança";

                    echo "<br>";
                    if($this->status)
                        echo "A conta está ativa";
                    else
                        echo "A conta está inativa";

                    echo "<br>";
                    echo "Saldo da conta: $this->saldo";
                    echo "</p>";
                }

    //metodos set & get
                public function setNumeroConta($value)
                {
                    $this->nConta = $value;
                }
                public function getNumeroConta()
                {
                    return $this->nConta;
                }

                public function setTipo($value)
                {
                    $this->tipo = $value;
                }
                public function getTipo()
                {
                    return $this->tipo;
                }

                public function setDono($value)
                {
                    $this->dono = $value;
                }
                public function getDono()
                {
                    return $this->dono;
                }

                public function setSaldo($value)
                {
                    $this->saldo = $value;
                }
                public function getSaldo()
                {
                    return $this->saldo;
                }

                public function setStatus($value)
                {
                    $this->status = $value;
                }
                public function getStatus()
                {
                    return $this->status;
                }
            }

            //criando objetos
            $p1 = new ContaBanco();
            $p2 = new ContaBanco();

            //abrindo a conta do jubileu e setando caracteristicas
            $p1->abrirConta("CP");
            $p1->setDono("Jubileu");
            $p1->setNumeroConta("1111");

            //abrindo a conta da creuza e setando caracteristicas
            $p2->abrirConta("CC");
            $p2->setDono("Creuza");
            $p2->setNumeroConta("2222");

            //realizando depositos
            $p1->depositar(300);
            $p2->depositar(500);

            //realizando saque
            $p1->sacar(1000);
            $p2->sacar(100);

            //cobrando mensalidade
            $p1->pagarMensal();
            $p2->pagarMensal();

            //imprimindo informações
            $p1->printStatus();
            $p2->printStatus();

            //tentar fechar conta para gerar erro
            $p1->fecharConta();
            $p2->fecharConta();

            //fazendo saque do valor atual da conta para poder fechar
            $p1->sacar(438);
            $p2->sacar(430);

            //fechando as contas
            $p1->fecharConta();
            $p2->fecharConta();

            //imprimindo informações
            $p1->printStatus();
            $p2->printStatus();
            
        ?>

    
    </body>
</html>