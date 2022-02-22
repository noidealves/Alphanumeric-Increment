<?php

function increment($alphanum) {
    $alphanum = preg_replace("/[^A-Za-z0-9]/", '', $alphanum);
    $alphanum = $alphanum == "" ? "0" : $alphanum;
    
    for ($i = strlen($alphanum) - 1; $i >= 0; --$i) {
        $c = $alphanum[$i];
        $c = $c != "9" ? $c != "z" ? $c != "Z" ? ++$c : "0" : "A" : "a";
        $alphanum[$i] = $c;
        
        if ($c == "0" && $i == 0) {
            $alphanum .= "0";
        }
        else if ($c != "0") {
            break;
        }
    }
    
    return $alphanum;
}

?>
