<?php
//interface para a classe lutador
interface iLutador
{
    public function apresentar();
    public function status();
    public function ganharLuta();
    public function perderLuta();
    public function empatarLuta();
}