<?php


namespace ChiefGroup\LaravelClue;
use Illuminate\Support\Facades\Facade;

/**
 * Class FormClueFacade
 *
 * @method static searchClues(array $searchArr, array $orderArr, $page, $prePage)
 * @method static searchAccounts(array $searchArr,array $orderArr = ['column' => 'created_at', 'direction' => 'desc'],int $page = 1,int $perPage = 20)
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