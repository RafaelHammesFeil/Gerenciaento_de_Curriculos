<?php

require_once '../app/Models/CurriculoModel.php';

class CurriculosController
{
    private $model;

    public function __construct()
    {
        $this->model = new CurriculoModel();
    }

    public function index()
    {
        $curriculos = $this->model->getAll();

        include '../app/Views/curriculos/index.php';
    }
}