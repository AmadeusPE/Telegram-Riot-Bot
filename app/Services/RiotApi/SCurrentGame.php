<?php

namespace app\Services\RiotApi;

use App\Repository\RiotApi\Interfaces\ICurrentGame;

class SCurrentGame
{
    public  function  __construct(ICurrentGame $ICurrentGame)
    {
        $this->ICurrentGame = $ICurrentGame;

    }

    public  function  findCurrentChampIdBySummonerId($summoner_id,$platform_id,$region)
    {
        $summoner_current_champ_id=$this->ICurrentGame->findCurrentChampIdBySummonerId($summoner_id,$platform_id,$region);
        return $summoner_current_champ_id;
    }

}