<?php
function isBracket(string $expression){
    $patterns = array('{','}','(',')','[',']');
    $occ = array(0,0,0,0,0,0);

    for($i = 0; $i < strlen($expression); $i++){
        for($j = 0; $j < count($patterns); $j++){
            if($expression[$i] == $patterns[$j]){
                $occ[$j]++;
            }
        }
    }
    for ($i=0; $i < count($occ); $i+=2) { 
        if($occ[$i] != $occ[$i+1]){
            return 'false';
        }
    }
    return 'true';
}

$str = "{[{iHTSc}]}p(R)m(){q({})";
echo $str." is ".isBracket($str);
?>