<?php


namespace ChiefGroup\LaravelClue;
use Illuminate\Support\Facades\Facade;

/**
 * Class FilterFacade
 *
 *  @method static getClues($systemId, string $startAt, string $endAt, string $whereBetween = 'created_at');
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