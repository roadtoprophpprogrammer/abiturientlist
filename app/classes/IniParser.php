<?php
namespace classes;

class IniParser
{
    private $values = array();
    public function __construct($filename)
    {
        $this->values=parse_ini_file($filename, false, INI_SCANNER_NORMAL);
    }

    public function get()
    {
        return $this->values;
    }

    public function getValues(...$names)
    {
        $result = array();
        foreach ($names as $name) {
            $result[]=$this->values[$name];
        }
        return $result;
    }
}
