<?php

if (!function_exists('storeImage')) {
    function storeImage($file, $place = "image")
    {
        $path = Storage::putFile(
            'public/' . $place .'/' . date('Y/m/d'),
            $file,
        );
        return $path;
    }
}

if (!function_exists('removeImage')) {
    function removeImage($file)
    {
        $path = str_replace('/storage', '/public', $file);
        if (Storage::exists($path)) {
            Storage::delete($path);
            return true;
        }        
        return false;
    }
}