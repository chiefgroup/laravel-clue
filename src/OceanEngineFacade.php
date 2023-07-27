<?php


namespace ChiefGroup\LaravelClue;
use Illuminate\Support\Facades\Facade;

/**
 * Class OceanEngineFacade
 *
 * @method static request(string $method, string $path, array $option)
 */
class OceanEngineFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'OceanEngineService';
    }
}