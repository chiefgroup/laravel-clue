<?php

namespace ChiefGroup\LaravelClue;

use Hyperf\Jet\ClientFactory;
use Hyperf\Jet\DataFormatter\DataFormatter;
use Hyperf\Jet\Packer\JsonEofPacker;
use Hyperf\Jet\PathGenerator\PathGenerator;
use Hyperf\Jet\ProtocolManager;
use Hyperf\Jet\ServiceManager;
use Hyperf\Jet\Transporter\StreamSocketTransporter;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

/**
 * Class ServiceProvider.
 *
 */
class ServiceProvider extends LaravelServiceProvider implements DeferrableProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config.php' => config_path('qf_clue.php')
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //注册协议
        ProtocolManager::register($protocol = 'jsonrpc', [
            ProtocolManager::TRANSPORTER    => new StreamSocketTransporter(),
            ProtocolManager::PACKER         => new JsonEofPacker(),
            ProtocolManager::PATH_GENERATOR => new PathGenerator(),
            ProtocolManager::DATA_FORMATTER => new DataFormatter(),
        ]);

        $clientFactory = new ClientFactory();

        $this->app->singleton('YiLiaoService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'YiLiaoService', $protocol = 'jsonrpc', [
                ServiceManager::NODES => [
                    [$host = config('qf_clue.node.host'), $port = config('qf_clue.node.port')],
                ],
            ]);

            return $clientFactory->create($service = 'YiLiaoService', $protocol = 'jsonrpc');
        });

        $this->app->singleton('FeiyuService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'FeiyuService', $protocol = 'jsonrpc', [
                ServiceManager::NODES => [
                    [$host = config('qf_clue.node.host'), $port = config('qf_clue.node.port')],
                ],
            ]);

            return $clientFactory->create($service = 'FeiyuService', $protocol = 'jsonrpc');
        });

        $this->app->singleton('FormService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'FormService', $protocol = 'jsonrpc', [
                ServiceManager::NODES => [
                    [$host = config('qf_clue.node.host'), $port = config('qf_clue.node.port')],
                ],
            ]);

            return $clientFactory->create($service = 'FormService', $protocol = 'jsonrpc');
        });

        $this->app->singleton('SheetService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'SheetService', $protocol = 'jsonrpc', [
                ServiceManager::NODES => [
                    [$host = config('qf_clue.node.host'), $port = config('qf_clue.node.port')],
                ],
            ]);

            return $clientFactory->create($service = 'FormService', $protocol = 'jsonrpc');
        });

        $this->app->singleton('FilterService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'FilterService', $protocol = 'jsonrpc', [
                ServiceManager::NODES => [
                    [$host = config('qf_clue.node.host'), $port = config('qf_clue.node.port')],
                ],
            ]);

            return $clientFactory->create($service = 'FilterService', $protocol = 'jsonrpc');
        });

        $this->app->singleton('TagService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'TagService', $protocol = 'jsonrpc', [
                ServiceManager::NODES => [
                    [$host = config('qf_clue.node.host'), $port = config('qf_clue.node.port')],
                ],
            ]);

            return $clientFactory->create($service = 'TagService', $protocol = 'jsonrpc');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['YiLiaoService', 'FeiyuService', 'FormService', 'SheetService', 'TagService', 'FilterService'];
    }

}