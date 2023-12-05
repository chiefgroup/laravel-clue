<?php


use ChiefGroup\LaravelClue\FeiyuFacade;

class BaseTest extends \ChiefGroup\LaravelClue\Tests\TestCase
{
    public function testExample()
    {
        $r = FeiyuFacade::searchClues([]);
        var_dump($r);
        $this->assertTrue(true);
    }
}