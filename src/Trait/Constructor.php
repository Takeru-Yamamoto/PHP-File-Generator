<?php

namespace FileGenerator\Trait;

use FileGenerator\EnvLoader;

/**
 * Generatorクラスのコンストラクタを管理する
 * 
 * @package FileGenerator\Trait
 */
trait Constructor
{
    /**
     * .envに定義された項目の値を保持するクラス
     * 
     * @var EnvLoader
     */
    protected EnvLoader $env;


    /**
     * コンストラクタ
     * .envファイルの内容を保持するクラスのインスタンスを生成
     */
    function __construct()
    {
        $this->env = new EnvLoader();
    }
}
