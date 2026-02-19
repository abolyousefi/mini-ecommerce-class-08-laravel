<?php
if (!function_exists('calcPercent')) {
    function calcPercent(int|float $total, int|float $amount): int
    {
    return $amount * 100 / $total;
    }
}
