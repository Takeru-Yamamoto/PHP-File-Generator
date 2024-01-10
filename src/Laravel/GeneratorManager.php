<?php

namespace FileGenerator\Laravel;

use FileGenerator\Laravel\Interface\ManagerInterface;
use FileGenerator\Proxy\GeneratorManager as FileGeneratorManager;

use FileGenerator\Laravel\Generator;

/**
 * Facadeを経由してstaticにアクセスされるManager
 * 
 * @package FileGenerator\Laravel
 */
class GeneratorManager extends FileGeneratorManager implements ManagerInterface
{
    /**
     * Generatorのインスタンスを生成する
     *
     * @return \FileGenerator\Laravel\Generator
     */
    public function make(): Generator
    {
        return new Generator();
    }
}
