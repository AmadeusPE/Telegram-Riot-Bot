<?php
/**
 * Created by PhpStorm.
 * User: php-18
 * Date: 17/12/2015
 * Time: 14:24
 */

namespace app\Services;
use App\Repository\Interfaces\ICurrent_Game;

class SCurrent_Game
{
    public  function  __construct(ICurrent_Game $ICurrent_Game)
    {
        $this->ICurrent_Game = $ICurrent_Game;

    }

    public  function  findCurrentChampIdBySummonerId($summoner_id,$platform_id,$region)
    {
        $summoner_current_champ_id=$this->ICurrent_Game->findCurrentChampIdBySummonerId($summoner_id,$platform_id,$region);
        return $summoner_current_champ_id;
    }

}