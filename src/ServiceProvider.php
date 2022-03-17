<?php

namespace ChiefGroup\LaravelClue;

use Hyperf\Jet\ClientFactory;
use Hyperf\Jet\DataFormatter\DataFormatter;
use Hyperf\Jet\Packer\JsonEofPacker;
use Hyperf\Jet\PathGenerator\PathGenerator;
use Hyperf\Jet\ProtocolManager;
use Hyperf\Jet\ServiceManager;
use Hyperf\Jet\Transporter\GuzzleHttpTransporter;
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
            ServiceManager::register($service = 'YiLiaoService', $protocol = 'jsonrpc-rpc', [
                ServiceManager::NODES => [
                    [$host = config('qf_clue.node.host'), $port = config('qf_clue.node.port_http')],
                ],
            ]);

            return $clientFactory->create($service = 'YiLiaoService', $protocol = 'jsonrpc-rpc');
        });

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['YiLiaoService'];
    }

}