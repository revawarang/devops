<?php

function rc4($str, $key)
{
    //Key-scheduling algorithm (KSA)
    for ($s = array(), $i = 0; $i < 256; $i++)
        $s[$i] = $i;
 
    for ($j = 0, $i = 0; $i < 256; $i++)
    {
        $j = ($j + $s[$i] + ord($key[$i % strlen($key)])) % 256;
        $x = $s[$i];
        $s[$i] = $s[$j];
        $s[$j] = $x;
    }
    //Pseudo-random generation algorithm (PRGA)
    for ($i = 0, $j = 0, $res = '', $y = 0; $y < strlen($str); $y++)
    {
        $i = ($i + 1) % 256;
        $j = ($j + $s[$i]) % 256;
        $x = $s[$i];
        $s[$i] = $s[$j];
        $s[$j] = $x;
        $res .= $str[$y] ^ chr($s[($s[$i] + $s[$j]) % 256]);
        echo $res;
    }
    return $res;
    
}
?>


