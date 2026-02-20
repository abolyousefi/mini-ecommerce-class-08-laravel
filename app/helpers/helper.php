<?php
if (!function_exists('calcPercent')) {
    function calcPercent(int|float $total, int|float $amount): int
    {
    return $amount * 100 / $total;
    }
}
if (!function_exists('activeSort')) {
    function activeSort(string $type): ?string
    {
        $request  =  request();

        $default = 'newest';

        if (!$request->filled('sort')) {
            if ($type == $default) {
                return "text-blue-500";
            }
            return  null;
        }
        return   $request->input('sort') == $type ? "text-blue-500" :"text-gray-400";

    }

}
