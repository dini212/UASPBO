<?php

require_once __DIR__ . "/wordInspiration.php";

class quantity extends wordInspiration
{

    public function getCheckUpperCase()
    {
        if($this->total = preg_match("/[A-Z]/", $this->word)) {
            return $this->sum = $this->total * 4;
        } else {
            return $this->sum;
        }
    }

    public function getCheckPunctuation()
    {
        if($this->total = preg_match_all("/[^#,!]/", $this->word)) {
            return $this->sum = $this->total * 2 * 4;
        } else {
            return $this->sum;
        }
    }

    public function getCheckNumber()
    {
        if($this->total = preg_match("/[0-9]/", $this->word)) {
            return $this->sum = $this->total * 12;
        } else {
            return $this->sum;
        }
    }

    public function getCheckSymbol() 
    {
        if($this->total = preg_match_all("/[-+@]/", $this->word)) {
            return $this->sum = $this->total / (0.5 * 4);
        } else {
            return $this->sum;
        }
    }
}