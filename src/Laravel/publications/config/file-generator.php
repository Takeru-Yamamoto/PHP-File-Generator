<?php

use FileGenerator\EnvLoader;

return [
    /**
     * Basic
     * 
     * 基本設定
     * 
     * directory       : string 出力するファイルの出力先ディレクトリ
     * file_name_format: string 出力するファイル名のフォーマット
     * file_extension  : string 出力するファイルの拡張子
     */
    "directory"        => env(EnvLoader::DIRECTORY_KEY, EnvLoader::DIRECTORY),
    "file_name_format" => env(EnvLoader::FILE_NAME_FORMAT_KEY, EnvLoader::FILE_NAME_FORMAT),
    "file_extension"   => env(EnvLoader::FILE_EXTENSION_KEY, EnvLoader::FILE_EXTENSION),
];
