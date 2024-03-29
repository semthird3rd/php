<html>
    <body>

    <?php
$string = "The quick brown fox jumps over the lazy dog.";

// Length of the string
echo "Length of the string: " . strlen($string) . "<br>";

// Convert string to uppercase
echo "Uppercase: " . strtoupper($string) . "<br>";

// Convert string to lowercase
echo "Lowercase: " . strtolower($string) . "<br>";

// Replace a substring
echo "Replace 'fox' with 'cat': " . str_replace("fox", "cat", $string) . "<br>";

// Substring
echo "Substring from index 4 to 15: " . substr($string, 4, 11) . "<br>";

// Split a string into an array
echo "Split string into an array: ";
print_r(explode(" ", $string));

// Join an array into a string
$array = array("The", "quick", "brown", "fox", "jumps", "over", "the", "lazy", "dog.");
echo "<br>Join array into a string: " . implode(" ", $array);
?>





    </body>
</html>