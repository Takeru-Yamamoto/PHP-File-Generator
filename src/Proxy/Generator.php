<?php

namespace FileGenerator\Proxy;

use StaticProxy\StaticProxy;

use FileGenerator\Proxy\GeneratorManager;

/**
 * GeneratorのProxy
 * GeneratorManagerのMethodをstaticに呼び出せるようにする
 * 
 * @package FileGenerator\Proxy
 * 
 * @method static \FileGenerator\Interface\GeneratorInterface make()
 * @method static bool generate(?string $directory = null, ?string $fileName = null, ?string $text = null)
 * 
 * @see \FileGenerator\Proxy\Interface\ManagerInterface
 */
class Generator extends StaticProxy
{
    /** 
     * GeneratorManagerの実クラス名を取得する
     * 
     * @return string 
     */
    public static function getRealInstanceName(): string
    {
        return GeneratorManager::class;
    }
}
