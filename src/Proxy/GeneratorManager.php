<?php

namespace FileGenerator\Proxy;

use FileGenerator\Proxy\Interface\ManagerInterface;

use FileGenerator\Generator;

/**
 * Proxyを経由してstaticにアクセスされるManager
 * 
 * @package FileGenerator\Proxy
 */
class GeneratorManager implements ManagerInterface
{
    /**
     * Generatorのインスタンスを生成する
     *
     * @return \FileGenerator\Generator
     */
    public function make(): Generator
    {
        return new Generator();
    }

    /**
     * ファイルを生成する
     * 
     * @param string|null $directory
     * @param string|null $fileName
     * @param string|null $text
     * @return bool
     */
    public function generate(?string $directory = null, ?string $fileName = null, ?string $text = null): bool
    {
        $generator = $this->make();

        if (!is_null($directory)) $generator->setDirectory($directory);

        if (!is_null($fileName)) $generator->setFileName($fileName);

        if (!is_null($text)) $generator->setText($text);

        return $generator->generate();
    }
}
