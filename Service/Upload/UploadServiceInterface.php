<?php
/**
 * Created by PhpStorm.
 * User: PC1
 * Date: 11.6.2017 г.
 * Time: 15:37
 */

namespace Service\Upload;


interface UploadServiceInterface
{
    public function upload($fileInfo, $destination): string;
}