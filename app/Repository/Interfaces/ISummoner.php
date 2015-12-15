<?php
/**
 * Created by PhpStorm.
 * User: php-18
 * Date: 15/12/2015
 * Time: 14:49
 */

namespace App\Repository\Interfaces;


interface ISummoner
{
    public function findSummonerIdByName($name , $region);
    public function findSummonerLevel($name,$region);
}