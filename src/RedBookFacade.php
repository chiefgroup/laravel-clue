<?php


namespace ChiefGroup\LaravelClue;
use Illuminate\Support\Facades\Facade;

/**
 * Class RedBookFacade
 *
 * @method static get(string $startTime, string $endTime, string $periodField)
 */
class RedBookFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'RedBookService';
    }
}