<?php


namespace ChiefGroup\LaravelClue;
use Illuminate\Support\Facades\Facade;

/**
 * Class FormClueFacade
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
        return 'FormService';
    }
}