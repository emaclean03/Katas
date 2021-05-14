<?php


namespace App;


class IsVowel
{
    public function isVowel(string $string): int
    {
        $vowels = ['a', 'e', 'i', 'o', 'u'];

        $newString = str_split($string);
        $numberOfVowels = 0;

        for ($i = 0; $i < count($newString); $i++) {
            for ($j = 0; $j < count($vowels); $j++) {
                if ($newString[$i] === $vowels[$j]) $numberOfVowels++;
            }
        }
        return $numberOfVowels;
    }

}