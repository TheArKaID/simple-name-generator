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
}
