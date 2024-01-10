<?php

namespace FileGenerator;

use EnvLoader\BaseEnvLoader;

/**
 * FileGeneratorの.envファイルの値を管理するクラス
 * 
 * @package FileGenerator
 */
class EnvLoader extends BaseEnvLoader
{
    /**
     * key名に共通する接頭後
     * 
     * @var string
     */
    const KEY_PREFIX = "FILE_GENERATOR_";



    /*----------------------------------------*
     * Directory
     *----------------------------------------*/

    /**
     * 出力先ディレクトリ
     * 
     * @var string
     */
    public string $directory;

    /**
     * 出力先ディレクトリのデフォルト値
     * 
     * @var string
     */
    const DIRECTORY = "file-generator";

    /**
     * 出力先ディレクトリのkey名
     * 
     * @var string
     */
    const DIRECTORY_KEY = self::KEY_PREFIX . "DIRECTORY";



    /*----------------------------------------*
     * File Name Format
     *----------------------------------------*/

    /**
     * 出力するファイル名のフォーマット
     * 
     * @var string
     */
    public string $fileNameFormat;

    /**
     * 出力するファイル名のフォーマットのデフォルト値
     * 
     * @var string
     */
    const FILE_NAME_FORMAT = "YmdHisu";

    /**
     * 出力するファイル名のフォーマットのkey名
     * 
     * @var string
     */
    const FILE_NAME_FORMAT_KEY = self::KEY_PREFIX . "FILE_NAME_FORMAT";



    /*----------------------------------------*
     * File Extension
     *----------------------------------------*/

    /**
     * 出力するファイルの拡張子
     * 
     * @var string
     */
    public string $fileExtension;

    /**
     * 出力するファイルの拡張子のデフォルト値
     * 
     * @var string
     */
    const FILE_EXTENSION = "";

    /**
     * 出力するファイルの拡張子のkey名
     * 
     * @var string
     */
    const FILE_EXTENSION_KEY = self::KEY_PREFIX . "FILE_EXTENSION";


    /**
     * .envファイルの内容をクラスのプロパティとしてセットする
     * 
     * @return void
     */
    protected function setEnv(): void
    {
        $this->directory      = $this->getEnvString(self::DIRECTORY_KEY, self::DIRECTORY);
        $this->fileNameFormat = $this->getEnvString(self::FILE_NAME_FORMAT_KEY, self::FILE_NAME_FORMAT);
        $this->fileExtension  = $this->getEnvString(self::FILE_EXTENSION_KEY, self::FILE_EXTENSION);
    }
}
