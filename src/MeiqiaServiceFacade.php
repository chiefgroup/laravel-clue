<?php


namespace ChiefGroup\LaravelClue;
use Illuminate\Support\Facades\Facade;

/**
 * Class MeiqiaServiceFacade
 *
 * @method static get(string $startTime, string $endTime, string $periodField)
 * @method static searchClues(array $searchArr, array $orderArr, int $page, int $perPage)
 * @method static saveAccount(array $params, array $tagIds)
 * @method static updateAccount(int $id, array $params)
 * @method static destroyAccount(int $id)
 * @method static isAccountExists(int $id)
 * @method static searchAccounts(array $searchArr, array $orderArr, int $page, int $perPage)
 */

class MeiqiaServiceFacade extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'MeiqiaService';
    }
}