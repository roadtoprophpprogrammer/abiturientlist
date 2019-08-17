<?php
namespace controllers;

use classes\DbConnection;
use Throwable;

class Home
{
    public static function createView()
    {
        switch ($_POST['action']) {
            case 'SUBMIT':
                self::onRegistration();
                break;
            case 'EDIT':
            default:
                self::render();
                break;
        }
    }
    public static function render()
    {
        try {
            //\models\DbHelper::loadList();
            require_once('app/views/home/index.php');
        } catch (Throwable $e) {
        }
    }
}
