<?php


namespace App;


class StringEndsWith
{
    public function compare(string $word, string $ending): bool
    {
      return str_ends_with($word, $ending);
    }
}