<?php
class Conexao
{
    public static $instance;

    public static function get_instance()
    {
        if( !isset( self::$instance ) )
        {
            self::$instance = new PDO('mysql:host=localhost;dbname=cadastro', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'") );
            self::$instance->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }

}