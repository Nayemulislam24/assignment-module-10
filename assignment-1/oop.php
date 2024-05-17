<?php
class StringProcessor
{
    private $strings;

    public function __construct($strings)
    {
        $this->strings = $strings;
    }

    public function countVowels($str)
    {
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        $count = 0;
        $strLower = strtolower($str);

        for ($i = 0; $i < strlen($strLower); $i++) {
            if (in_array($strLower[$i], $vowels)) {
                $count++;
            }
        }
        return $count;
    }

    public function reverseString($str)
    {
        return strrev($str);
    }

    public function processStrings()
    {
        foreach ($this->strings as $string) {
            $vowelCount = $this->countVowels($string);
            $reversedString = $this->reverseString($string);
            echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString";
            echo"<br>";
        }
    }
}

$strings = ["Hello", "World", "PHP", "Programming"];
$processor = new StringProcessor($strings);
$processor->processStrings();
