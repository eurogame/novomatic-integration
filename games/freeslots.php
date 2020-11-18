<?php

function getFreeSlots(){
    $client = new Client();
    $client->connect();
    $client->getBonus();
    return $client->bonuses;
}
