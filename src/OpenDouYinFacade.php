<?php

namespace ChiefGroup\LaravelClue;
use Illuminate\Support\Facades\Facade;

/**
 * Class OpenDouYinFacade
 *
 * @method static mixed request(string $method, string $path, array $option)
 * @method static string getClientToken(bool $force = false)
 * @method static mixed getAccessTokenByCode(string $code, string $identity, bool $isToken = false)
 * @method static mixed requestOther(string $method, string $path, array $option = [], ?string $identity = null)
 * @method static mixed refreshToken(string $identity, ?string $refreshToken = null, ?string $clientKey = null)
 * @method static mixed getAccessTokenByIdentity(string $identity, bool $isToken = false)
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