<?php


namespace ChiefGroup\LaravelClue;
use Illuminate\Support\Facades\Facade;

/**
 * Class YiLiaoServiceFacade
 *
 * @method static get(string $item, string $startTime, string $endTime)
 */
class YiLiaoServiceFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'YiLiaoService';
    }
}