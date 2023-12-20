<?php

namespace ChiefGroup\LaravelClue;
use Illuminate\Support\Facades\Facade;

/**
 * Class OpenDouYinFacade
 *
 * @method static mixed request(string $method, string $path, array $option)
 * @method static string getAccessToken(bool $force = false)
 * @method static mixed getAccessTokenByCode(string $code, bool $force = false)
 * @method static mixed getConfig(string $option = null)
 */
class OpenDouYinFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'OpenDouYinService';
    }
}