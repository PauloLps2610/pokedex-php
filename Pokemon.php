<?php
class Pokemon
{
    function getPokemon($param){
        $name = strtolower($param);
        $url = 'https://pokeapi.co/api/v2/pokemon/'.$name;
        $result = file_get_contents($url, false);
        $pokemon = json_decode($result, true);
        return $pokemon;
        
                   
        
    }
}
