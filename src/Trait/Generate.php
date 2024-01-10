<?php

namespace FileGenerator\Trait;

/**
 * ファイルを出力する処理を管理する
 * 
 * @package FileGenerator\Trait
 * 
 * @method string getDirectory()
 * @method string getFileName()
 * @method string getText()
 */
trait Generate
{
    /**
     * ファイルを生成する
     * 
     * @return bool
     */
    public function generate(): bool
    {
        $filePath = $this->getDirectory() . DIRECTORY_SEPARATOR . $this->getFileName();

        $result = file_put_contents($filePath, $this->getText());

        return $result !== false;
    }
}
