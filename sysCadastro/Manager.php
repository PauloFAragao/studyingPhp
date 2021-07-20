<?php
require_once"Conexao.php";
class Manager extends Conexao
{
    public function insertCostumer($table, $data)
    {
        $pdo = parent::get_instance();
        $fields = implode(", ",array_keys($data) );
        $values = ":".implode(", :",array_keys($data));
        $sql = "INSERT INTO $table ($fields) VALUES ($values)";
        $statment = $pdo->prepare($sql);
        foreach($data as $key => $value)
        {
            $statment->bindValue(":$key", $value, type: PDO::PARAM_STR);
        }
        $statment->execute();
    }

    public function listCostume($table)
    {
        $pdo = parent::get_instance();
        $sql = "SELECT * FROM $table ORDER BY nome ASC";
        $statment = $pdo->query($sql);
        $statment->execute();

        return $statment->fetchAll();
    }
}