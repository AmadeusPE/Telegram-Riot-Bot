<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/summoner/{summoner_name}/{region}','Apis\Consume\Riot\RiotSummonerController@findSummonerIdByName');
Route::get('/level/{summoner_name}/{region}','Apis\Consume\Riot\RiotSummonerController@findSummonerLevelByName');
Route::get('/tier/{summoner_name}/{region}','Apis\Consume\Riot\RiotSummonerController@findSummonerTierById');
Route::get('/champion/{summoner_name}/{region}','Apis\Consume\Riot\RiotSummonerController@findCurrentChampIdBySummonerId');
