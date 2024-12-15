<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait Upload
{
    public static function Upload($request, $key, $dir = "image", $name = null, $storage = "public")
    {
        $data = $request->validated();
        if ($name == null) {
            $filename = $data[$key]->getClientOriginalName();
        } else {
            $filename = $name . '.' . $data[$key]->extension();
        }

        $data[$key]->storeAs($dir, $filename, $storage);

        return $dir . '/' . $filename;
    }    
    public static function DeleteFile(String $ruta, String $storage = "public")
    {
        return Storage::disk($storage)->delete($ruta);
    }
    public static function RenameFile(String $ruta_old, String $ruta_new)
    {
        return (rename($ruta_old, $ruta_new)) ? $ruta_new : false;
    }
}
