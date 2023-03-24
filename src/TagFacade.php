<?php


namespace ChiefGroup\LaravelClue;
use Illuminate\Support\Facades\Facade;

/**
 * Class TagFacade
 *
 *  @method static searchTags(array $searchArr, array $orderArr, int $page = 1, int $perPage = 20)
 *  @method static searchTagGroups(array $searchArr, array $orderArr, int $page = 1, int $perPage = 20)
 */
class TagFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'TagService';
    }
}