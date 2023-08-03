<?php


namespace ChiefGroup\LaravelClue;
use Illuminate\Support\Facades\Facade;

/**
 * Class FilterFacade
 *
 *  @method static getClues(string $code, string $startAt, string $endAt, string $whereBetweenField = 'created_at', int $page = 1);
 */
class FilterFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'FilterService';
    }
}