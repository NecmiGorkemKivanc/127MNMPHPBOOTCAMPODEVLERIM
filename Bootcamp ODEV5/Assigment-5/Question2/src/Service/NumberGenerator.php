<?php
namespace App\Service;
class NumberGenerator
{
    public function getRandomNumber(): string
    {
        return random_int(1,100);
    }
}


?>