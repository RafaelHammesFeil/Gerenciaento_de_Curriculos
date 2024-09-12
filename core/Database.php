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



    /**
     * Explicação Geral
     */
    /*
        Classe Singleton: 
            -> A classe Database utiliza o padrão de projeto Singleton para garantir que apenas uma conexão com o banco de dados seja criada e utilizada em toda a aplicação. Isso é feito armazenando a conexão na propriedade estática $connection.

        Método Estático getConnection:
            -> O método getConnection() é responsável por retornar a conexão com o banco de dados.
            -> Verificação de Conexão: O método verifica se a conexão já foi estabelecida. Se não, ele cria uma nova instância de PDO para se conectar ao banco de dados.
            -> Tratamento de Erros: O setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) define que qualquer erro na conexão ou nas operações com o banco de dados deve ser lançado como uma exceção (PDOException), facilitando o manejo desses erros.

        Conexão com MySQL: 
            -> O código atual está configurado para conectar a um banco de dados MySQL utilizando o PDO (PHP Data Objects).

    */



    /**
     * USANDO DRIVE DO BANCO DE DADOS ORACLE
     */
    /* 
        public static function getConnection()
        {
            if (!self::$connection) {
                // Se a conexão ainda não existir, cria uma nova instância de PDO para conectar ao banco de dados Oracle
                // 'oci' é o driver usado para Oracle
                // O DSN inclui o hostname, o número da porta, e o nome do serviço (SID ou Service Name)
                // Aqui, estamos conectando ao Oracle XE (Express Edition) rodando localmente
                self::$connection = new PDO('oci:dbname=//localhost:1521/XEPDB1', 'root', 'root');
                
                // Define o modo de tratamento de erros como exceções, para facilitar o tratamento de erros
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$connection;
        }
    */

    /**
     * USANDO DRIVE DO BANCO DE DADOS POSTGRESQL
     */
    /* 
        public static function getConnection()
        {
            // Verifica se a conexão já foi estabelecida
            if (!self::$connection) {
                // Se a conexão ainda não existir, cria uma nova instância de PDO para conectar ao banco de dados PostgreSQL
                // 'pgsql' é o driver usado para PostgreSQL
                // 'localhost' é o host onde o banco de dados está rodando
                // 'favoritos_db' é o nome do banco de dados
                // 'root' é o nome do usuário e 'root' é a senha (essas credenciais podem variar)
                self::$connection = new PDO('pgsql:host=localhost;dbname=favoritos_db', 'root', 'root');
                
                // Define o modo de tratamento de erros como exceções, para facilitar o tratamento de erros
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            
            // Retorna a conexão existente
            return self::$connection;
        }
    */


    /**
     * Explicação para os Outros Drivers
     */
    /* 
        PostgreSQL:
            -> Driver: pgsql é o driver utilizado para conectar ao PostgreSQL.
            -> DSN (Data Source Name): O formato é pgsql:host=HOSTNAME;dbname=DATABASE_NAME.
            -> Host e Nome do Banco de Dados: localhost e favoritos_db são respectivamente o host e o nome do banco de dados.

        Oracle:
            -> Driver: oci é o driver utilizado para conectar ao Oracle.
            -> DSN: O DSN inclui o hostname, a porta e o nome do serviço (SID ou Service Name). O formato é oci:dbname=//HOSTNAME:PORT/SERVICENAME.
            -> Host, Porta e Service Name: localhost, 1521, e XEPDB1 são, respectivamente, o host, o número da porta, e o nome do serviço para a instância Oracle XE.
    */
}
