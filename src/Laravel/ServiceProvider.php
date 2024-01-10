<?php

namespace FileGenerator\Laravel;

use Illuminate\Support\ServiceProvider as Provider;

use FileGenerator\Laravel\GeneratorManager;
use FileGenerator\Laravel\Facade\Generator;

/**
 * ServiceProvider
 * Facadeの登録とパッケージに含まれるファイルの公開の設定を行う
 * 
 * @package FileGenerator\Laravel
 */
class ServiceProvider extends Provider
{
    /**
     * publications配下を公開する際に使うルートパス
     *
     * @var string
     */
    private string $publicationsPath = __DIR__ . DIRECTORY_SEPARATOR . "publications";


    /**
     * アプリケーションの起動時に実行する
     * FacadeとManagerの紐づけを行う
     * 
     * @return void
     */
    public function register(): void
    {
        // FacadeとManagerの紐づけ
        $this->app->singleton(Generator::class, function () {
            return new GeneratorManager();
        });
    }

    /**
     * アプリケーションのブート時に実行する
     * パッケージに含まれるファイルの公開の設定を行う
     * 
     * @return void
     */
    public function boot(): void
    {
        // config配下の公開
        // 自作パッケージ共通タグ
        $this->publishes([
            $this->publicationsPath . DIRECTORY_SEPARATOR . "config" => config_path(),
        ], "publications");

        // このパッケージのみ
        $this->publishes([
            $this->publicationsPath . DIRECTORY_SEPARATOR . "config" => config_path(),
        ], "simple-logger");
    }
}
