<?php
/**
 * Created by PhpStorm.
 * User: php-18
 * Date: 15/12/2015
 * Time: 14:09
 */

namespace App\Repository\RiotApi\Interfaces;


interface ICurrentGame
{
    public  function  findCurrentChampIdBySummonerId($summoner_id,$platform_id,$region);
    public  function  findChampByChampId($champ_id , $region);
}