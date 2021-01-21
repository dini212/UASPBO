<?php

require_once __DIR__ . "/wordInspiration.php";

class checkLength extends wordInspiration
{

    public function getCheck()
    {
        if($this->total = strlen($this->word) == 130) {
          return $this->sum = $this->total * 0.1 - 3;
        } 
    }   
}