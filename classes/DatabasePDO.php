<?php

class DatabasePDO {
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $dbname = 'php_blog';

    private $dbh;
    private $error;
    private $statement;

    public function __construct()
    {
        // set DSN
        $dsn = 'mysql:host='. $this->host .';dbname='. $this->dbname. ';charset=utf8mb4';
        // set options
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION
        );
        // create new PDO
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    public function query($query) {
        $this->statement = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null) {
        if(is_null($type)) {
            switch(true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }

        $this->statement->bindValue($param, $value, $type);
    }

    public function execute() {
        return $this->statement->execute();

    }

    public function lastInsertId() {
        return $this->dbh->lastInsertId();
    }

    public function resultset() {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>