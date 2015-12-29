<?php

Route::get('/summoner/{summoner_name}/{region}','Apis\Consume\Riot\RiotSummonerController@findSummonerIdByName');
Route::get('/level/{summoner_name}/{region}','Apis\Consume\Riot\RiotSummonerController@findSummonerLevelByName');
Route::get('/tier/{summoner_name}/{region}','Apis\Consume\Riot\RiotSummonerController@findSummonerTierById');
Route::get('/champion/{summoner_name}/{region}','Apis\Consume\Riot\RiotSummonerController@findCurrentChampIdBySummonerId');
Route::post('/slack/response','Apis\Consume\Slack\SlackController@getResponse');
