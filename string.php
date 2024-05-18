<?php
$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Counting the number of vowels in the string
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);
    
    // Reverse string
    $reversedString = strrev($string);
    
    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>