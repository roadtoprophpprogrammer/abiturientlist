<?php
namespace classes;

class Student
{
    private $surname;
    private $studentGroup;
    private $sex;
    private $name;
    private $email;
    private $egeResult;
    private $phone;
    private $birthday;

    public function __construct($name, $surname, $sex, $birthday, $phone, $egeResult, $email, $studentGroup)
    {
        $this->setBirthday($birthday);
        $this->setName($name);
        $this->setSurname($surname);
        $this->setSex($sex);
        $this->setPhone($phone);
        $this->setEgeResult($egeResult);
        $this->setEmail($email);
        $this->setGroup($studentGroup);
    }
    public function setName($name)
    {
        $this->name=$name;
    }
    public function setSurname($surname)
    {
        $this->surname=$surname;
    }
    public function setGroup($studentGroup)
    {
        $this->studentGroup=$studentGroup;
    }
    public function setSex($sex)
    {
        $this->sex=$sex;
    }
    public function setEmail($email)
    {
        $this->email=$email;
    }
    public function setEgeResult($egeResult)
    {
        $this->egeResult=$egeResult;
    }
    public function setPhone($phone)
    {
        $this->phone=$phone;
    }
    public function setBirthday($birthday)
    {
        $this->birthday=$birthday;
    }
    
    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function getGroup()
    {
        return $this->studentGroup;
    }
    public function getSex()
    {
        return $this->sex;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getEgeResult()
    {
        return $this->egeResult;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getBirthday()
    {
        return $this->birthday;
    }
    public function getValues()
    {
        return [
            'name'=>$this->name,
            'surname'=>$this->surname,
            'studentGroup'=>$this->studentGroup,
            'email'=>$this->email,
            'phone'=>$this->phone,
            'birthday'=>$this->birthday,
            'sex'=>$this->sex,
            'egeResult'=>$this->egeResult
        ];
    }
}
