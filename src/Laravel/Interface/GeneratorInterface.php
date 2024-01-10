<?php

namespace FileGenerator\Laravel\Interface;

use FileGenerator\Interface\GeneratorInterface as FileGeneratorInterface;

use Illuminate\Contracts\View\View;

/**
 * Laravel用に拡張したGeneratorのInterface
 * 
 * @package FileGenerator\Laravel\Interface
 */
interface GeneratorInterface extends FileGeneratorInterface
{
    /**
     * ファイルに出力するViewを設定する
     * 
     * @param View $view
     * @return static
     */
    public function setView(View $view): static;

    /**
     * ファイルに出力するViewを設定する
     * 
     * @param string $bladePath
     * @param array $viewData
     * @throws \RuntimeException
     * @return static
     */
    public function setBlade(string $bladePath, array $viewData = []): static;
}
