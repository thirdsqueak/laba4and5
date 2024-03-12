<?php

$name = $_GET['user'];

if (isset($name)) {
    
    echo "Привет, " . htmlspecialchars($name ). "!<br>";
}
$number = isset($_GET['number']) ? intval($_GET['number']) : 0;

if (isset($number)) {
    echo "Число -> " . htmlspecialchars($number) . "!<br>";

    if ($number >= 2 && $number <= 1000) {

        $primeNumbers = array();

        for ($i = 2; $i <= $number; $i++) {
           
            $isPrime = true;
 
            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j === 0) {
                    $isPrime = false;
                    break;
                }
            }

            if ($isPrime) {
                $primeNumbers[] = $i;
            }
        }

        echo "Простые числа, не превышающие " . $number . ":<br>";

        echo implode(", ", $primeNumbers);
    } 
} 
