<?php

class CurriculoModel
{
    private $db;


    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    public function getAll()
    {
    $query=$this->db->query("SELECT * FROM curriculos");

    return $query->fetchAll(PDO::FETCH_ASSOC);
    }

}