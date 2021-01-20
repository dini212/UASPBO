<?php

class wordInspiration
{
    protected $word = "",
              $sum = 0,
              $total = 0;
    
    public function __construct($word) {
        $this->word = $word;
    }

    public function getWord()
    {
        return $this->word;
    }

    public function setWord($word)
    {
        return $this->word = $word;
    }

    public function getSum()
    {
        return $this->sum;
    }

    public function setSum($sum)
    {
        return $this->sum = $sum;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function setTotal($total)
    {
        return $this->total = $total;
    }
}