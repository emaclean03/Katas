<?php


namespace App;


class CapitalizeLetters
{
    public function toJadenCase(string $word):string
    {
        return ucwords($word); //Adding for hacktoberfest :0
    }
}