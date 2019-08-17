<?php
namespace classes;

use Exception;

class StudentValidator
{
    public static function validate(\classes\Student $student)
    {
        $result=array();
        $result[self::validateName($student->getName())][]='name';
        $result[self::validateSurname($student->getSurname())][]='surname';
        $result[self::validateEmail($student->getEmail())][]='email';
        $result[self::validatePhone($student->getPhone())][]='phone';
        $result[self::validateBirthday($student->getBirthday())][]='birthday';
        $result[self::validateEgeResult($student->getEgeResult())][]='egeResult';
        $result[self::validateGroup($student->getGroup())][]='studentGroup';
        
        if (\is_array($result['error'])) {
            throw new Exception(serialize($result['error']));
        }
    }

    public static function validateName($str)
    {
        $str=\trim($str);
        preg_match('/[а-яёА-ЯЁ\-\ \']+/u', $str, $matches);
        return (!empty($str) && mb_strlen($str)<=200 && $matches[0] == $str)?'success':'error';
    }
    public static function validateSurname($str)
    {
        $str=\trim($str);
        preg_match('/[а-яёА-ЯЁ\-\ \']+/u', $str, $matches);
        return (!empty($str) && mb_strlen($str)<=200 && $matches[0] == $str)?'success':'error';
    }
    public static function validateEmail($str)
    {
        $str=\trim($str);
        preg_match('/.+@.+\..+/u', $str, $matches);
        return (!empty($str) && $matches[0]==$str)?'success':'error';
    }
    public static function validateBirthday($str)
    {
        $str=\trim($str);
        $now=new \DateTime('now');
        $diff=$now->diff(\DateTime::createFromFormat('Y-m-d', $str));
        return (!empty($str) && $diff->y<100 && $diff->invert)?'success':'error';
    }
    public static function validateEgeResult($num)
    {
        $num=\trim($num);
        return ($num>0 && $num<=500)?'success':'error';
    }
    public static function validatePhone($str)
    {
        $str=\trim($str);
        preg_match("/^\ *\-*((\+\ *7)|8)([\ \(\)\-]*\d){10}$/u", $str, $matches);
        return ($matches[0]==$str)?'success':'error';
    }
    public static function validateGroup($str)
    {
        $str=\trim($str);
        preg_match("/[а-яёА-ЯЁa-zA-Z0-9]{4}/u", $str, $matches);
        return ($matches[0]==$str)?'success':'error';
    }
}
