<?php
/**
 * Created by PhpStorm.
 * User: php-18
 * Date: 17/12/2015
 * Time: 8:54
 */

namespace app\Repository\RiotApi\Implementation;
use GuzzleHttp;
use App\Repository\RiotApi\Interfaces\ILeague;



class League implements ILeague
{
    private $client;
    private $cont;

    public  function  construct()
    {

    }
    public function findSummonerTierById($summoner_id , $region)
    {
        $this->client = new GuzzleHttp\Client();
        $riot_response=$this->client->request('GET','https://'.$region.'.api.pvp.net/api/lol/'.$region.'/v2.5/league/by-summoner/'.$summoner_id.'?api_key=50257f98-4d3b-4fbe-8b1c-0e367cbf8ee1');
        $json_response = json_decode($riot_response->getBody());

        foreach($json_response->$summoner_id as $item)
        {
            $response_tier= $item->tier;
            foreach($item->entries as $sub_item)
            {
                if($sub_item->playerOrTeamId == $summoner_id)
                    $response_divison=$sub_item->division;
            }
        }
        $response_tier_division=$response_tier.$response_divison;
        return $response_tier_division ;

    }
}