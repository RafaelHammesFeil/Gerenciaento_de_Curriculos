<?php
 
require_once '../app/core/Database.php';
 

require_once '../app/Controllers/CurriculosController.php';
require_once '../app/Controllers/PessoasController.php';
require_once '../app/Controllers/UsuariosController.php';
 
// Obtém a URI da requisição atual
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
 
if ($uri === '/' || $uri === '/index.php') {
    include '../app/Views/usuarios/login.php';
} elseif ($uri === '/curriculos') {
    // Cria uma instância do CurriculosController e chama o método 'index' para listar todos
    $controller = new CurriculosController();
    $controller->index();
} elseif ($uri === '/curriculos/create') {
    // Cria uma instância do CurriculosController e chama o método 'create' para exibir o formulário de criação
    $controller = new CurriculosController();
    $controller->create();
} elseif ($uri === '/curriculos/store') {
    // Cria uma instância do PessoasController e chama o método 'store' para salvar no banco de dados
    $controller = new CurriculosController();
    $controller->store();



} elseif ($uri === '/pessoas') {
    // Cria uma instância do CurriculosController e chama o método 'index' para listar todos
    $controller = new PessoasController();
    $controller->index();
} elseif ($uri === '/pessoas/create') {
    // Cria uma instância do PessoasController e chama o método 'insert' para exibir o formulário de criação
    $controller = new PessoasController();
    $controller->insert();
} elseif ($uri === '/pessoas/store') {
    // Cria uma instância do PessoasController e chama o método 'store' para salvar no banco de dados
    $controller = new PessoasController();
    $controller->store();
}