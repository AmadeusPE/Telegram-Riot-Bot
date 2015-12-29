<?php
/**
 * Created by PhpStorm.
 * User: php-18
 * Date: 16/12/2015
 * Time: 8:29
 */

namespace App\Repository\RiotApi\Interfaces;


interface ILeague
{
    public function construct();
    public function findSummonerTierById($summoner_id , $region);

}