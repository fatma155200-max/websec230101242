<?php

if (!function_exists('isPrime')) {
    function isPrime($number)
    {
        if ($number <= 1) return false;
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

if (!function_exists('getEvenNumbers')) {
    function getEvenNumbers($start, $end)
    {
        $evenNumbers = [];
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 == 0) {
                $evenNumbers[] = $i;
            }
        }
        return $evenNumbers;
    }
}

if (!function_exists('getPrimeNumbers')) {
    function getPrimeNumbers($start, $end)
    {
        $primeNumbers = [];
        for ($i = $start; $i <= $end; $i++) {
            if (isPrime($i)) {
                $primeNumbers[] = $i;
            }
        }
        return $primeNumbers;
    }
}
