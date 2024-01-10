<?php

namespace FileGenerator\Trait;

/**
 * ファイルに出力する文字列を管理する
 * 
 * @package FileGenerator\Trait
 */
trait Text
{
    /**
     * ファイルに出力する文字列
     * 
     * @var string
     */
    protected string $text = "";


    /**
     * ファイルに出力する文字列を取得する
     * 
     * @return string
     */
    protected function getText(): string
    {
        return $this->text;
    }

    /**
     * ファイルに出力する文字列を設定する
     * 
     * @param string $text
     * @return static
     */
    public function setText(string $text): static
    {
        $this->text = $text;

        return $this;
    }

    /**
     * ファイルに出力する文字列を追加する
     * 
     * @param string $text
     * @return static
     */
    public function addText(string $text): static
    {
        $this->text .= $text;

        return $this;
    }
}
