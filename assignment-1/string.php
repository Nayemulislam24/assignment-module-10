<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str)
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

function reverseString($str)
{
    return strrev($str);
}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = reverseString($string);
    echo "Original String: $string";

    echo " Vowel Count: $vowelCount";

    echo  "  Reversed String: $reversedString";
    echo"<br>";
}
