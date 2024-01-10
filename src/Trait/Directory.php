<?php

namespace FileGenerator\Trait;

/**
 * ファイルを出力するディレクトリを管理する
 * 
 * @package FileGenerator\Trait
 * 
 * @property-read \FileGenerator\EnvLoader $env
 */
trait Directory
{
    /**
     * ファイルの出力先ディレクトリ
     * 
     * @var string
     */
    protected string $directory = "";


    /**
     * ファイルの出力先ディレクトリを取得する
     * 
     * @throws \RuntimeException
     * @return string
     */
    protected function getDirectory(): string
    {
        // 出力先ディレクトリ
        $directory = empty($this->directory) ? $this->directory() : $this->directory;

        // 出力先ディレクトリを成型する
        $directory = $this->moldDirectory($directory);

        // 出力先ディレクトリが空の場合は、例外を発生させる
        if (empty($directory)) throw new \RuntimeException("Output directory is empty.");

        // 出力先ディレクトリが存在しない場合は、ディレクトリを作成する
        if (!file_exists($directory)) mkdir($directory, 0777, true);

        return $directory;
    }

    /**
     * 設定された出力先ディレクトリを成型する
     *
     * @param string $directory
     * @return string
     */
    protected function moldDirectory(string $directory): string
    {
        return $directory;
    }

    /**
     * ファイルの出力先ディレクトリを取得する
     *
     * @return string
     */
    protected function directory(): string
    {
        return $this->env->directory;
    }

    /**
     * ファイルの出力先のディレクトリを設定する
     * 
     * @param string $directory
     * @return static
     */
    public function setDirectory(string $directory): static
    {
        // $directoryが空の場合は、処理を終了する
        if (empty($directory)) return $this;

        $this->directory = $directory;

        return $this;
    }

    /**
     * ファイルの出力先のディレクトリを追加する
     * 
     * @param string $directory
     * @return static
     */
    public function addDirectory(string $directory): static
    {
        // $directoryが空の場合は、処理を終了する
        if (empty($directory)) return $this;

        // $this->directoryが空の場合は、setDirectory()を実行する
        if (empty($this->directory)) return $this->setDirectory($directory);

        $this->directory .= DIRECTORY_SEPARATOR . $directory;

        return $this;
    }
}
