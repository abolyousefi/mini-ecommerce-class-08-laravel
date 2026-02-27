<?php

use function PHPUnit\Framework\isString;

if (!function_exists('calcPercent')) {
    function calcPercent(int|float $total, int|float $amount): int
    {
        return $amount * 100 / $total;
    }
}
    if (!function_exists('GenerateSortRoutParameter')) {
        function GenerateSortRoutParameter(string $type): array
        {

            $request = request();

            $query = $request->all();

            $query['sort'] = $type;

            return $query;
        }
    }
    if (!function_exists('getFullName')) {
    function getFullName(? \App\Models\User  $user = null): string
    {
        if (!$user){
         $user  = auth()->user();
        }
    return $user->first_name .' '. $user->last_name;
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
if (!function_exists('activeAccountSidebar')) {
    function activeAccountSidebar(string $RouteName): string
    {

        if (\Illuminate\Support\Facades\Route::currentRouteName() == $RouteName){
            return 'bg-blue-500/10 text-blue-500';
        }
        return 'hover:text-blue-500';
    }
}

if (!function_exists('activeAdminSidebar')) {
    function activeAdminSidebar(string | array $RouteName): string
    {
         $currentRouteName = \Illuminate\Support\Facades\Route::currentRouteName();

        if (is_String($RouteName)){
         $RouteName = [$RouteName];
        }

        if (in_array($currentRouteName, $RouteName)){
        return 'active';
    }

        return '';
    }
}

