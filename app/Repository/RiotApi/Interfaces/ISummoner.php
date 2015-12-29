<?php
/**
 * Created by PhpStorm.
 * User: php-18
 * Date: 15/12/2015
 * Time: 14:49
 */

namespace App\Repository\RiotApi\Interfaces;


interface ISummoner
{
    public function construct();
    public function findSummonerIdByName($name , $region);
    public function findSummonerLevelByName($name,$region);
}