<?php

require_once __DIR__ . "/wordInspiration.php";

class totalSum
{
    private $word,
            $sums = [];

    public function getWord()
    {
        return $this->word;
    }

    public function setWord($word)
    {
       return $this->word = $word; 
    }

    public function getSums()
    {
        return $this->sums;
    }

    public function setSums($sums)
    {
        return $this->sums = $sums;
    }

    public function addCounts($count)
    {
        $this->sums[] = new $count($this->word);
    }

    public function getTotalCost()
    {
        $total = 0;
        foreach($this->sums as $cost) {
            $total+=$cost->getSum();
        }
        return $total;
    }
}
