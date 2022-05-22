<?php
    $path = dirname(__FILE__).'/email.txt';
    $fp = fopen($path,'a');
    $data = $_POST["eml"];
    fwrite($fp,$data);
    fclose($fp);
?>