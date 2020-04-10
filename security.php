<?php
session_start();
error_reporting(0);
function encrypt($msg){
  $encryption_key = "30c703fbc41f455131743fb2936bca945f71bddc1781bd9a2359b607130d2838";
  $key = hex2bin($encryption_key);
  $nonceSize = openssl_cipher_iv_length('aes-256-ctr');
  $nonce = openssl_random_pseudo_bytes($nonceSize);
  $ciperT = openssl_encrypt($msg, "aes-256-ctr", $key, OPENSSL_RAW_DATA, $nonce);
  return base64_encode($nonce.$ciperT);
}

function decrypt($msg){
  $encryption_key = "30c703fbc41f455131743fb2936bca945f71bddc1781bd9a2359b607130d2838";
  $key = hex2bin($encryption_key);
  $nonceSize = openssl_cipher_iv_length('aes-256-ctr');
  $msg = base64_decode($msg);
  $nonce = mb_substr($msg, 0, $nonceSize, '8bit');
  $ciphertext = mb_substr($msg, $nonceSize, null, '8bit');
  $value = openssl_decrypt($ciphertext, "aes-256-ctr", $key, OPENSSL_RAW_DATA, $nonce);
  return $value;
}
?>
