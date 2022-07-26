<?php


namespace ChiefGroup\LaravelClue;
use Illuminate\Support\Facades\Facade;

/**
 * Class FeiyuFacade
 *
 * @method static searchClues(array $searchArr, array $orderArr, $page, $prePage)
 */
class FormClueFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'FormClueService';
    }
}