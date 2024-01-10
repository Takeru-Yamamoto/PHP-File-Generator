<?php

namespace FileGenerator\Laravel;

use FileGenerator\Laravel\Interface\GeneratorInterface;

use FileGenerator\Generator as FileGenerator;
use FileGenerator\EnvLoader;

use Illuminate\Contracts\View\View;

/**
 * \FileGenerator\Generatorを継承し、Laravel用に拡張したGenerator
 * 設定された出力先ディレクトリをstorage_path()を用いて成型する
 * 
 * @package FileGenerator\Laravel
 */
class Generator extends FileGenerator implements GeneratorInterface
{
    /**
     * コンストラクタ
     * EnvLoaderを使用しない
     */
    function __construct()
    {
    }

    /**
     * 設定された出力先ディレクトリを成型する
     *
     * @param string $directory
     * @return string
     */
    protected function moldDirectory(string $directory): string
    {
        if (!function_exists("storage_path")) return parent::moldDirectory($directory);

        return storage_path("app" . DIRECTORY_SEPARATOR . $directory);
    }

    /**
     * ファイルに出力するViewを設定する
     * 
     * @param View $view
     * @return static
     */
    public function setView(View $view): static
    {
        return $this->setText($view->render());
    }

    /**
     * ファイルに出力するViewを設定する
     * 
     * @param string $bladePath
     * @param array $viewData
     * @throws \RuntimeException
     * @return static
     */
    public function setBlade(string $bladePath, array $viewData = []): static
    {
        if (!function_exists("view")) throw new \RuntimeException("function view() is not defined.");

        return $this->setView(view($bladePath, $viewData));
    }

    /**
     * ファイルの出力先ディレクトリを取得する
     *
     * @return string
     */
    protected function directory(): string
    {
        if (!function_exists("config")) return EnvLoader::DIRECTORY;

        return config("file-generator.directory", EnvLoader::DIRECTORY);
    }

    /**
     * ファイル名のフォーマットを取得する
     *
     * @return string
     */
    protected function fileNameFormat(): string
    {
        if (!function_exists("config")) return EnvLoader::FILE_NAME_FORMAT;

        return config("file-generator.file_name_format", EnvLoader::FILE_NAME_FORMAT);
    }

    /**
     * ファイルの拡張子を取得する
     *
     * @return string
     */
    protected function fileExtension(): string
    {
        if (!function_exists("config")) return EnvLoader::FILE_EXTENSION;

        return config("file-generator.file_extension", EnvLoader::FILE_EXTENSION);
    }
}
