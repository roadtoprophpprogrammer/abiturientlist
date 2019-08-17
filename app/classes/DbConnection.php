<?php
namespace classes;

class DbConnection
{
    private $connection;
    public function __construct($settings)
    {
        $dsn = 'mysql:dbname='.$settings[0].';host=127.0.0.1;charset=UTF8';
        $user=$settings[1];
        $password=$settings[2];
        $this->connection=new \PDO($dsn, $user, $password);
        $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    public function getConnection()
    {
        return $this->connection;
    }
}
