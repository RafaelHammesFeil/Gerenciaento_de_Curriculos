<?php

// A classe Database é responsável por gerenciar a conexão com o banco de dados
class Database
{
    // Propriedade estática para armazenar a conexão com o banco de dados
    private static $connection;

    // Método estático para obter a conexão com o banco de dados
    public static function getConnection()
    {
        // Verifica se a conexão já foi estabelecida
        if (!self::$connection) {
            // Se a conexão ainda não existir, cria uma nova instância de PDO para conectar ao banco de dados MySQL
            self::$connection = new PDO('mysql:host=localhost;dbname=favoritos_db', 'root', 'root');

            // Define o modo de tratamento de erros como exceções, para facilitar o tratamento de erros
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        // Retorna a conexão existente
        return self::$connection;
    }



}
