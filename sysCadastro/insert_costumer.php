<?php
include_once "Manager.php";

$manager = new Manager();

$data = $_POST;

if(isset($data) && !empty($data))
{
    $manager->insertCostumer("clientes", $data);

    header("Location: index.php?costumer_add_success");
}