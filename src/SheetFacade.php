<?php


namespace ChiefGroup\LaravelClue;
use Illuminate\Support\Facades\Facade;

/**
 * Class SheetFacade
 *
 * @method static searchClues(array $searchArr, array $orderArr, $page, $prePage)
 * @method static searchAccounts(array $searchArr,array $orderArr = ['column' => 'created_at', 'direction' => 'desc'],int $page = 1,int $perPage = 20)
 * @method static batchSaveClues(array $rows, string $num)
 */
class SheetFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'SheetService';
    }
}