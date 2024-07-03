<?php
class RandomNameGenerator
{
    private $vowels;
    private $consonants;

    public function __construct()
    {
        $this->vowels = 'aeiou';
        $this->consonants = 'bcdfghjklmnpqrstvwxyz';
    }

    private function generateRandomString(int $length): string
    {
        if ($length < 3) {
            $length = 3;
        }

        $pattern = 'CVCVC';
        $randomString = '';

        foreach (str_split($pattern) as $char) {
            if ($char === 'C') {
                $randomString .= $this->consonants[rand(0, strlen($this->consonants) - 1)];
            } else {
                $randomString .= $this->vowels[rand(0, strlen($this->vowels) - 1)];
            }
        }

        return ucfirst($randomString);
    }
}
