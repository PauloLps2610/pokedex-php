<?php
class Pokemon
{
    function getPokemon($param){
        $name = strtolower($param);
        $url = 'https://pokeapi.co/api/v2/pokemon/'.$name;
           $result = file_get_contents($url, false);
        $pokemon = json_decode($result, true);

        $pokeData['sprite'] = $pokemon['sprites']['front_default'];
        $pokeData['name'] = ucfirst($pokemon['name']) ;
        $pokeData['id'] = $pokemon['id'];
        $pokeStatus = $pokemon['stats'];
        $stats=[];
        foreach($pokeStatus as $stat){ 
           array_push($stats, $stat['stat']['name']);
           array_push($stats, $stat['base_stat']);
        }
        $pokeData['stats'] = $stats;
        return $pokeData;
        
                   
        
    }
}
