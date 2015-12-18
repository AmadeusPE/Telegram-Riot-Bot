<?php

namespace App\Http\Controllers\Apis\Consume\Riot;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\SSummoner;
use App\Services\SLeague;
use App\Services\SCurrent_Game;

class RiotSummonerController extends Controller
{
    private $Summoner;
    private $summoner_id;
    private $summoner_level;
    private $League;
    private $Current_Game;

    public function __construct( )
    {
        $this->Summoner= \App::make(SSummoner::class);
        $this->League = \App::make(SLeague::class);
        $this->Current_Game = \App::make(SCurrent_Game::class);

    }
    public  function  findPlatformIdByRegion($region)
    {
        switch($region)
        {
            case "na":
                return "NA1";
            case "euw":
                return "EUW1";
            case "br":
                return "BR1";
            case "kr":
                return "KR";
            case "lan":
                return "LA1";
            case "las":
                return "LA2";
            case "eune":
                return "eun1";
            case "oce":
                return "OC1";
            case "ru":
                return "RU";
            case "tr":
                return "tTR1";
        }

        return "This region is no valid , plz try again";
    }

    public  function findSummonerIdByName($summoner_name , $region)
    {

        $this->summoner_id= $this->Summoner->findSummonerIdByName($summoner_name,$region);
        return $this->summoner_id;
    }

    public  function findSummonerLevelByName( $summoner_name, $region)
    {

        $this->summoner_level= $this->Summoner->findSummonerLevelByName($summoner_name,$region);
        return  $this->summoner_level;
    }

    public function findSummonerTierById($summoner_name , $region)
    {
        $summoner_id=$this->findSummonerIdByName($summoner_name,$region);
        $summoner_tier = $this->League->findSummonerTierById($summoner_id,$region);
        return $summoner_tier;
    }
    public  function  findCurrentChampIdBySummonerId($summoner_name,$region)
    {
        $platform_id = $this->findPlatformIdByRegion($region);
        $summoner_id=$this->findSummonerIdByName($summoner_name,$region);
        $summoner_current_champ_id=$this->Current_Game->findCurrentChampIdBySummonerId($summoner_id,$platform_id,$region);
        return $summoner_current_champ_id;
    }
    public  function  findCurrentChampBySummonerName($summoner_name,$region)
    {
        $current_champ_id=$this->findCurrentChampIdBySummonerId($summoner_name,$region);
        $current_champ=$this->Current_Game->findChampByChampId($current_champ_id , $region);
        return $current_champ;
    }
}
