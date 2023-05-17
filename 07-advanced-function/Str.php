<?php

class Str
{
    private $s;
    public function __construct(string $s)
    {
        $this->s = $s;
    }

    public function lower()
    {
        return mb_strtolower($this->s, 'UTF-8');
    }

    public function upper()
    {
        return mb_strtoupper($this->s, 'UTF-8');
    }

    public function title()
    {
        return mb_convert_case($this->s, MB_CASE_TITLE, 'UTF-8');
    }

    public function convert(string $format)
    {
        if (!in_array($format, ['lower', 'upper', 'title'])) {
            throw new Exception('Invalid format');
        }
        return $this->$format();
    }

    #static function 
    public function __toString()
    {
        return $this->s;
    }

    public static function compare(Str $s1, Str $s2)
    {
        return strcmp($s1->s, $s2->s);
    }
}