<?php
    $path = dirname(__FILE__).'/email.txt';
    $fp = fopen($path,'a');
    $data = $_POST["eml"]."\r\n";
    fwrite($fp,$data);
    fclose($fp);
    header("Location:emailreturn.html")
?>