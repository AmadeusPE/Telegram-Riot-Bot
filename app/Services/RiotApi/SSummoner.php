<?php
/**
 * Created by PhpStorm.
 * User: php-18
 * Date: 16/12/2015
 * Time: 9:30
 */

namespace app\Services\RiotApi;

use App\Repository\RiotApi\Interfaces\ISummoner;

class SSummoner
{


    public function __construct(ISummoner $ISummoner)
    {
        $this->ISummoner = $ISummoner;
        $ISummoner->construct();
    }

    public function  findSummonerIdByName($name , $region)
    {
        $summoner_id = $this->ISummoner->findSummonerIdByName($name,$region);
        return $summoner_id;
    }

    public function findSummonerLevelByName($name,$region)
    {
        $summoner_level = $this->ISummoner->findSummonerLevelByName($name,$region);
        return $summoner_level;
    }
}