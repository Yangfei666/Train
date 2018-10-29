<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Storage;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * 文件上传
     * @param $file
     * @return string
     */
    protected function upload($file, $path)
    {
        // 获取上传文件名称
        $originalName = $file->getClientOriginalName();
        // 获取上传文件后缀
        $ext = $file->getClientOriginalExtension();
        // 获取上传文件路径
        $realPath = $file->getRealPath();
        // 获取上传文件的Mime类型
        // $type = $image->getClientMimeType();

        $newFileName = $path. date('Ymd') . '/' . md5(microtime()). '.' . $ext;

        if (Storage::disk('upload')->put($newFileName, file_get_contents($realPath))) {
            return $newFileName;
        }

        return null;
    }
}
