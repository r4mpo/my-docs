<?php

namespace App\Interfaces;

interface FilesInterface
{
    public function saveFile($request, $path);
    public function removeFile($file, $path);
}