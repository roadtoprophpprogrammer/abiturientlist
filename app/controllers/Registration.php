<?php
namespace controllers;

use Throwable;

class Registration
{

    public static function createView()
    {
        if (isset($_POST['submited'])) {
            self::registration();
        } else {
            self::renderForm();
        }
    }
    public static function renderForm()
    {
        require_once('app/views/registration/index.php');
    }
    public static function registration()
    {
        $student = new \classes\Student(
            $_POST['name'],
            $_POST['surname'],
            $_POST['sex'],
            $_POST['birthday'],
            $_POST['phone'],
            $_POST['egeResult'],
            $_POST['email'],
            $_POST['studentGroup']
        );
        try {
            \classes\StudentValidator::validate($student);
            $dbSettings=new \classes\IniParser('app/config/config.ini');
            $dbConnection=new \classes\DbConnection($dbSettings->getValues('db_name', 'db_login', 'db_password'));
            $dbHelper=new \models\DbHelper($dbConnection->getConnection());
            $dbHelper->addStudent($student);
        } catch (\Exception $e) {
            $errors=\unserialize($e->getMessage());
            var_dump($e->getMessage());
            require_once('app/views/registration/index.php');
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }
}
