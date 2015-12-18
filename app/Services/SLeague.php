<?php
/**
 * Created by PhpStorm.
 * User: php-18
 * Date: 17/12/2015
 * Time: 9:19
 */

namespace app\Services;
use App\Repository\Interfaces\ILeague;

class SLeague
{
    public function __construct(ILeague $ILeague)
    {
        $this->ILeague = $ILeague;
        $ILeague->construct();
    }
    public function findSummonerTierById($summoner_id , $region)
    {
        $summoner_tier = $this->ILeague->findSummonerTierById($summoner_id,$region);
        return $summoner_tier;
    }

}