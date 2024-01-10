<?php

namespace FileGenerator\Laravel\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * GeneratorのFacade
 * GeneratorManagerのMethodをstaticに呼び出せるようにする
 * 
 * @package FileGenerator\Laravel\Facade
 * 
 * @method static \FileGenerator\Laravel\Interface\GeneratorInterface make()
 * @method static bool generate(?string $directory = null, ?string $fileName = null, ?string $text = null)
 * 
 * @see \FileGenerator\Laravel\Interface\ManagerInterface
 */
class Generator extends Facade
{
    /** 
     * GeneratorManagerにアクセスするためのFacadeの名前を取得する
     * 
     * @return string 
     */
    protected static function getFacadeAccessor(): string
    {
        return static::class;
    }
}
