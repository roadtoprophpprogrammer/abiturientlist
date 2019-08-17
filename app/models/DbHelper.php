<?php
namespace models;

class DbHelper
{
    private $connection;
    public function __construct($connection)
    {
        $this->connection=$connection;
    }
    public function addStudent(\classes\Student $student)
    {
        $studVal=$student->getValues();
        $columns=implode(', ', array_keys($studVal));
        $values=implode(', :', array_keys($studVal));
        $values=':'.$values;
        $statement=$this->connection->prepare("INSERT INTO abiturients ($columns) VALUES ($values)");
        foreach ($studVal as $key => $value) {
            if ($key == 'egeResult') {
                $statement->bindValue(':'.$key, (int)$value);
            } else {
                $statement->bindValue(':'.$key, $value);
            }
        }
        $statement->execute();
    }
}
