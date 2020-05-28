<?php
   require_once( "rc4.php" );
   $key = "hii";
   $plaintext = "Hello World!";
   $ciphertext = rc4( $key, $plaintext );
   //$decrypted = rc4( $key, $ciphertext );
   $nval = md5($ciphertext);
   $neval = crypt($nval,'$6$rounds=5000$anexamplesalt$');
   echo $neval;
?>