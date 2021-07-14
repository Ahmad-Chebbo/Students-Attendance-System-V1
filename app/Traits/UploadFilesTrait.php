<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

/**
 * Trait UploadAble
 * @package App\Traits
 */
trait UploadFilesTrait
{
    /**
     * @param Request $request
     * @param  $file
     * @param null $folder
     * @return string
     */
    public function uploadOne(Request $request, $file, $folder = null): string
    {
        $url = "";
        $path = public_path($folder);
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        if ($request->has($file) && ($request->file($file) instanceof UploadedFile)) {
            $fileName = Str::uuid()->toString() . '.' . $request->file($file)->getClientOriginalExtension();
            $request->file($file)->move($path, $fileName);
            $url =  $folder . $fileName;
        }
        return $url;
    }

    /**
     * @param Request $request
     * @param $file
     * @param null $folder
     * @return array
     */
    public function uploadMany(Request $request, $file, $folder = null): array
    {
        $urls = [];
        $path = public_path($folder);
        if (!File::isDirectory($path)) {
            File::makeDirectory($path, 0777, true, true);
        }
        foreach ($request->file($file) as $single_file) {
            $fileName = Str::uuid()->toString() . '.' . $single_file->getClientOriginalExtension();
            $single_file->move($path, $fileName);
            $url =  $folder . $fileName;
            $urls[] = $url;
        }
        return $urls;
    }

    /**
     * @param $file
     */
    public function deleteOne($file)
    {
        $path = str_replace(asset(''), "", $file);
        if (File::exists($path)) {
            unlink($path);
        }
    }
}
