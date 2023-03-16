<?php


namespace ChiefGroup\LaravelClue;
use Illuminate\Support\Facades\Facade;

/**
 * Class TagFacade
 *
 *  @m@method static searchTags(array $searchArr, array $orderArr, int $page = 1, int $prePage = 20)
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