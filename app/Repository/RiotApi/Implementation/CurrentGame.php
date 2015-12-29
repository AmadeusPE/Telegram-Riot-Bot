<?php
/**
 * Created by PhpStorm.
 * User: php-18
 * Date: 17/12/2015
 * Time: 11:36
 */

namespace app\Repository\RiotApi\Implementation;

use App\Repository\RiotApi\Interfaces\ICurrentGame;
use GuzzleHttp;


class CurrentGame implements  ICurrentGame
{
    private $client;
    public  function  __construct()
    {

    }

    public  function  findCurrentChampIdBySummonerId($summoner_id,$platform_id,$region)
    {
        $this->client = new GuzzleHttp\Client();
        $riot_response=$this->client->request('GET','https://'.$region.'.api.pvp.net/observer-mode/rest/consumer/getSpectatorGameInfo/'.$platform_id.'/'.$summoner_id.'?api_key=50257f98-4d3b-4fbe-8b1c-0e367cbf8ee1');
        $json_response = json_decode($riot_response->getBody());

        foreach($json_response->participants as $item)
        {
                if($item->summonerId == $summoner_id)
                    $response_champ_id=$item->championId;
        }
        return $response_champ_id;
    }

    public  function  findChampByChampId($champ_id , $region)
    {
        $this->client = new GuzzleHttp\Client();
        $riot_response=$this->client->request('GET','https://global.api.pvp.net/api/lol/static-data/'.$region.'/v1.2/champion/'.$champ_id.'?api_key='.env('KEY'));
        $json_response = json_decode($riot_response->getBody());
        $champ_name=$json_response->name;
        return $champ_name;
    }

//Geranimo
}