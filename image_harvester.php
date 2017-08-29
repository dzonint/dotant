<?php
ob_start();                      // start capturing output
include 'data.js';               // execute the file
$data = ob_get_contents();       // get the contents from the buffer
ob_end_clean();                  // stop buffering and discard contents

// Make sure to update JSON file before harvesting!

// Hero harvest.
$heroStart = strpos($data, 'HERO START.');
$heroEnd = strpos($data, '// HERO END.');

// Here we remove everything that's not JSON (eg. 'heroes =' or '// HERO END.'). We want '[' at start and ']' at the end.
$heroes = substr($data, $heroStart+25, $heroEnd-157);
// echo($heroes);
$decoded = html_entity_decode($heroes);
$heroes = json_decode($decoded, TRUE);
//print_r($heroes);

foreach($heroes as $hero){
    foreach($hero as $key => $val){
        if($key == 'name') // substr(14) so we remove 'npc_dota_hero' prefix.
            copy( "http://cdn.dota2.com/apps/dota2/images/heroes/".substr($val, 14)."_sb.png", "C:\\xampp\\htdocs\\dota\\img\\heroes\\sb\\".substr($val, 14)."_sb.png");
    }
}

// Item harvest.
$itemStart = strpos($data, 'ITEM START.');
$itemEnd = strpos($data, '// ITEM END.');
$items = substr($data, $itemStart+52, $itemEnd-$itemStart-65);
$decoded = html_entity_decode($items);
$items = json_decode($decoded, TRUE);
//print_r($items);

foreach($items as $item){
    foreach($item as $key => $val){
        if($key == 'name') // substr(5) so we remove 'item_' prefix. Also note that 'recipe_lg' is the only recipe icon that exists.
            copy( "http://cdn.dota2.com/apps/dota2/images/items/".substr($val, 5)."_lg.png", "C:\\xampp\\htdocs\\dota\\img\\items\\lg\\".substr($val, 5)."_lg.png");
    }
}
?>