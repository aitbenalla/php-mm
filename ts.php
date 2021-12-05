<?php

class MMTS
{
    protected $text;
    public function __construct($text)
    {
        $this->text = $text;
    }
    public function __toString()
    {
        return $this->text;
    }
}

$mmts = new MMTS('Hello World');

$text = (string) $mmts;
var_dump($text);

echo $mmts;