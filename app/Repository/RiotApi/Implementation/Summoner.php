<?php
/**
 * Created by PhpStorm.
 * User: php-18
 * Date: 16/12/2015
 * Time: 8:48
 */

namespace app\Repository\RiotApi\Implementation;

use GuzzleHttp;
use App\Repository\RiotApi\Interfaces\ISummoner;

class Summoner implements ISummoner
{
    private $client;

    public  function  construct()
    {

    }
    public function findSummonerIdByName($name , $region)
    {

        $this->client = new GuzzleHttp\Client();
        $riot_response=$this->client->request('GET','https://'.$region.'.api.pvp.net/api/lol/'.$region.'/v1.4/summoner/by-name/'.$name.'?api_key=50257f98-4d3b-4fbe-8b1c-0e367cbf8ee1');
        $json_response = json_decode($riot_response->getBody());
        $response= $json_response->$name->id;
        return $response;
    }

    public function findSummonerLevelByName($name,$region)
    {
        $this->client = new GuzzleHttp\Client();
        $riot_response=$this->client->request('GET','https://'.$region.'.api.pvp.net/api/lol/'.$region.'/v1.4/summoner/by-name/'.$name.'?api_key=50257f98-4d3b-4fbe-8b1c-0e367cbf8ee1');
        $json_response = json_decode($riot_response->getBody());
        $response= $json_response->$name->summonerLevel;
        return $response;

    }
}