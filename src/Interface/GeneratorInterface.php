<?php

namespace FileGenerator\Interface;

/**
 * FileGeneratorのInterface
 * 
 * @package FileGenerator\Interface
 */
interface GeneratorInterface
{
    /*----------------------------------------*
     * Generate
     *----------------------------------------*/

    /**
     * ファイルを生成する
     * 
     * @return bool
     */
    public function generate(): bool;



    /*----------------------------------------*
     * Directory
     *----------------------------------------*/

    /**
     * ファイルの出力先のディレクトリを設定する
     * 
     * @param string $directory
     * @return static
     */
    public function setDirectory(string $directory): static;

    /**
     * ファイルの出力先のディレクトリを追加する
     * 
     * @param string $directory
     * @return static
     */
    public function addDirectory(string $directory): static;



    /*----------------------------------------*
     * File
     *----------------------------------------*/

    /**
     * ファイル名を設定する
     *
     * @param string $fileName
     * @return static
     */
    public function setFileName(string $fileName): static;

    /**
     * ファイル名のフォーマットを設定する
     *
     * @param string $fileNameFormat
     * @return static
     */
    public function setFileNameFormat(string $fileNameFormat): static;

    /**
     * ファイルの拡張子を設定する
     *
     * @param string $fileExtension
     * @return static
     */
    public function setFileExtension(string $fileExtension): static;



    /*----------------------------------------*
     * Text
     *----------------------------------------*/

    /**
     * ファイルに出力する文字列を設定する
     * 
     * @param string $text
     * @return static
     */
    public function setText(string $text): static;

    /**
     * ファイルに出力する文字列を追加する
     * 
     * @param string $text
     * @return static
     */
    public function addText(string $text): static;
}
