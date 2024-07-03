<?php

namespace TheArKaID;

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

        $pattern = $this->getPattern($length);
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

    private function getPattern(int $length): string
    {
        $pattern = '';
        if ($length === 3) {
            $pattern = 'CVC';
        } else {
            $basePattern = 'CVC';
            $repeatCount = intdiv($length - 3, 2);
            $extra = ($length - 3) % 2;
            $pattern = $basePattern . str_repeat('VC', $repeatCount);
            if ($extra) {
                $pattern .= 'V';
            }
        }
        return $pattern;
    }

    public function generateGivenName(int $length = 3): string
    {
        return $this->generateRandomString($length);
    }

    public function generateSurname(int $length = 3): string
    {
        return $this->generateRandomString($length);
    }

    public function generateFullName(int $givenNameLength = 3, int $surnameLength = 3): string
    {
        $givenName = $this->generateGivenName($givenNameLength);
        $surname = $this->generateSurname($surnameLength);
        return $givenName . ' ' . $surname;
    }
}
