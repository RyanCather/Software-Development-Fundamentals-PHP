<?php
function outputWelcome()
{
    echo "Hello world!";
}

?>

<p>This is HTML separating the PHP Blocks.</p>



<?php

outputWelcome(); // call the function
?>



<?php
function welcomeName($username): void
{
    echo "Hello $username <br>";
}

welcomeName("Steve");
welcomeName("Peggy");
welcomeName("Leia");
welcomeName("Han");

?>

<?php
function addNumbers (int $firstNumber, int $secondNumber): int
{
    return $firstNumber + $secondNumber;
}

echo addNumbers(6,7);
?>