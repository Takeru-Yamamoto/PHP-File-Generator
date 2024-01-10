<?php

namespace FileGenerator\Proxy\Interface;

use FileGenerator\Interface\GeneratorInterface;

/**
 * Proxyを経由してstaticにアクセスされるManagerのInterface
 * 
 * @package FileGenerator\Proxy\Interface
 */
interface ManagerInterface
{
    /**
     * Generatorのインスタンスを生成する
     *
     * @return \FileGenerator\Interface\GeneratorInterface
     */
    public function make(): GeneratorInterface;

    /**
     * ファイルを生成する
     * 
     * @param string|null $directory
     * @param string|null $fileName
     * @param string|null $text
     * @return bool
     */
    public function generate(?string $directory = null, ?string $fileName = null, ?string $text = null): bool;
}
